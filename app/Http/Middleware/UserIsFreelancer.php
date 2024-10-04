<?php

namespace App\Http\Middleware;

use App\Models\Freelancer;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class UserIsFreelancer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if($user->userable_type !== Freelancer::class) {
            return redirect('/404-page');
        }
        if(!Session::has('freelancer')){
            if($user->freelancer()->exists() && $user->email_verified_at){
                Session::put('freelancer', $user->freelancer);
            }else if (!($request->path() === 'onboard' || $request->path() === 'onboard-screen')) {
                return redirect('/onboard-screen');
            }
        }
        return $next($request);
    }
}
