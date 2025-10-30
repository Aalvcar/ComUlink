<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Role extends Model
{
    use HasFactory;

    // La tabla sigue las convenciones ('roles'), así que no hace falta especificarla

    // Mantiene timestamps
    public $timestamps = true;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relación: un rol tiene muchos usuarios
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
