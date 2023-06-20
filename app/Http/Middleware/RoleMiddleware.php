<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Mendapatkan User saat ini
        $user = Auth::user();

        foreach ($roles as $role) {
            /* Jika role yang ditentukan di Route/web.php == role user saat ini
            Maka lanjutkan ke Controller */
            if ($role == $user->role) {
                return $next($request);
            }

        }
        /* Jika role tidak sesuai
        Maka tampilkan halaman 403 (unauthorized) */
        return abort(403);

        // return $next($request);
    }
}