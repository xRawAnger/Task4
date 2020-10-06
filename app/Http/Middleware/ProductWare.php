<?php

namespace App\Http\Middleware;

use Closure;
use App\Can_post;

class ProductWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Can_post::firstOrFail()['can_post']==0 {
            return "cant create post";
            exit();
        }
        return $next($request);
    }
}
