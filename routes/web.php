<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProjectsController::class, 'index']);
