<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('landing'))->name('landing');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/work', fn() => view('work'))->name('work');
Route::get('/contact', fn() => view('contact'))->name('contact');
