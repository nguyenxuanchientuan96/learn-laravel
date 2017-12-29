 @extends('master')
 @section('title-page','Single')
 @section('main')
  <!-- Page Header -->
  <br> <br><br><br><br>
    <header class="masthead" style="background-image: url('')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$article->title}}</h1>
              <h2 class="subheading">{{$article->title}}</h2>
              <span class="meta">Posted by
                <a href="#">{{$article->author}}</a>
                on {{$article->create_at}}7</span>
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
            <p>
              {{$article->content}}
            </p>
          </div>
        </div>
      </div>
    </article>

    <hr>
    @stop