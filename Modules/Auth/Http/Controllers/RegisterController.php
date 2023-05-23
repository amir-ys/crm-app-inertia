<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function showForm()
    {
        return Inertia::render('Auth/Register');
    }
}
