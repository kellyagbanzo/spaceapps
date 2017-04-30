<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
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
        if (Auth::check() && Auth::user()->isAdmin())
        {
            return $next($request);
        }
        else
        {
            return redirect('url')->with('alerte','Acc&egrave;s refus&eacute; pour cette page, Vous n\'&ecirc;tes pas administrateur.');
        }
    }
}
