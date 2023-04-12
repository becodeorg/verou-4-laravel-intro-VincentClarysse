
@extends('layout.layout')

@section('content')

<h1>articles</h1>

@foreach($articles as $article)

<a href="articles/{{$article->title}}"><h3>{{$article->title}}</h3></a> 

<p>{{$article->body}}</p>

@endforeach

@endsection
  