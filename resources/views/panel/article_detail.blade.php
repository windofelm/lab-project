
@extends('layouts.panel_layout')
@section('page_title', 'Articles')
@section('content')

@section('card_header')
    <div class="row">
        <div class="col-md-3">
            Articles
        </div>
        <div class="col-md-9">
            <a href="{{route('update-article', $article->id)}}" class="btn btn-danger float-right">Delete</a>
            <a href="{{route('delete-article', $article->id)}}" class="btn btn-primary float-right mr-2">Update Article</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

<div>
    <h2>{{$article->title}}</h2>
    {!! $article->body !!}
</div>

@endsection