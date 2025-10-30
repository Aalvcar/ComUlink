<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Proposal extends Model
{
    use HasFactory;

    // Tabla por convención: 'proposals'
    protected $table = 'proposals';

    // Timestamps automáticos
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'title',
        'description',
        'category',
        'total_votes',
        'start_date',
        'end_date',        
        'user_id', // referencia al usuario que crea la propuesta
    ];

    /**
     * Relación: una propuesta pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: una propuesta tiene muchos votos
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
