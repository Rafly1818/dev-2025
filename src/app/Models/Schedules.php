<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedules extends Model
{
    use HasFactory;

    public $timestamps = false; 
    
    // Izinkan kolom-kolom ini untuk diisi
    protected $fillable = [
        'barber_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    // Definisikan bahwa Jadwal ini 'milik' satu Barber
    public function barber(): BelongsTo
    {
        return $this->belongsTo(Barbers::class);
    }
}