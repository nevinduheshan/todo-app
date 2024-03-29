<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()) {
            // if(auth()->user()->ADMIN()){
            if (auth()->user()->role == ADMIN) {
                // if(Auth::user()->role == ADMIN){
                return $next($request);
                //redirect to admin page
            } else {
                //redirect to user page
                return back();
            }
        } else {
            return back();
        }
    }
}
