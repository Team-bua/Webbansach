<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionMiddleware
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
        $companyid = $request->session()->get('select_companyid', '');
        if($companyid == '' && Auth::user()->id_role == 1)
        {    
                 return redirect(route('companies.index'));
             
        }
        return $next($request);
    }
}
