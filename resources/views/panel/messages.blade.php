@extends('layouts.panel_layout')
@section('page_title', 'Messages')
@section('content')
    @section('card_header')
        <div class="row">
            <div class="col-md-3">
                Messages
            </div>
        </div>
    @endsection

    <h4 class="card-title">Mesajlar Burada</h4>
    <p class="card-text">Foo bar test</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>İsim</th>
            <th>Email</th>
            <th>Mesaj İçeriği</th>
            <th>Telefon</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
        <tr>
            <th scope="row">{{$message->id}}</th>
            <td>{{$message->fullname}}</td>
            <td>{{$message->email}}</td>
            <td>{{\Illuminate\Support\Str::limit(strip_tags($message->message_content), 50)}}</td>
            <td>{{$message->phone}}</td>
            <td>
                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
