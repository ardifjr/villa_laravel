<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HideBookingButton
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna adalah admin
        if (auth()->check() && auth()->user()->isAdmin()) {
            // Jika pengguna adalah admin, maka hapus tombol booking dari request
            $response = $next($request);
            $content = $response->getContent();
            $content = str_replace('Tombol Booking', '', $content);
            $response->setContent($content);
            return $response;
        }

        // Jika bukan admin, lanjutkan ke rute berikutnya tanpa modifikasi
        return $next($request);
    }
}