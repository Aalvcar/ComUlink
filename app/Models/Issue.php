<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Issue extends Model
{
    use HasFactory;

    // Tabla por convención: 'issues'
    protected $table = 'issues';

    // Timestamps automáticos
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'title',
        'description',
        'category',
        'repairer',
        'status',
        'reported',
        'cause',
        'user_id', // referencia al usuario que reporta la incidencia
    ];

    /**
     * Relación: una incidencia pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
