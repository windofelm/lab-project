
@extends('layouts.panel_layout')
@section('content')

@section('card_header')
    <div class="row">
        <div class="col-md-3">
            Categories
        </div>
        <div class="col-md-9">
            <a class="btn btn-primary float-right" onclick="cForm.submit()">Add New</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

<h4 class="card-title">Special title treatment</h4>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

<form name="cForm" action="{{route('add-category')}}" method="POST">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    {{csrf_field()}}
</form>

<ul>
@foreach($categories as $category)
        <li>{{$category->category_name}}({{$category->slug}}) <a href="{{route('delete-category', $category->id)}}" class="btn btn-sm btn-danger" onclick="confirm('Press a button!');">Delete</a></li>
@endforeach

@endsection
</ul>