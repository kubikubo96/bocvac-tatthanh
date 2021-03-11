<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->id == 1) {
                return $next($request);
            } else {
                return redirect()->route('admin.login')->with('message', 'Đăng nhập không thành công !!');
            }
        } else {
            return redirect()->route('admin.login')->with('message', 'Bạn chưa đăng nhập');
        }
    }
}
