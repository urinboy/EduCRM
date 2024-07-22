<?php

namespace App\Helpers;

class NetworkHelper
{
    public static function getMacAddress()
    {

        try {
            $mac = null;
            if (PHP_OS === 'Linux' || PHP_OS === 'Darwin') {
                $mac = shell_exec("ifconfig -a | grep -Po 'HWaddr \K.*$'");
                if (empty($mac)) {
                    $mac = shell_exec("ip link show | grep -Po 'ether \K[^ ]*'");
                }
            } elseif (PHP_OS === 'WINNT') {
                $mac = shell_exec("getmac");
                if (empty($mac)) {
                    $mac = shell_exec("ipconfig /all | findstr /R /C:\"Physical\"");
                }
            }
            $mac = strtok($mac, ' ');
            return $mac ?: 'Unknown';
        } catch (\Exception $e) {
            \Log::error('Error retrieving MAC address: ' . $e->getMessage());
            return 'Unknown';
        }

        // try {
        //     $mac = exec('getmac');
        //     $mac = strtok($mac, ' ');
        //     return $mac;
        // } catch (\Exception $e) {
        //     \Log::error('Error retrieving MAC address: ' . $e->getMessage());
        //     return 'Unknown';
        // }
    }
}
