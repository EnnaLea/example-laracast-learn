<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::view('/', 'home');

//Index
Route::get('/jobs', [JobController::class, 'index']);

Route::resource('jobs', JobController::class);

//Contact
Route::view('/contact', 'contact');

