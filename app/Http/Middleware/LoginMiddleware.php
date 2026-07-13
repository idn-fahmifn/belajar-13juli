<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Closure;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = 'fahmi';

        if ($user === 'asep') {
            return $next($request); // mengizinkan akses ke route.
        }

        return redirect()->route('halaman.mobil')->with('failed', 'Kamu bukan asep');

    }
}
