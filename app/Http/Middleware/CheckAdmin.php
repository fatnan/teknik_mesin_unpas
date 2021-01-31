<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        if(!Auth::user()){
            return redirect('/admin/login');
        }
        $userRoles = Auth::user()->roles->pluck('name');
        if(!$userRoles->contains('admin')){
            return redirect('/');
        }
        return $next($request);
    }
}
