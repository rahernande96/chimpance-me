<?php

namespace App\Http\Middleware;

use Closure;

class Country
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
        if($country = session('country'))
        {
            config(['app.country' => $country]);
    
        }
        return $next($request);
    }
}
