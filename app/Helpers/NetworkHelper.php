<?php

namespace App\Helpers;

class NetworkHelper
{
    public static function getMacAddress()
    {
        try {
            $mac = exec('getmac');
            $mac = strtok($mac, ' ');
            return $mac;
        } catch (\Exception $e) {
            \Log::error('Error retrieving MAC address: ' . $e->getMessage());
            return 'Unknown';
        }
    }
}
