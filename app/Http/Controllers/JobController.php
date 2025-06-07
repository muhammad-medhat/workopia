<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    function index() {
        $h1="Available Jobs";
        $jobs = [
            'System Admin',
            'Software Engineer',
            'Data Scientist',
            'Product Manager'
        ];
        return  view('jobs.index', ['h1' => $h1, 'jobs' => $jobs]);
    }
    public function create(){
        return view('jobs.create');
    }
    public function show($id){
        return "show job:$id";
    }
    public function store(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        return "$name has been created with description: $description";
    }
}
