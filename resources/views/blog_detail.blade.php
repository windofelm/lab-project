@extends('layouts.main_layout')

@section('title')
Blog &#8211; Cevizlab
@endsection
@section('content')

@include('layouts.main_header')

<!--=== page-title-section start ===-->
<section class="title-hero-bg blog-cover-bg" data-stellar-background-ratio="0.2">
  <div class="container">
    <div class="page-title text-center">
      <h1>Blog Standard</h1>
      <h4 class="text-uppercase mt-30 white-color">Checkout Our Latest Posts</h4>
    </div>
  </div>
</section>
<!--=== page-title-section end ===-->


<!--=== Blogs Start ======-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="post">
          <div class="post-img"> <img class="img-responsive" src="http://www.incognitothemes.com/arcon/assets/images/post/post-01.jpg" alt=""/> </div>
          <div class="post-info">
            <h3><a href="blog-grid.html">{{$article->title}}</a></h3>
            <h6>{{\Illuminate\Support\Carbon::parse($article->created_at)->format("d-m-Y")}}</h6>
            <p>{{$article->seo_description}}</p>
            <a class="readmore dark-color" href="#"><span>Read More</span> <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="blog-standard">
          {!! $article->body !!}
        </div>
        <div class="post-tags"> <a href="#">Design</a> <a href="#">Branding</a> <a href="#">Stationery</a> <a href="#">Development</a> <a href="#">Concept</a> </div>
        <div class="post-controls">
          <div class="post-share">
            <ul>
              <li> Share: </li>
              <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
            </ul>
          </div>
          <div class="comments-info"> <a href="#"> <i class="fa fa-comment"></i> 0</a> </div>
        </div>
        <div id="respond" class="comment-respond">
          <h2 id="reply-title" class="comment-reply-title">Post a comment</h2>
          <form method="post" id="form-comments" class="comment-form">
            <div class="form-group">
              <textarea name="comment" id="comment-field" class="form-control" placeholder="Comment" rows="5"></textarea>
            </div>
            <div class="row-form row">
              <div class="col-form col-md-6">
                <div class="form-group">
                  <input name="author" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-form col-md-6">
                <div class="form-group">
                  <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <p class="form-submit">
              <input name="submit" type="submit" id="submit-btn" class="btn btn-color btn-circle" value="Post Comment">
              <input type="hidden" name="comment_post_ID">
              <input type="hidden" name="comment_parent" id="comment_parent" value="0">
            </p>
          </form>
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

