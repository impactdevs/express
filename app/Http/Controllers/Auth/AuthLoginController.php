<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\AuthLoginRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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

        if (auth()->user()->userable_type == Company::class) {
            return redirect()->to(route('dashboard'));
        }
        return redirect()->to(route('freelancer-dashboard'));
    }
}
