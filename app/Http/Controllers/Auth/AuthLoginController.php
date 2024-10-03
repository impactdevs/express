<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\AuthLoginRequest;
use App\Models\Company;
use App\Models\Freelancer;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

final class AuthLoginController extends Controller
{
    public function __invoke(AuthLoginRequest $request): Response
    {

        $user = User::where(['email' => $request->email])->first();

        $valid =   password_verify($request->password, $user->password);

        if (!$valid) {
            return  redirect()->back()->with(['error' => 'Invalid Credentials']);
        }


        Auth::login($user);
        $user = auth()->user();
        if ($user->userable_type == Company::class) {
            return redirect()->to(route('dashboard'));
        }
        if($user->userable_type == Freelancer::class){
            if($user->email_verified_at === null){
                return redirect()->to(route('onboard-screen'));
            }
        }
        //dd(auth()->user()->name);
        return redirect()->to(route('freelancer-dashboard'));
    }
}
