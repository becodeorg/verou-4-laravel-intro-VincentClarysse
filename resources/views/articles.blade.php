
@extends('layout.layout')

@section('content')

<h1>articles</h1>

@foreach($articles as $article)

<a href="{{route('articles')}}"><h3>{{$article->title}}</h3></a> 
<br>
<p>{{$article->body}}</p>

@endforeach

@endsection
  