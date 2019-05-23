<?php

namespace App\Http\Middleware;

use App\Models\UserModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if ( Auth::user() && Auth::user()->is_admin == UserModel::ADMIN ) {
            return redirect('/home');
        }
        return $next($request);
    }
}
