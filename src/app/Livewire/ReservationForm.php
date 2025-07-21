<?php

namespace App\Livewire;

use App\Models\Barbers;
use App\Models\Reservations;
use App\Models\Schedules;
use App\Models\Services;
use Carbon\Carbon;
use Livewire\Component;

class ReservationForm extends Component
{
    // Properti untuk data form
    public $name;
    public $email;
    public $phone;
    public $selectedService;
    public $selectedBarber;
    public $selectedDate;
    public $selectedTime;

    // Properti untuk data dinamis
    public $services;
    public $barbers;
    public $timeSlots = [];

    // Aturan validasi
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'selectedService' => 'required|exists:services,id',
        'selectedBarber' => 'required|exists:barbers,id',
        'selectedDate' => 'required|date|after_or_equal:today',
        'selectedTime' => 'required',
    ];

    // Method ini dijalankan saat komponen pertama kali dimuat
    public function mount()
    {
        $this->services = Services::all();
        $this->barbers = Barbers::where('status', 'active')->get();
    }

    // Method ini dijalankan setiap kali properti $selectedDate atau $selectedBarber berubah
    public function updated($propertyName)
    {
        if ($propertyName === 'selectedDate' || $propertyName === 'selectedBarber') {
            $this->generateTimeSlots();
        }
    }

    public function generateTimeSlots()
    {
        $this->timeSlots = [];
        if (!$this->selectedDate || !$this->selectedBarber) {
            return;
        }

        $date = Carbon::parse($this->selectedDate);
        $dayOfWeek = $date->dayOfWeekIso; // 1 = Senin, 7 = Minggu

        // 1. Dapatkan jadwal kerja barber
        $schedule = Schedules::where('barber_id', $this->selectedBarber)
            ->where('day_of_week', $dayOfWeek)
            ->first();

        if (!$schedule) {
            return; // Barber tidak bekerja pada hari ini
        }

        // 2. Dapatkan reservasi yang sudah ada pada hari itu
        $existingReservations = Reservations::where('barber_id', $this->selectedBarber)
            ->whereDate('start_time', $date->toDateString())
            ->pluck('start_time')
            ->map(function ($time) {
                return Carbon::parse($time)->format('H:i');
            })->toArray();

        // 3. Buat slot waktu yang tersedia
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

        $this->timeSlots = $slots;
    }

    // Method ini dijalankan saat form disubmit
    public function save()
    {
        $this->validate();

        $service = Services::find($this->selectedService);
        $startTime = Carbon::parse($this->selectedDate . ' ' . $this->selectedTime);
        $endTime = $startTime->copy()->addMinutes($service->duration_minutes);

        Reservations::create([
            'customer_name' => $this->name,
            'customer_email' => $this->email,
            'customer_phone' => $this->phone,
            'service_id' => $this->selectedService,
            'barber_id' => $this->selectedBarber,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'total_price' => $service->price,
            'status' => 'scheduled',
        ]);

        session()->flash('success', 'Reservasi Anda berhasil dibuat!');
        $this->reset(); // Mengosongkan form
        $this->mount(); // Memuat ulang data services & barbers
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}