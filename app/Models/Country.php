<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_id', 'code', 'name', 'phonecode'];

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
