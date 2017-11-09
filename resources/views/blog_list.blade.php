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
      <h1>Blog Sidebar Right</h1>
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

        @foreach($articles as $article)
        <div class="post mb-50">
          <div class="post-img"> <img class="img-responsive" src="{{asset('acron/assets/images/about-video-gym-img.jpg')}}" alt=""/> </div>
          <div class="post-info">
            <h3><a href="{{route('blogarticle', [\Illuminate\Support\Str::slug($article->title),$article->id])}}">{{$article->title}}</a></h3>
            <h6>{{\Illuminate\Support\Carbon::parse($article->created_at)->format("d-m-Y")}}</h6>
            <p>{{\Illuminate\Support\Str::words(strip_tags($article->body), 20, "...")}}</p>
            <a class="readmore dark-color" href="#"><span>Daha Fazla</span> <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <!--=== Post End ===-->
        @endforeach

        <div class="blog-pagination">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
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

