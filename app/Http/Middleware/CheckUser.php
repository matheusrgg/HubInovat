<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
// auth eh uma classe global para fazer a sessao do usuario

class CheckUser
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
        
        $user = Auth::user();

        
        if($user){
        return $next($request);
        }else{
                    return redirect('register');
        }
    }

}

