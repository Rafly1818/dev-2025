<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Barbers;
use App\Models\Reservations;
use App\Models\Schedules;
use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * @OA\Info(
 * version="1.0.0",
 * title="The Modern Cut API",
 * description="API Documentation for The Modern Cut Barbershop Reservation System"
 * )
 */
class ReservationApiController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/v1/services",
     * summary="Get list of services",
     * tags={"Services"},
     * @OA\Response(response=200, description="Successful operation")
     * )
     */
    public function getServices()
    {
        $services = Services::all(['id', 'name', 'price', 'duration_minutes']);
        return response()->json($services);
    }

    /**
     * @OA\Get(
     * path="/api/v1/barbers",
     * summary="Get list of active barbers",
     * tags={"Barbers"},
     * @OA\Response(response=200, description="Successful operation")
     * )
     */
    public function getBarbers()
    {
        $barbers = Barbers::where('status', 'active')->get(['id', 'name']);
        return response()->json($barbers);
    }

    /**
     * @OA\Get(
     * path="/api/v1/availability",
     * summary="Check available time slots",
     * tags={"Reservations"},
     * @OA\Parameter(name="date", in="query", required=true, @OA\Schema(type="string", format="date", example="2025-07-25")),
     * @OA\Parameter(name="barber_id", in="query", required=true, @OA\Schema(type="integer", example=1)),
     * @OA\Response(response=200, description="Returns available time slots"),
     * @OA\Response(response=404, description="Barber not working on this day")
     * )
     */
    public function getAvailability(Request $request)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'barber_id' => 'required|exists:barbers,id',
        ]);

        $date = Carbon::parse($request->date);
        $dayOfWeek = $date->dayOfWeekIso;

        $schedule = Schedules::where('barber_id', $request->barber_id)
            ->where('day_of_week', $dayOfWeek)
            ->first();

        if (!$schedule) {
            return response()->json(['message' => 'Barber is not available on this day.'], 404);
        }

        $existingReservations = Reservations::where('barber_id', $request->barber_id)
            ->whereDate('start_time', $date->toDateString())
            ->pluck('start_time')
            ->map(fn($time) => Carbon::parse($time)->format('H:i'))
            ->toArray();

        $slots = [];
        $startTime = Carbon::parse($schedule->start_time);
        $endTime = Carbon::parse($schedule->end_time);

        while ($startTime < $endTime) {
            $slot = $startTime->format('H:i');
            if (!in_array($slot, $existingReservations)) {
                $slots[] = $slot;
            }
            $startTime->addMinutes(30); // Interval 30 menit
        }

        return response()->json($slots);
    }

    /**
     * @OA\Post(
     * path="/api/v1/reservations",
     * summary="Create a new reservation",
     * tags={"Reservations"},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"service_id", "barber_id", "start_time", "customer_name", "customer_email", "customer_phone"},
     * @OA\Property(property="service_id", type="integer", example=1),
     * @OA\Property(property="barber_id", type="integer", example=1),
     * @OA\Property(property="start_time", type="string", format="date-time", example="2025-07-25 10:30:00"),
     * @OA\Property(property="customer_name", type="string", example="John Doe"),
     * @OA\Property(property="customer_email", type="string", format="email", example="john.doe@example.com"),
     * @OA\Property(property="customer_phone", type="string", example="08123456789")
     * )
     * ),
     * @OA\Response(response=201, description="Reservation created successfully"),
     * @OA\Response(response=422, description="Validation error")
     * )
     */
    public function createReservation(Request $request)
    {
        try {
            $validated = $request->validate([
                'service_id' => 'required|exists:services,id',
                'barber_id' => 'required|exists:barbers,id',
                'start_time' => 'required|date_format:Y-m-d H:i:s',
                'customer_name' => 'required|string|max:255',
                'customer_email' => 'required|email|max:255',
                'customer_phone' => 'required|string|max:20',
            ]);

            $service = Services::find($validated['service_id']);
            $startTime = Carbon::parse($validated['start_time']);

            // Validasi tambahan (misal: cek apakah slot masih tersedia) bisa ditambahkan di sini

            $reservation = Reservations::create([
                'service_id' => $service->id,
                'barber_id' => $validated['barber_id'],
                'start_time' => $startTime,
                'end_time' => $startTime->copy()->addMinutes($service->duration_minutes),
                'total_price' => $service->price,
                'customer_name' => $validated['customer_name'],
                'customer_email' => $validated['customer_email'],
                'customer_phone' => $validated['customer_phone'],
                'status' => 'scheduled',
            ]);

            return response()->json(['message' => 'Reservation created successfully', 'data' => $reservation], 201);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Validation failed', 'errors' => $e->errors()], 422);
        }
    }
}