<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('cadastro', function () {
    return view('cadastro');
});

Route::get('login', function () {
    return view('login');
});
Route::get('menu_usuario', function () {
    return view('menu_usuario');
});