<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'service_id',
        'barber_id',
        'start_time',
        'end_time',
        'total_price',
        'status',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Services::class);
    }

    public function barber(): BelongsTo
    {
        return $this->belongsTo(Barbers::class);
    }
}