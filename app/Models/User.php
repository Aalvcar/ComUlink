<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    // Tabla por convención: 'users'
    protected $table = 'users';

    // Campos asignables masivamente
    protected $fillable = [
        'email',
        'name',
        'surname',
        'password',
        'address',
        'phone',
        'birth_date',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'birth_date' => 'date', // si quieres manejar fechas como Carbon
        ];
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relación: un usuario tiene muchas proposals
     */
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    /**
     * Relación: un usuario tiene muchas bookings
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Relación: un usuario tiene muchos votes
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Relación: un usuario tiene muchos announcements
     */
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    /**
     * Relación: un usuario tiene muchos services
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Relación: un usuario tiene muchas incidencias
     */
    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
