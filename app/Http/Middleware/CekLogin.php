<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Users;

class CekLogin
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
         $value = $request->session()->get('logged_in');
        if($value=='true')
        {
            return $next($request);
        }else
        {
            return response()->json(['status'=>'error', 'result'=> null, 'message' => 'Login First']);
        }
    }
}

