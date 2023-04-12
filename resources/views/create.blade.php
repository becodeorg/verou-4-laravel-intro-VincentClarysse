@extends('layout.layout')

@section('content')

    <h1>create</h1>

    <form method="POST" action="{{route('form')}}">
    @csrf
    
        <label for="Title">Title:</label><br>
        <input type="text" id="Title" name="Title"><br>
        <label for="Body">Body:</label><br>
        <input type="text" id="Body" name="Body">
        <input type="submit" hidden>
    </form>

@endsection