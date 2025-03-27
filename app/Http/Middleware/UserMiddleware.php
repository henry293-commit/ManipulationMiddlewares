<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->query('nom') === 'admin') {
            return $next($request);
        }

        // Retourner une erreur 403 avec un message personnalisé
        return response()->view('errors.403', [], 403);

        // 🚨 OPTION : Rediriger vers la page d'accueil au lieu de bloquer l'accès
        // return redirect('/');
    }
}
