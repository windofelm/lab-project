<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="description" content="@yield('meta_description')">
{{--<link rel="shortcut icon" href="{{asset('acron/assets/images/favicon.ico')}}">--}}
<link rel="icon"
      type="image/png"
      href="{{asset('acron/assets/images/favicon.png')}}">
<link rel="stylesheet" href="{{asset('acron/assets/css/master.css')}}">
<link rel="stylesheet" href="{{asset('acron/assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

@yield('content')


<!--=== Footer Start ===-->
  <footer class="footer" id="footer-fixed">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text">
              <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display" src="{{asset('img/logo47.png')}}" alt=""></a> </div>
              <p>Web platformu altında çalışan tüm ihtiyaçlarınızı karşılamak için çalışıyroruz. Bu işi freelance olarak yapıyoruz, yıllardan aldığımız deneyim ile yolumuza emin adımlarla devam ediyoruz. </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Bizimle Çalışanlar</h5>
              <ul>
                <li><a href="#">DETA Danışmanlık</a></li>
                <li><a href="#">CA Elegance</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Linklerimiz</h5>
              <ul>
                <li><a href="{{route('about-us')}}">Hakkımızda</a></li>
                <li><a href="{{route('services')}}">Hizmetlerimiz</a></li>
                <li><a href="{{route('contact')}}">İletişim</a></li>
                <li><a href="{{route('blog-articles')}}">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text widget-links">
              <h5 class="widget-title">İletişim Bilgilerimiz</h5>
              <ul>
                <li> <i class="mdi mdi-map-marker"></i> <a href="#">Sokullu, ANKARA</a> </li>
                <li> <i class="mdi mdi-cellphone"></i> <a href="#">(0312) xxx xx xx</a> </li>
                <li> <i class="mdi mdi-email"></i> <a href="#">info@cevizlab.com</a> </li>
                <li> <i class="mdi mdi-web"></i> <a href="#">www.cevizlab.com</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <ul class="social-media">
              <li><a href="#" class="fa fa-linkedin"></a></li>
              <li><a href="#" class="fa fa-facebook"></a></li>
              <li><a href="https://twitter.com/cevizlab" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-pinterest"></a></li>
              <li><a href="https://www.instagram.com/cevizlab/" class="fa fa-instagram"></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="copy-right text-right">© 2017 Cevizlab. Tüm hakları saklıdır.</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=== Footer End ===-->
  
  <!--=== GO TO TOP  ===-->
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  <!--=== GO TO TOP End ===-->
  
</div>
<!--=== Wrapper End ===-->

<!--=== Javascript Plugins ===-->
<script src="{{asset('acron/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('acron/assets/js/validator.js')}}"></script>
<script src="{{asset('acron/assets/js/plugins.js')}}"></script>
<script src="{{asset('acron/assets/js/master.js')}}"></script>
<script src="{{asset('acron/assets/js/bootsnav.js')}}"></script>
<!--=== Javascript Plugins End ===-->

</body>
</html>
