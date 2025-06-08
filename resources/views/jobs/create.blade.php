
@extends('layout')
@section('title', 'Create Job')
@section('sub_title', 'Add a New Job')
@section('content')

<form action="/jobs" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>

@endsection
