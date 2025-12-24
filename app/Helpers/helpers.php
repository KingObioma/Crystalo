<?php
use Illuminate\Support\Facades\Route;


if (!function_exists('isActiveRoute')) {
    /**
     * Check if the current route is active.
     *
     * @param string $routeName
     * @return string
     */
    function isActiveRoute($routeName) {
        return Route::currentRouteName() === $routeName ? 'active' : '';
    }
}
