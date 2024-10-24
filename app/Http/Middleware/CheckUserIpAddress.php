<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    // {
    //     $user = Auth::user();
    //     $ip = $request->ip_address();

    //     if($user && $user->ip_address !== $ip){
    //         Auth::logout();
    //         return redirect()->route('login');
    //     }
    //     return $next($request);

    // }
}
