@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-7">
        <div class="jumbotron">
          <h1>{{ $title }}</h1>
          <p>This is a blog about a weird guy who likes Jeeps, and may not hold any value to anyone</p>


          <p class="lead">
            <a class="btn btn-primary btn-lg" href="/posts" role="button">See my Posts</a>
          </p>
        </div>
        <p>Total number of hits: </p> <?php include('storage/counter.php') ?>
    </div>
    <div class="col-sm-12 col-md-5">
        <center><h3>Check out our Facebook page for the latest updates</h3></center>
        <div class="fb-page" data-href="https://www.facebook.com/chefseanhaggerty/" data-tabs="timeline" data-width="400" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/chefseanhaggerty/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/chefseanhaggerty/">Commonwealth Catering LLC</a></blockquote></div>
    
    </div>
</div>
@endsection
