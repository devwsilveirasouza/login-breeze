<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [NavigationController::class, 'home'])->name('home');
// Restringindo o acesso ao usuário que estiver logado
Route::get('/dashboard', [NavigationController::class, 'dashboard'])->name('dashboard')->middleware('auth');
