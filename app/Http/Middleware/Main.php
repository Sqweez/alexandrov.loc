<?php

namespace App\Http\Middleware;

use App\Globals;
use App\MaterialCategories;
use Closure;
use Illuminate\Support\Facades\Auth;

class Main
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
	  /*  if(Auth::check()){
		    $status = 1;
		    $user = Auth::user();
	    }
	    else{
		    $status = 0;
		    $user = 0;
	    }*/
	    $data = [
		    'globals' => Globals::first(),
		    'categories' => MaterialCategories::all()
	    ];
	    view()->share($data);
        return $next($request);

    }
}
