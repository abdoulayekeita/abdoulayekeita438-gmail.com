<?php
if (!function_exists('page_title')) {
    function page_title($title)
    {
        $base_title = 'Yankadi';
        if ($title == '') {
            return $base_title;
        } else {
            return $base_title.' | '.$title;
        }
    }
}

if (!function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::is($route) ? '' : 'nav-link  d-inline text-dark';
    }
}
