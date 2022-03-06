<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session()->has('loginId')){
            return redirect('/')->with('fail','Đăng nhập để tiếp tục !');
        }
        return $next($request);
    }
}
