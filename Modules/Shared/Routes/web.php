<?php


use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return \Inertia\Inertia::render('Home');
})->middleware('auth');

Route::get('/', function () {
    return \Inertia\Inertia::render('Auth/Login');
})->middleware('auth');
