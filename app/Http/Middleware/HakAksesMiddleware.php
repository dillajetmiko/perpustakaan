<?php

namespace App\Http\Middleware;

use Closure;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $namaRole)
    {
        if(auth()->check() && !auth()->user()->punyaRole($namaRole)){
            return redirect('pageAksesKhusus');
        }


        return $next($request);
    }
}
