
@extends('layouts.panel_layout')
@section('page_title', 'Articles')
@section('content')

@section('card_header')
    <div class="row">
        <div class="col-md-3">
            Articles/Add
        </div>
    </div>
@endsection

    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Article Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleSelect2">Article Categories</label>
            <select multiple name="categories[]" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Aticle Body</label>
            <textarea class="form-control" name="body" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Article SEO Title</label>
            <input type="text" name="seo_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Article SEO Description</label>
            <input type="text" name="seo_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Article Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="is_active" class="form-check-input">
                Is Active
            </label>
        </div>
        {{csrf_field()}}
        <button type="submit" class="btn btn-primary">Save Article</button>
    </form>


@endsection