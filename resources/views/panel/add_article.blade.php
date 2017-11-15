
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

        <div class="form-group {{ $errors->has('title') ? 'has-danger' : '' }}">
            <input name="title" type="text" value="{{ old('title') }}" class="form-control" placeholder="Title">
            <div class="form-control-feedback">{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group {{ $errors->has('categories') ? 'has-danger' : '' }}">
            <label>Article Categories</label>
            <select multiple name="categories[]" class="form-control">
                @foreach($categories as $category)
                    @if(old("categories") && in_array($category->id, old("categories")))
                        <option selected value="{{$category->id}}">{{$category->category_name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endif
                @endforeach
            </select>
            <div class="form-control-feedback">{{ $errors->first('categories') }}</div>
        </div>

        <div class="form-group {{ $errors->has('body') ? 'has-danger' : '' }}">
            <label>Aticle Body</label>
            <textarea id="editor1" class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
            <div class="form-control-feedback">{{ $errors->first('body') }}</div>
        </div>

        <div class="form-group {{ $errors->has('seo_title') ? 'has-danger' : '' }}">
            <label>Article SEO Title</label>
            <input type="text" name="seo_title" value="{{ old('seo_title') }}" class="form-control" aria-describedby="emailHelp" placeholder="Title">
            <div class="form-control-feedback">{{ $errors->first('seo_title') }}</div>
        </div>

        <div class="form-group {{ $errors->has('seo_description') ? 'has-danger' : '' }}">
            <label>Article SEO Description</label>
            <input type="text" name="seo_description" value="{{ old('seo_description') }}" class="form-control" aria-describedby="emailHelp" placeholder="Description">
            <div class="form-control-feedback">{{ $errors->first('seo_description') }}</div>
        </div>

        <div class="form-group {{ $errors->has('image') ? 'has-danger' : '' }}">
            <label>Article Image</label>
            <input type="text" name="image" value="{{ old('image') }}" placeholder="Paste Image Url" class="form-control" aria-describedby="fileHelp">
            <div class="form-control-feedback">{{ $errors->first('image') }}</div>
        </div>

        <div class="form-group {{ $errors->has('tags') ? 'has-danger' : '' }}">
            <label>Article Tags</label>
            <select multiple="true" name="tags[]" id="tagSelector" class="form-control select2" style="">
                @foreach($tags as $tag)
                    @if(old("tags") && in_array($tag->name, old('tags')))
                        <option selected value="{{$tag->name}}">{{$tag->name}}</option>
                    @else
                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                    @endif
                @endforeach
            </select>
            <div class="form-control-feedback">{{ $errors->first('image') }}</div>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" {{ old("is_active") ? "checked" : ""}} name="is_active" class="form-check-input">
                Is Active
            </label>
        </div>
        {{csrf_field()}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right">Save Article</button>
        </div>
    </form>

    <script src="{{asset('libs/ckeditor/ckeditor.js')}}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor1', {
            //ustomConfig: 'config_c.js',
            filebrowserBrowseUrl: '../../images/blog/',
            filebrowserUploadUrl: "{{env('UPLOAD_URL')}}"
        });
    </script>

@endsection