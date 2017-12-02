@extends('layouts.main_layout')

@section('title', 'İletişim - Cevizlab Technology')
@section('meta_description', 'Bizimle iletişime geçerek projenizden bahsedebilir, detayları tarafımıza ileterek teklif isteyebilirsiniz.')

@section('content')

@include('layouts.main_header')

<!--=== page-title-section start ===-->
  <section class="title-hero-bg contact-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>Bizimle İletişime Geçin</h1>
        <h4 class="text-uppercase mt-30 white-color">Bize ulaşın, İhtiyaçlarınıza uygun çözüm üretelim.</h4>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->
  
  <!--=== Contact Us Start ======-->
  <section class="contact-us white-bg" id="contact">
    <div class="container">
      <div class="clearfix">
        <div class="bg-flex-right col-md-6 map-section">
          <div id="myMap"></div>
        </div>
        <div class="col-about-left col-md-6 text-left">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
		    <p>{{ $message }}</p>
		</div>
	    @endif
          <h2 class="merriweather-font">İletişimde Kalalım.</h2>
          <h4 class="text-uppercase source-font">Çözüm Sunalım</h4>
          <form name="contact-form" id="contact-form" action="contact" method="post" class="mt-50">
            <div class="messages"></div>
            <div class="form-group">
              <label class="sr-only" for="name">İsminiz</label>
              <input type="text" name="fullname" class="form-control" id="name" required="required" placeholder="İsminiz" data-error="Lütfen isminizi yazınız.">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email Adresiniz" required="required" data-error="Lütfen Email adresinizi yazınız.">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="phone">Telefon</label>
              <input type="phone" name="phone" class="form-control" id="phone" placeholder="Telefonunuz">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Mesajınız</label>
              <textarea name="message_content" class="form-control" id="message" rows="7" placeholder="Mesajınız" required data-error="Lütfen mesajınızı yazınız."></textarea>
              <div class="help-block with-errors mt-20"></div>
            </div>
            {{csrf_field()}}
            <button type="submit" name="submit" class="btn btn-color btn-circle">Mesaj Gönder</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="p-0">
    <div class="container-fluid">
      <div class="row row-flex">
        <div class="col-md-4">
          <div class="col-inner spacer dark-bg">
            <div class="text-center white-color"> <i class="mdi mdi-map-marker font-50px white-icon"></i>
              <h3>Ofis Adres</h3>
              <p>Sokullu <br>
                Ankara, TÜRKİYE</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer blue-bg">
            <div class="text-center white-color"> <i class="mdi mdi-email font-50px white-icon"></i>
              <h3>Email</h3>
              <p class="mb-0">info@cevizlab.com</p>
              <p>support@cevizlab.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer dark-bg">
            <div class="text-center white-color"> <i class="mdi mdi-cellphone font-50px white-icon"></i>
              <h3>Telefonlarımız</h3>
              <p class="mb-0">(0539) 309 66 90</p>
              <p>(0554) 554 04 75</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Contact Us End ======-->
  
  <!--=== Clients Start ======-->
  <section class="pt-50 pb-50 white-bg">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv7LYRzyivt-k-4wMEENhy-cMR_KMO_8A"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhYvVBA6-m-ZEEgvOhZ59MCuHusMOX0k&v=3.exp&sensor=false&callback=initialize"></script>-->
@endsection



