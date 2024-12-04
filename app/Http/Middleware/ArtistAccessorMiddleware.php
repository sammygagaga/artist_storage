<?php

namespace App\Http\Middleware;

use App\Models\Artist;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArtistAccessorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $artistId= $request->route('artist');
       $artist = Artist::find($artistId);

       if (!$artist || !$artist->user_id !== $request->user()->id){
           return response()->json([
               'error' => 'You are not authorized to perform this action'
           ], 401);
       }

        return $next($request);
    }
}
