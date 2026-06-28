<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
<<<<<<< HEAD
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // Thêm flash message khi redirect về login
            session()->flash('error', 'Vui lòng đăng nhập để xem nội dung này.');
            return route('login');
        }
    }
}
=======
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
>>>>>>> 506f6d0231058084529b5e8e69646c8ce75575e4
