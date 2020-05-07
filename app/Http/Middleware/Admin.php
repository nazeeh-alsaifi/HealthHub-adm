<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Response;

class Admin
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
    if (Auth::guest()){
            return new Response(view('unauthorized'));
         }

    else{
        if ($request->user()->username != 'admin')
          {
             return new Response(view('unauthorized')->with('username',$request->user()->username));
          }
           return $next($request);
        }
   }
}
