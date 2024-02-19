<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\blogs;

use Symfony\Component\HttpKernel\Exception\HttpException;

class blogcrudMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session()->has("is_author")){
            $author = Session()->get("is_author");
            $postId = $request->route()->parameter("id");
            $post = blogs::findorFail($postId);
            if($author == $post->authorId){
                return $next($request);
            
            }

        }
        else{
            throw new HttpException(404);
        }
        
    }
}
