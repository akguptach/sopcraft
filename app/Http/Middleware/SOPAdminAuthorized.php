<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SOPAdminAuthorized
{
    /**
     * Check If SOP Admin Logged In.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('sop_admin')) {
            return $next($request);
        }else {
            return redirect()->route('admin');
        }
    }
}
