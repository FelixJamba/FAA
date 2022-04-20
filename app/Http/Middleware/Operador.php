<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Operador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->level != 'Operador' && Auth::user()->level != 'Administrador' && Auth::user()->level != 'Gestor'){

            return redirect()->route('admin.home')->with('NoAuth', '1');
        }
        return $next($request);
    }
}
