@extends ('master')
@section ('title-page', 'Trang Create')
@section('main')
 <!-- Page Header -->
 
    <header class="masthead" style="">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1></h1>
              <h2 class="subheading"></h2>
              <span class="meta">Form Create</span>
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
          		@if (count($errors)>0)
          			<div class="alert alert-danger">
          				<strong>Whoops!</strong> There were some problems with your input. <br> <br>
          				<ul> 
          					@foreach ($errors->all() as $error)
          						<li> {{$error}} </li>
          					@endforeach
          				</ul>
          			</div>
          		@endif
            	<form action="{{route('post.store')}}" method="POST" role="form">
            		<legend>Form Create</legend>
            		 @if (session('status'))
				        <div class="alert alert-info">{{session('status')}}</div>
				    @endif
            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
            		<div class="form-group">
            			<label for=""> Title </label>
            			<input type="text" class="form-control" name="txt-title" id="" placeholder="Input field">
            		</div>

            		<div class="form-group">
            			<label for="">Excerpt</label>
            			<input type="text" class="form-control" name="txt-excerpt" id="" placeholder="Input field">
            		</div>

            		<div class="form-group">
            			<label for="">Content</label>
            			<input type="text" class="form-control" name="txt-content" id="" placeholder="Input field">
            		</div>

            		<div class="form-group">
            			<label for="">Author</label>
            			<input type="text" class="form-control" name="txt-author" id="" placeholder="Input field">
            		</div>
            	
            		
            	
            		<button type="submit" name="btn-add" class="btn btn-primary"> Thêm </button>
            	</form>
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection
