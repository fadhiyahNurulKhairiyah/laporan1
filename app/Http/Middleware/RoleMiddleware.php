<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Periksa apakah user memiliki role yang diizinkan
     *
     * @param  string  $role  — role yang dibutuhkan (contoh: 'admin')
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = $request->user();

        if (! $user || $user->role !== $role) {
            return response()->json([
                'status'  => 'error',
                'data'    => null,
                'message' => 'Unauthorized. Role ' . $role . ' diperlukan.',
            ], 403);
        }

        return $next($request);
    }
}