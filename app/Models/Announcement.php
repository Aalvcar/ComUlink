<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Announcement extends Model
{
    use HasFactory;

    // Tabla por convención: 'announcements'
    protected $table = 'announcements';

    // Asumimos que tiene timestamps
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'title',
        'description',
        'event_date',   // fecha del anuncio
        'user_id' // referencia al usuario que lo creó
    ];

    /**
     * Relación: un anuncio pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
