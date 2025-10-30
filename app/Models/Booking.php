<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Booking extends Model
{
     use HasFactory;

    // Tabla por convención: 'bookings'
    protected $table = 'bookings';

    // Timestamps automáticos
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'user_id',        // referencia al usuario que hace la reserva
        'facility_id',    // referencia a la instalación reservada
    ];

    /**
     * Relación: una reserva pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: una reserva pertenece a una instalación
     */
    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
