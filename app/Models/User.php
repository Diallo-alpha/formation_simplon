<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'profil',
        'niveau',
        'telephone',
        'adresse',
        'email',
        'role',
        'password',
    ];
    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
    public function formations()
        {
            return $this->belongsToMany(Formation::class, 'candidatures', 'formation_id', 'user_id');

        }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // Dans app/Models/User.php

    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

}
