<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function welcome() {
        return view('welcome');
    }
    function index() {
        return view('pages.index');
    }
}
