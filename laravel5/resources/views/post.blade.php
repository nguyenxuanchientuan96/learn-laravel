@extends ('master')
@section ('title-page', 'Trang Single')
@section('main')
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$post->title}}</h1>
              <h2 class="subheading">{{$post->excerpt}}</h2>
              <span class="meta">Posted by
                <a href="#">{{$post->author}}</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p> {{$post->content}} </p>
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection
