@extends('layouts.main_layout')

@section('title', $article->seo_title)

@section('meta_description', $article->seo_description)

@section('content')

@include('layouts.main_header')

<!--=== page-title-section start ===-->
<section class="title-hero-bg blog-cover-bg" data-stellar-background-ratio="0.2">
  <div class="container">
    <div class="page-title text-center">
      <h1>{{$article->title}}</h1>
      <h4 class="text-uppercase mt-30 white-color">
          @foreach($article->categories as $category)
          <span class="badge">{{$category->category_name}}</span>
          @endforeach
      </h4>
    </div>
  </div>
</section>
<!--=== page-title-section end ===-->


<!--=== Blogs Start ======-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">

      @if (Session::has('success'))
          <div class="outline-alert alert alert-success green" role="alert">{{Session::get('success')}}</div>
      @endif

      @foreach ($errors->all() as $message)
          <div class="outline-alert alert alert-danger red-color" role="alert">{{$message}}</div>
      @endforeach

        <div class="post">
          <div class="post-img"> <img class="img-responsive" src="{{$article->image}}" alt=""/> </div>
          <div class="post-info">
            <h3><a href="{{route('blogarticle', \Illuminate\Support\Str::slug($article->title)."-".$article->id)}}">{{$article->title}}</a></h3>
            <h6>{{\Carbon\Carbon::parse($article->created_at)->format("d-m-Y H:i:s")}}</h6>
            <p>{{$article->seo_description}}</p>
            <a class="readmore dark-color" href="#"><span>Read More</span> <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="blog-standard">
          {!! $article->body !!}
        </div>
        <div class="post-tags">
            @foreach($article->tags as $tag)
                <a href="{{route('tag-articles', $tag->name)}}">{{$tag->name}}</a>
            @endforeach
        </div>
        <div class="post-controls">
          <div class="post-share">
            <ul>
              <li> Share: </li>
              <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
            </ul>
          </div>
          <div class="comments-info"> <a href="#"> <i class="fa fa-comment"></i> {{$article->comments->count()}}</a> </div>
        </div>
        <div id="respond" class="comment-respond">
          <h2 id="reply-title" class="comment-reply-title">Post a comment</h2>
          <form method="POST" class="comment-form" action="{{route('post-comment', $article->id)}}">
            <div class="form-group">
              <textarea name="comment" class="form-control" placeholder="Comment" rows="5">{{ old('comment') }}</textarea>
            </div>
            <div class="row-form row">
              <div class="col-form col-md-6">
                <div class="form-group">
                  <input name="author" value="{{ old('author') }}" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-form col-md-6">
                <div class="form-group">
                  <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <p class="form-submit">
              <input name="submit" type="submit" id="submit-btn" class="btn btn-color btn-circle" value="Post Comment">
              {{csrf_field()}}
            </p>
          </form>

          <br>
          <div>
            @foreach($article->comments as $comment)
            <div class="article-comment">
              <div class="info">
                <span class="author">{{$comment->name}}</span>
                <span class="date">{{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y H:i:s')}}</span>
              </div>
              <div class="content">{{$comment->comment}}</div>
            </div>
            @endforeach
          </div>

        </div>
      </div>
      <!--=== Left Side End===-->
      @include("layouts.blog_right")
      <!--=== Right Side End ===-->
    </div>
  </div>
</section>
<!--=== Blogs End ======-->

@endsection

