
@extends('layout.layout')

@section('content')

<h1>articles</h1>

@foreach($articles as $article)

<div class="article_container">
    <a href="articles/{{$article->title}}"><h3>{{$article->title}}</h3></a> 
    <br> ff
    <p>{{$article->body}}</p>
</div>
@endforeach

@endsection
  