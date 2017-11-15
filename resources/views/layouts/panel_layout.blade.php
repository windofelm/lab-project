<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        <meta name="description" content="@yield('page_description')">
    </head>
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/panel.css')}}">

    <script type="application/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

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

    <script type="application/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('bower_components/select2/dist/js/select2.min.js')}}"></script>
    <script type="application/javascript">
        $('.select2').select2({
            tags: true,
            tokenSeparators: [",", " "],
            createTag: function (tag) {
                return {
                    id: tag.term,
                    text: tag.term,
                    isNew : true
                };
            }
        }).on("select2:select", function(e) {
            if(e.params.data.isNew){
                $('#console').append('<code>New tag: {"' + e.params.data.id + '":"' + e.params.data.text + '"}</code><br>');
                $(this).find('[value="'+e.params.data.id+'"]').replaceWith('<option selected value="'+e.params.data.id+'">'+e.params.data.text+'</option>');
            }
        });
    </script>

</body>
</html>