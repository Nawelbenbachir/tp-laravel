<?php

use Illuminate\Support\Facades\Route;
//utilisation des routes nommées pour la navigation entre les pages
Route::get('/', function () {return view('home');}) -> name('home');
Route::get('/contact', function () {return view('contact');}) -> name ('contact');
Route::get('/about', function () {return view('about');}) -> name('about');


