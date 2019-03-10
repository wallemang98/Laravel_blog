@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-5">
       <div class="fb-page" data-href="https://www.facebook.com/chefseanhaggerty/" data-tabs="timeline" data-width="550" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/chefseanhaggerty/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/chefseanhaggerty/">Commonwealth Catering LLC</a></blockquote></div>

    </div>
    
    <div class="col-md-7">
        <div class="jumbotron">
          <h1>{{ $title }}</h1>
          <p>This is a blog about a weird guy who likes Jeeps, and may not hold any value to anyone</p>


          <p class="lead">
            <a class="btn btn-primary btn-lg" href="/posts" role="button">See my Posts</a>
          </p>
        </div>
    </div>
</div>

<p>In the mean time, enjoy your stay here..</p>
@endsection
