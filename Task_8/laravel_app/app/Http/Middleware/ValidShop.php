<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidShop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       //  return $next($request);

        if($request){
            return $next($request);
        }
        // return redirect()->route('login');
    }
}
/////////////////////////////////////////////////

// public function handle(Request $request, Closure $next)
//     {
//         $token = $request->header("Authorization");
//         $token = json_decode($token);
//         $check_token = Token::where('token',$token->access_token)->where('updated_at',NULL)->first();
//         if ($check_token) {
//             return $next($request);

//         }
//          return response("Invalid token",401);
//     }