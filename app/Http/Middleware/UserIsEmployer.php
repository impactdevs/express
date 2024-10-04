<?php

namespace App\Http\Middleware;

use App\Models\Employer;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class UserIsEmployer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if($user->userable_type !== Employer::class) {
            return redirect('/404-page');
        }
        if(!Session::has('employer')){
            if($user->employer()->exists() && $user->email_verified_at){
                Session::put('employer', $user->employer);
            }else if (!($request->path() === 'onboard-employer' || $request->path() === 'onboard-screen-employer')) {
                return redirect('/onboard-screen-employer');
            }
        }
        return $next($request);
    }
}
