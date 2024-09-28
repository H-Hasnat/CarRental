<?php

namespace App\Http\Middleware;

use APP\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class verifyotpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {

        $token=$request->cookie('token');
        $res=JWTToken::verifyToken($token);
        if($res==='unauthorized'){
            return redirect('/login');
        }else{
            $request->headers->set('email',$res->email);
            $request->headers->set('id',$res->userid);
            return $next($request);

        }
    }
}
