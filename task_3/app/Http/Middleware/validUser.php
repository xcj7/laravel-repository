<?php

namespace App\Http\Middleware;
use App\Models\student;
use Closure;
use Illuminate\Http\Request;

class validUser
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
        $value = $request->session()->get('user');
        $stu = student::where('name',$value)->first();
        if($stu->type == 'user')
        {
            return $next($request);
        }
        return redirect()->route('login');
    }
}
