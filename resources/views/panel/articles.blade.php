
@extends('layouts.panel_layout')
@section('page_title', 'Articles')
@section('content')

    @section('card_header')
        <div class="row">
            <div class="col-md-3">
                Articles
            </div>
            <div class="col-md-9">
                <a href="{{route('article-store')}}" class="btn btn-primary float-right">Add New</a>
                <div class="clearfix"></div>
            </div>
        </div>
    @endsection

    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Title</th>
            <th>Body</th>
            <th>Categories</th>
            <th>Is Active</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->user->name}}</td>
            <td>{{$article->title}}</td>
            <td>{{\Illuminate\Support\Str::limit(strip_tags($article->body), 50)}}</td>
            <td>
                @foreach($article->categories as $category)
                    <span class="badge badge-primary">{{$category->category_name}}</span>
                @endforeach
            </td>
            <td>{{$article->is_active}}</td>
            <td>
                <a href="{{route('show-article', $article->id)}}" class="btn btn-primary btn-sm float-right">Detail</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection