<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    // Tabla por convención: 'facilities'
    protected $table = 'facilities';

    // Asumimos que tiene timestamps
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'name',
        'description',
        'capacity',
    ];

    /**
     * Relación: una instalación puede tener muchas reservas
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
