<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/users/login', [UserController::class, 'verication'])->name('user.verification');

Route::get('/', function () {
    return view('pages.menu');
});
Route::get('/users/login', [UserController::class, 'login'])->name('user.login');

Route::get('/sobre', function () {
    return view('pages/sobre');
});

Route::get('/@me', function () {
    return view('pages/@me/menu_usuario');
});