<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends Model
{
    use HasFactory;

    // Tabla por convención: 'services'
    protected $table = 'services';

    // Timestamps automáticos
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'total_services',
        'user_id', // referencia al usuario que crea el servicio
    ];

    /**
     * Relación: un servicio pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
