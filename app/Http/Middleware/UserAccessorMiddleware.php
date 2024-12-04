<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccessorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $user = $request->user();

       if (!$user !== $request->user()->id ){
           return response()->json(['error' => 'You are not authorized to perform this action'], Response::HTTP_FORBIDDEN);
       }

        return $next($request);
    }
}
