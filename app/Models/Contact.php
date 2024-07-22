<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'email', 'phone_number', 'subject', 'message', 
        'ip_address', 'device', 'platform', 'browser', 
        'location', 'latitude', 'longitude', 'mac_address', 'status'
    ];
}
