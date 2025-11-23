<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('landing'))->name('landing');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/work', fn() => view('work'))->name('work');
Route::get('/contact', fn() => view('contact'))->name('contact');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::post('/login', function () {
    session(['user' => 'sampleUser']);
    return redirect('/');
});


Route::post('/register', function () {
    return redirect('/login')->with('success', 'Account created! Login now.');
});


Route::get('/signout', function () {
    session()->forget('user');
    return redirect('/login');
})->name('signout');


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/signout', [AuthController::class, 'signout'])->name('signout');
