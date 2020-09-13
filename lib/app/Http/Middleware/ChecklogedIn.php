<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ChecklogedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dang nhap roi
        if(Auth::check()){
            return redirect()->intended('admin/home');
        }

        return $next($request);
    }
}
