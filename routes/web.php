<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/show/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/create', [UserController::class, 'create'])->name('user.create');

Route::post('/store', [UserController::class, 'store'])->name('user.store');

Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');

Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');