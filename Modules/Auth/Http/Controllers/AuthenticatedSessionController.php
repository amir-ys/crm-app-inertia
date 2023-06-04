<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Services\AuthRateLimiter;
use Modules\Auth\Services\CustomRateLimiter;

class
AuthenticatedSessionController extends Controller
{
    public function create(): \Inertia\Response
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * @throws ValidationException
     */
    public function store(LoginRequest $request): \Inertia\Response
    {
        AuthRateLimiter::ensureIsNotRateLimited();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        AuthRateLimiter::clear();

        $request->session()->regenerate();

        return Inertia::render('Home');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        return Inertia::render('Auth/Login');
    }
}
