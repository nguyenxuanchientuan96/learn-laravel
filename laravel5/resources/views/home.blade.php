@extends ('master')
@section ('title-page', 'Trang chủ')
@section ('main')
<!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <!-- start foreach -->
          @foreach($posts as $p)
          <div class="post-preview">
            <a href="{{ route('post.show', $p->id)  }}">
              <h2 class="post-title">
                {{$p->title}}
              </h2>
              <h3 class="post-subtitle">
                {{$p->excerpt}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$p->author}}</a>
              on {{$p->created_at}}</p>
          </div>
          <!-- end foreach -->
          @endforeach
          <hr>
 
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>

    </div>

    <hr>
@endsection