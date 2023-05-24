<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Modules\Auth\Http\Requests\LoginRequest;

class
AuthenticatedSessionController extends Controller
{
    public function create(): \Inertia\Response
    {
        return Inertia::render('Auth/Login');
    }

    public function store(LoginRequest $request): \Inertia\Response
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return Inertia::render('Home');
    }
}
