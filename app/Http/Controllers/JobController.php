<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $h1="Available Jobs";
        $jobs = [
            'System Admin',
            'Software Engineer',
            'Data Scientist',
            'Product Manager'
        ];
        return  view('jobs.index', ['h1' => $h1, 'jobs' => $jobs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jobs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        return "$name has been created with description: $description";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "show job:$id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
