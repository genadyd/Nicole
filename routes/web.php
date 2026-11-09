<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
//Route::get('/', );
