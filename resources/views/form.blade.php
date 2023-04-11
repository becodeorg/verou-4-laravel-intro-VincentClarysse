<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
?>

@extends('layout.layout')

@section('content')

<h1>form</h1>

<h2>Welcome {{$fname}} {{$lname}} </h2>

@endsection