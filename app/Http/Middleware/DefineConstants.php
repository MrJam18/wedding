<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DefineConstants
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        define('WEDDING_DATE_STRING', '11 августа 2023 г.');
        define('WEDDING_DATE_ISO', '2023-08-11');
        return $next($request);
    }
}
