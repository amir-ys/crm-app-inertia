<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\User\Entities\User;

class RegisterController extends Controller
{
    public function create(): \Inertia\Response
    {
        return Inertia::render('Auth/Register');
    }

    public function store(RegisterRequest $request): \Inertia\Response
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->fast_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return Inertia::render('Auth/Home');
    }
}
