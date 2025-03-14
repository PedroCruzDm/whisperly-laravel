<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
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

Route::get('sobre', function () {
    return view('sobre');
});

Route::get('/user/show', [UserController::class, 'listar'])->name('user.show');

Route::get('/User/show', function () {
    return view('show');
});

Route::post('cadastro', [UserController::class, 'registrar'])->name('user.registrar');