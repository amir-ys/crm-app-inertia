<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\RegisterController;

Route::get('register' , [RegisterController::class , 'showForm']);
