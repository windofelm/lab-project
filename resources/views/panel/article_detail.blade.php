
@extends('layouts.panel_layout')
@section('page_title', $article->seo_title)
@section('page_description', $article->seo_description)
@section('content')

@section('card_header')
    <div class="row">
        <div class="col-md-3">
            Articles
        </div>
        <div class="col-md-9">
            <a href="{{route('delete-article', $article->id)}}" class="btn btn-danger float-right">Delete</a>
            <a href="{{route('update-article', $article->id)}}" class="btn btn-primary float-right mr-2">Update Article</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

<div>
    <h2>{{$article->title}}</h2>
    <br>

    {!! $article->body !!}

    <ul class="list-group">
        <li class="list-group-item active">Article Details</li>
        <li class="list-group-item">
            <ul class="list-inline">
                <li class="list-inline-item"><strong>Author:</strong></li>
                <li class="list-inline-item">
                    {{$article->author->name}}
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <ul class="list-inline">
                <li class="list-inline-item"><strong>Categories:</strong></li>
                <li class="list-inline-item">
                    @foreach($article->categories as $category)
                        <span class="badge badge-primary mr-2">{{$category->category_name}}</span>
                    @endforeach
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <ul class="list-inline">
                <li class="list-inline-item"><strong>Created At:</strong></li>
                <li class="list-inline-item">
                    {{\Illuminate\Support\Carbon::parse($article->created_at)->format("d-m-Y H:i:s")}}
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <ul class="list-inline">
                <li class="list-inline-item"><strong>Is Active:</strong></li>
                <li class="list-inline-item">
                    <h6><span class="badge {{$article->is_active ? "badge-success" : "badge-default"}}">{{$article->is_active}}</span></h6>
                </li>
            </ul>
        </li>
    </ul>

</div>

@endsection