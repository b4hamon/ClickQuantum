<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// class Role
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next, $roles): Response
//     {
//         $newRol = explode('|',$roles);
//         $rolename = strtolower($request->user()->role->label);
//         if (!in_array($rolename, $newRol))
//             return abort(403,__('Unauthorized'));

//         return $next($request);
//     }
// }
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        $newRol = explode('|', $roles);
        $rolename = strtolower($request->user()->role->label);

        if (!in_array($rolename, $newRol)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Acceso denegado',
                    'status' => 403
                ], 403);
            }
            return redirect()->back()->with('error', 'No tienes permisos para acceder a esta página.');
        }

        return $next($request);
    }
}
