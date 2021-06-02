<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    public function handle($request, Closure $next)
    {

        if(Auth::user()->user_type == "Student"){

            return redirect()->to('/');
        }
        return $next($request);
    }
}
