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
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if($user->userable_type !== Employer::class) {
            return redirect('/404-page');
        }
        if(!Session::has('employer')){
            if($user->email_verified_at && $user->employer()->exists()){
                Session::put('employer', $user->employer);
            }else if (!($request->path() === 'onboard-employer' || $request->path() === 'onboard-screen-employer')) {
                return redirect('/onboard-screen-employer');
            }
        }
        return $next($request);
    }
}
