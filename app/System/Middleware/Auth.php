<?php
/**
 * This file contains the Auth middleware
 */

namespace App\System\Middleware;

use Charm\Vivid\Charm;
use Charm\Vivid\Kernel\Output\Json;

/**
 * Class Auth
 *
 * Checking authentication
 *
 * @package App\System\Middleware
 */
class Auth
{
    /**
     * Check authentication
     *
     * @return null|Json
     */
    public static function checkAuth()
    {
        if(!Charm::Guard()->isLoggedIn()) {
            // Got NO valid login
            // Return error message
            return Json::makeErrorMessage("User Authentication required", 401);
        }

        return null;
    }
}