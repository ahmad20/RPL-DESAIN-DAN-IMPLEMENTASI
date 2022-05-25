<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Auth::guard('walimurid')->user()){
                return url('walimurid/login');
            }else if(Auth::guard('pengajar')->user()){
                return url('pengajar/login');
            }else if(Auth::guard('siswa')->user()){
                return url('siswa/login');
            }
            // return url('walimurid/login');
        }
    }
}
