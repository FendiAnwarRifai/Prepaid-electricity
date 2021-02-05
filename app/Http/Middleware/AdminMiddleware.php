<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Alert;
class AdminMiddleware
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
        if (Auth::user()->role !== "admin") {
            Alert::warning('Anda Tidak Memiliki Hak Akses Admin!!','Warning!')->persistent("OK");
            return redirect('beranda');
        }
        
        return $next($request);
    }
}
