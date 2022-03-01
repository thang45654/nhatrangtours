<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    	$user = $request->user();
    	if (!$user) {
    		return redirect()->route('login');
		}
		if ($user->role !== $role) {
			return abort(403);
		}
        return $next($request);
    }
}
