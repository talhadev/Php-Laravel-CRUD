<?php

namespace App\Http\Middleware;

use Closure;

class demo
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
    if($request->is('create') && request('foo')){
        return redirect('customer');
    }
    return $next($request);
}
}
