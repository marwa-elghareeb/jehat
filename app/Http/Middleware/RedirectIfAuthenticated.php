<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($user->role_id ==0){
                return redirect(RouteServiceProvider::HOME);
            }elseif($user->role_id ==1 ){
                return redirect('/cards');

            }
        
           
         
        }

        return $next($request);
    }
}
/** 
 if (auth()-> user() -> id == 0){
                return redirect(RouteServiceProvider::HOME);
            }elseif(auth()-> user()->id ==1 ){
                return redirect('/cards');

            }
if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
            
            
            else{
                return redirect('/cards');
            }
 */