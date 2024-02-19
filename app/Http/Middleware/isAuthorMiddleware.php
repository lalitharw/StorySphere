<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session()->has("is_author")){
            throw new HttpException(404);
        }
        return $next($request);
    }
}
