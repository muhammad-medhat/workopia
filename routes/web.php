<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index']);

// Route::get('/jobs', [JobController::class, 'index']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/show/{id}', [JobController::class, 'show'])->where('id', '[0-9]+');
// Route::get('/jobs/{id}', [JobController::class, 'show'])->where('id', '[0-9]+');
// Route::get('/jobs/saved-jobs', [JobController::class, 'saved']);
Route::resource('jobs', JobController::class);


// testing requests
Route::get('/test', [TestController::class, 'index']);
Route::resource('test', TestController::class);
Route::get('/test/test', [TestController::class, 'test']);