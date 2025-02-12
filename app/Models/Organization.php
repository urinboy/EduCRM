<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'website',
    ];

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
