<?php
namespace App\Models;

use Illuminate\Support\Facades\Log;

/**
 * UserRegistrationLog class
 *
 * @author r
 */
class UserRegistrationLog extends User {
    /**
     * 
     * @param type $login
     */
    public static function log($login)
    {
        Log::info($login . ' registered at ' . date('Y-m-d H:i:s'));
    }
}
