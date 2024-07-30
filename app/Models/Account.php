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
        'organization_id',
        'address_id',
        'language_id',
        'currency_id',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }


    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    
}
