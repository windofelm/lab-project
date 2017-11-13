@extends('layouts.main_layout')

@section('title', "Cevizlab Blog")

@section('content')

@include('layouts.main_header')

<!--=== page-title-section start ===-->
<section class="title-hero-bg blog-cover-bg" data-stellar-background-ratio="0.2">
  <div class="container">
    <div class="page-title text-center">
      <h1>Web Programlamaya Başlayın</h1>
      <h4 class="text-uppercase mt-30 white-color">Güncel makaleler İÇİN abone olun</h4>
    </div>
  </div>
</section>
<!--=== page-title-section end ===-->

<!--=== Blogs Start ======-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        @if (Session::has('error'))
          <div class="outline-alert alert alert-danger red-color" role="alert">{{Session::get('error')}}</div>
        @endif

        @foreach($articles as $article)
        <div class="post mb-50">
          <div class="post-img"> <img class="img-responsive" src="{{$article->image}}" alt=""/> </div>
          <div class="post-info">
{{--            <h3><a href="{{route('blogarticle', [\Illuminate\Support\Str::slug($article->title),$article->id])}}">{{$article->title}}</a></h3>--}}
            <h3><a href="{{route('blogarticle', \Illuminate\Support\Str::slug($article->title)."-".$article->id)}}">{{$article->title}}</a></h3>
            <h6>Tarih: {{\Illuminate\Support\Carbon::parse($article->created_at)->format("d-m-Y")}}</h6>
            <p>{{\Illuminate\Support\Str::words(strip_tags($article->body), 20, "...")}}</p>
            <a class="readmore dark-color" href="#"><span>Daha Fazla</span> <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <!--=== Post End ===-->
        @endforeach

        <div class="blog-pagination">
          <ul class="pagination">
            @if($articles->currentPage() > 1)
              <li class="page-item"><a class="page-link" href="{{$articles->previousPageUrl()}}">Previous</a></li>
            @endif
            @for($i = 1; $i <= $articles->lastPage(); $i++ )
              @if(($i < $articles->currentPage()+3) && $i > $articles->currentPage()-3)
                @if($articles->currentPage() == $i)
                  <li class="page-item active"><a class="page-link" href="{{url()->current()."?page=".$i}}">{{$i}}</a></li>
                @else
                  <li class="page-item"><a class="page-link" href="{{url()->current()."?page=".$i}}">{{$i}}</a></li>
                @endif
              @endif
            @endfor
            @if($articles->currentPage() < $articles->lastPage())
              <li class="page-item"><a class="page-link" href="{{$articles->nextPageUrl()}}">Next</a></li>
            @endif
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

