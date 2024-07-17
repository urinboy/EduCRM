<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'photo',
        'first_name',
        'last_name',
        'middle_name',
        'birthday',
        'gender',
        'bio',
        'phone',
        'organization',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'zip_code',
        'language_id',
        'currency',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
