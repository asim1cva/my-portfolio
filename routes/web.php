<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function () {
    // dummy login (no validation, no DB)
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return "Login Successful (Dummy Page)";
});