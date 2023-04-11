@extends('layout.layout')

@section('content')

    <h1>Hello World</h1>

    <form method="POST" action="{{route('form')}}">
    @csrf
    
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <input type="submit" hidden>
    </form>

@endsection