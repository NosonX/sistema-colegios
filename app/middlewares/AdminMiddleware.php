<?php

namespace app\middlewares;
use app\utils\Constants;
use app\utils\Utilities;

class AdminMiddleware {
    public static function run($next) {
        if (Utilities::isLoggedInAndHasRole(Constants::$ADMIN_ROLE)) {
            $next();
        } else {
            echo 'Error 403 Usted not tiene acceso.';
        }
    }
}