<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SOPAdminNotAuthorized
{
    /**
     * Check If SOP Admin Not Logged In.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('sop_admin')) {
            return redirect()->route('dashboard');
        }else {
            return $next($request);
        }
    }
}
