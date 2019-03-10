@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>{{ $title }}</h1>
  <p>This is a blog about a weird guy who likes Jeeps, and may not hold any value to anyone</p>
  
  
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/posts" role="button">See my Posts</a>
  </p>
</div>

<p>In the mean time, enjoy your stay here..</p>
@endsection
