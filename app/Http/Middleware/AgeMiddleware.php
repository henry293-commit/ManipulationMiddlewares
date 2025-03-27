<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if ($request->query('age') >= 21) {
            return $next($request);  // Permet à la requête de continuer
        }

        abort(404);  // Affiche l'erreur 404 si l'âge est inférieur ou égal à 21
    }
}
