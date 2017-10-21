@extends('layouts.default')

@section('content')
<a id="qodef-back-to-top" href="http://startit.select-themes.com/about-us/#" class="on">
                <span class="qodef-icon-stack">
                     <i class="qodef-icon-font-awesome fa fa-chevron-up "></i>                </span>
            </a>
                
        <div class="qodef-content" style="margin-top: -100px">
 <div class="qodef-content-inner">
    <div class="qodef-title qodef-standard-type qodef-has-background qodef-has-parallax-background qodef-content-left-alignment qodef-animation-no qodef-title-image-not-responsive" style="height: 350px; background-image: url(&quot;http://startit.select-themes.com/wp-content/uploads/2015/10/About-us-Title.jpg&quot;); background-position: center -226.87px;" data-height="350" data-background-width="&quot;1920&quot;">
        <div class="qodef-title-image"><img src="{{ asset('assets/img/About-us-Title.jpg') }}" alt=" "> </div>
        <div class="qodef-title-holder">
            <div class="qodef-container clearfix">
                <div class="qodef-container-inner">
                    <div class="qodef-title-subtitle-holder" style="">
                        <div class="qodef-title-subtitle-holder-inner">
                                                        <h1><span>About Us</span></h1>
                                                                    <span class="qodef-subtitle"><span>Lorem ipsum dolor sit</span></span>
                                                                                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@yield('content')

@endsection
