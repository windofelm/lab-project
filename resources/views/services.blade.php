@extends('layouts.main_layout')

@section('title', 'Hizmetlerimiz - Cevizlab')
@section('content')
@include('layouts.main_header')

<!--=== page-title-section start ===-->
  <section class="title-hero-bg service-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>Hizmetlerimiz</h1>
        <h4 class="text-uppercase mt-30 white-color">Yaratıcı Fikirler</h4>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->
  
  <!--=== Who We Are Start ======-->
  <section class="main-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-gnome font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Marka Tasarımı</h5>
            <p>Markanızın içeriğini barındıran iyi bir web sitesi tasarlamak, zorlu bir yolda sizi güçlendirecektir..</p>
          </div>
        </div>
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-apps font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Uygulama Geliştirme</h5>
            <p>İstekleriniz doğrultusunda Masaüstü, Web ve Mobil uygulamalar geliştiriyoruz. </p>
          </div>
        </div>
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-lightbulb-on font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Dijital Pazarlama</h5>
            <p>3-4 yıldır giderek artan bir pazar oldu. Pazar payınızı internet ortamında kat kat artırabilirsiniz.</p>
          </div>
        </div>
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-owl font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Size Özel Fikirler</h5>
            <p>Size özel tasarım yapılmış bir web sitesi veya uygulama ile rakiplerinizden bir adım önde olabilirsiniz.</p>
          </div>
        </div>
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-border-color font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Modern Geliştirme</h5>
            <p>Modern geliştirme araçlarını aktif olarak kullanarak projenin ömrüne katkıda bulunuyoruz.</p>
          </div>
        </div>
        <div class="col-md-4 feature-box text-left mb-50 col-sm-6">
          <div class="pull-left"><i class="mdi mdi-screen-rotation font-50px blue-icon"></i></div>
          <div class="pull-right">
            <h5 class="mt-0">Responsive Tasarımlar</h5>
            <p>Responsive tasarımlar sayesinde uygulamanız her cihazda ve platformda stabil bir şekilde çalışacaktır.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Who We Are End ======-->
  
  <!--=== Testimonails Start ======-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase">Ne DEDİLER</h2>
          <h4 class="text-uppercase source-font">- Bazı Müşteriler -</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="slick testimonial">
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="{{asset('acron/assets/images/team/avatar-1.jpg')}}" alt="avatar-1"/>
                <h5>Hank Dano</h5>
                <p>Founder &amp; CEO of Arcon </p>
                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend consequat.</h4>
              </div>
            </div>
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="{{asset('acron/assets/images/team/avatar-2.jpg')}}" alt="avatar-1"/>
                <h5>Julia Banks</h5>
                <p>CEO of Arcon</p>
                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend consequat.</h4>
              </div>
            </div>
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="{{asset('acron/assets/images/team/avatar-3.jpg')}}" alt="avatar-1"/>
                <h5>Mark Smith</h5>
                <p>CEO of Arcon</p>
                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend consequat.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Testimonails End ======-->
  
  <!--=== Clients Start ======-->
  <section class="pt-50 pb-50">
    <div class="container">
      <div class="row">
        <div id="client-slider" class="owl-carousel">
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/1.png')}}" alt="01"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/2.png')}}" alt="02"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/3.png')}}" alt="03"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/4.png')}}" alt="04"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/5.png')}}" alt="05"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/6.png')}}" alt="06"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/7.png')}}" alt="07"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/8.png')}}" alt="08"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/9.png')}}" alt="09"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="{{asset('acron/assets/images/clients/10.png')}}" alt="10"/> </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Clients End ======-->

@endsection
