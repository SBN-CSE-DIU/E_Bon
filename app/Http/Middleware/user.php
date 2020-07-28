<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class user
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->role == 'user')
            return $next($request);
        else
            return redirect()->back();
    }
}
