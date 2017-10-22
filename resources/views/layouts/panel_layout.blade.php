<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel.css')}}">
</head>
<body>

    @include('layouts.panel_header')

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-block">
                        @include('layouts.panel_left_sidebar')
                    </div>
                    <div class="card-footer text-muted">
                        Menu footer
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        @yield('card_header')
                    </div>
                    <div class="card-block">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script type="application/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>