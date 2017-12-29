 @extends('master')
 @section('title-page','Trang chủ')
 @section('main')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>CT Blog</h1>
              <span class="subheading">A Blog Theme by Chien Tuan</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
    @foreach ($articles as $a)
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="{{ url('articles/'.$a->id)}}">
              <h2 class="post-title">
                {{$a->title}}
              </h2>
              <h3 class="post-subtitle">
                {{$a->content}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$a->author}}</a>
              on September 24, 2017</p>
          </div>
          </div>
          </div>
          <hr>
      @endforeach

    <!-- Footer -->
 @stop