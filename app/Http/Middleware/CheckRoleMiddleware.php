<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        // $user = User::findOrFail($request->user_id);

        // if ($user->role === 'admin') {

        //     // If the validation passes, proceed to the next middleware or request handler
        //     return $next($request);
        // }
        
        // return  abort(401);

        # Passing Parameters to Middleware.
        $user = User::findOrFail($request->id);

        if ($user->role === $role) {

            // If the validation passes, proceed to the next middleware or request handler
            return $next($request);
        }
        
        return  abort(401);

    }
}
