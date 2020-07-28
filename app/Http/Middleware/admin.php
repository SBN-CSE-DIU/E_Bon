<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class admin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->role == 'admin')
            return $next($request);
        else
            return redirect()->back();
    }
}
