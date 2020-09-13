<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ChecklogedOut
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

        //chua dang nhap
        if(Auth::guest()){
            return redirect()->intended('login');
        }

        return $next($request);
    }
}
