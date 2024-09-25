<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\AuthRegisterRequest;
use App\Models\Company;
use App\Models\Freelancer;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class AuthRegisterController extends Controller
{
    public function __invoke(AuthRegisterRequest $request): View | RedirectResponse
    {
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'userable_type' => $request->is_company ? Company::class : Freelancer::class,
            'userable_id' => 0,
        ]);

        Auth::login($user);

        if ($request->is_company) {
            return view('onboard-screen-employer');
        }

        return redirect()->to(route('onboard-screen'));
    }
}
