<?php

namespace App\Http\Middleware;

use App\Models\Hotel;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HotelRegistrado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Hotel::count() > 0 && Auth::check())
        {
            return redirect(RouteServiceProvider::INICIO_ADMINISTRADOR);
        }
        return $next($request);
    }
}
