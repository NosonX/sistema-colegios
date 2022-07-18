<?php

namespace app\utils;

class Utilities {
    public static function isLoggedInAndHasRole($role): bool
    {
        session_start();
        $loggedIn = $_SESSION['loggedIn'] ?? false;
        $userRole = $_SESSION['role'] ?? '';
        $hasRole = $role === $userRole;
        return $loggedIn && $hasRole;
    }
}