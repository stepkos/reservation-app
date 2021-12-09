<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;

class CheckDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */



    public function handle(Request $request, Closure $next)
    {
  
        if(Auth::user()){
            $role = User::role(Auth::user()->id);
            if($role == 'Doctor')
                return $next($request);  
            
                abort(403);
        }


        return redirect('login');



    }
}
