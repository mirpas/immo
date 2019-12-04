<?php

namespace App\Http\Middleware;

use Closure;

class CheckForSelectedBuilding
{
    /**
     * Check whether a building is selected and stored in session data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! $request->session()->has('building_id') )
        {
            return redirect()->route('buildings.select.index');
        }

        return $next($request);
    }
}
