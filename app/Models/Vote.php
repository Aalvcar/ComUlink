<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Vote extends Model
{
    use HasFactory;

    // Tabla por convención: 'votes'
    protected $table = 'votes';

    // Desactivar timestamps si la tabla no los tiene
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = [
        'user_id',
        'proposal_id',
        'vote_type',
    ];

    /**
     * Relación: un voto pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: un voto pertenece a una propuesta
     */
    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}
