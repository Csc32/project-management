<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\VarDumper;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $routes = ["admin", "teacher", "student"];
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!isset($user)) {
            return back()->withErrors(['server_error' => 'Ha ocurrido un error, vuelva a intentar'])->onlyInput("user_id");
        }

        $role = $user->rol_id;

        if ($role === 1) {
            return redirect()->route($this->routes[0]);
        }
        if ($role === 2) {
            return redirect()->route($this->routes[1]);
        }

        if ($role === 3) {
            return redirect()->route($this->routes[2]);
        }
        return $next($request);
    }
}
