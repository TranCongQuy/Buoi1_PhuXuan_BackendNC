<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // Thêm flash message khi redirect về login
            session()->flash('error', 'Vui lòng đăng nhập để xem nội dung này.');
            return route('login');
        }
    }
}