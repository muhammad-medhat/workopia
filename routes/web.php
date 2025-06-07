<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', action: function () {
    $h1="Available Jobs";
    $jobs = [
        'System Admin',
        'Software Engineer',
        'Data Scientist',
        'Product Manager'
    ];
    return  view('jobs.index', ['h1' => $h1, 'jobs' => $jobs]);
});
