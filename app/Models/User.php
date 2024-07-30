<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function account(): HasOne
    {
        return $this->hasOne(Account::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function getRolesName()
    {
        // This should return the user's role. Implement your logic here.
        return 'Teacher'; // Example static return value
    }

}
