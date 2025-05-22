<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', fn() => redirect('/projects'));
Route::resource('projects', ProjectController::class);

