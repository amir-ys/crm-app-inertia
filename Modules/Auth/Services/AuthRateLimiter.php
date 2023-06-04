<?php

namespace Modules\Auth\Services;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthRateLimiter
{
    protected static int $maxAttempts = 5;
    protected static int $decaySeconds = 60;

    public static function ensureIsNotRateLimited(): void
    {
        if (RateLimiter::attempt(static::throttleKey(), static::$maxAttempts, function () {}, static::$decaySeconds)){
            return;
        }

        $seconds = RateLimiter::availableIn(static::throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public static function clear()
    {
        RateLimiter::clear(static::throttleKey());
    }

    public static function throttleKey()
    {
        return Str::transliterate(Str::lower(request()->input('email')) . '|' . request()->ip());
    }
}
