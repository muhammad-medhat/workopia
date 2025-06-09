<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'welcome']);

Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
