<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// Form NIM & Nama (POST)
Route::view('/', 'index');
Route::post('/proses', [PagesController::class, 'proses']);

// Child pages dari base
Route::view('/courses', 'courses');
Route::view('/students', 'students');
Route::view('/grades', 'grades');
Route::view('/assignments', 'assignments');