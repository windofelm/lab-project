@extends('layouts.main_layout')

@section('title', 'About Us Cevizlab')

@section('content')
@include('layouts.main_header')

<!--=== page-title-section start ===-->
  <section class="title-hero-bg about-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center white-color">
        <h1>Hakkımızda</h1>
        <h4 class="text-uppercase mt-30">2014 'den beri Yazılım Geliştirme</h4>
      </div>
    </div>
  </section>
  <!--=== page-title-section end ===-->
  
  <!--=== Who We Are Start ===-->
  <section class="first-ico-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase">Biz Kimiz</h2>
          <h4 class="text-uppercase source-font">- Dünya sizin parmaklarınızda.. -</h4>
          <div class="mt-30">
            <p>Biz sizin için uğraşıyoruz. İşinizi geliştirmekle uğraşıyoruz.Bu yüzden ilk günden beri sonuçlarımızı takip ediyoruz ve sonuçlara göre işinizi yönlendiriyoruz. Müşterilerimize ilgilerini çeken ve büyüleyen mükemmel yaratıcı fikirler buluyoruz. Sizi en iyi çözüme kavuşturmak için tüm gücümüzle çalışıyoruz. Gücümüzü siz değerli müşterilerimizden alıyoruz.  </p>
          </div>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 feature-box text-center"> <i class="mdi mdi-scale font-50px dark-icon"></i>
          <h4 class="text-uppercase">Stratejimiz</h4>
          <p>İhtiyaca uygun en mükemmel, hızlı ve ekonomik çözüm üretmek.</p>
        </div>
        <div class="col-md-4 feature-box text-center"> <i class="mdi mdi-chart-arc font-50px dark-icon"></i>
          <h4 class="text-uppercase">Yaratıcılık</h4>
          <p>Teknolojiyi yakından takip ediyoruz, size en yaratıcı ve son teknolojik çözümleri sunmayı taahhüt ediyoruz.</p>
        </div>
        <div class="col-md-4 feature-box text-center"> <i class="mdi mdi-flask-outline font-50px dark-icon"></i>
          <h4 class="text-uppercase">Verimlilik</h4>
          <p>Buraya bişey bulamadım bacanak :) :) :D .</p>
        </div>
      </div>
    </div>
  </section>
  <!--=== Who We Are End ===-->
  
  <!--=== Our Skills Start ======-->
  <section class="white-bg">
    <div class="col-md-6 col-sm-4 bg-flex bg-flex-left">
      <div class="bg-flex-holder bg-flex-cover" style="background-image: url({{asset('acron/assets/images/startup-bg-left.jpg')}});"></div>
    </div>
    <div class="container">
      <div class="col-md-5 col-sm-7 col-md-offset-7 col-sm-offset-5">
        <h2 class="text-uppercase font-700">Bildiklerimiz</h2>
        <h4 class="mt-10 line-height-26 source-font">Büyük fikirler geliştiriyoruz.</h4>
        <div class="left-service-box pt-40 pb-20">
          <div class="progress-bar-title">UI/ UX Design</div>
          <div class="progress">
            <div class="progress-bar" data-width="80"> <span>80%</span> </div>
          </div>
          <div class="progress-bar-title">Web Development</div>
          <div class="progress">
            <div class="progress-bar" data-width="55"> <span>55%</span> </div>
          </div>
          <div class="progress-bar-title">jQuery</div>
          <div class="progress">
            <div class="progress-bar" data-width="75"> <span>75%</span> </div>
          </div>
          <div class="progress-bar-title">Branding</div>
          <div class="progress">
            <div class="progress-bar" data-width="99"> <span>99%</span> </div>
          </div>
          <div class="progress-bar-title">App Development</div>
          <div class="progress">
            <div class="progress-bar" data-width="48"> <span>48%</span> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Our Skills End ======-->
  
  <!--=== Counter Start ======-->
  <section class="dark-bg pt-80 pb-80">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 counter text-center col-sm-6"> <i class="mdi mdi-clock blue-icon font-30px"></i>
          <h2 class="count white-color font-700">5600</h2>
          <h3>Working Hours</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6"> <i class="mdi mdi-emoticon blue-icon font-30px"></i>
          <h2 class="count white-color font-700">220</h2>
          <h3>Happy Clients</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6"> <i class="mdi mdi-trophy-variant blue-icon font-30px"></i>
          <h2 class="count white-color font-700">108</h2>
          <h3>Awwwards</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6"> <i class="mdi mdi-cup blue-icon font-30px"></i>
          <h2 class="count white-color font-700">650</h2>
          <h3>Projects a Year</h3>
        </div>
      </div>
    </div>
  </section>
  <!--=== Counter End ======-->
  
  <!--=== Our Service Start ======-->
  <section class="white-bg">
    <div class="col-md-6 col-sm-4 bg-flex bg-flex-right">
      <div class="bg-flex-holder bg-flex-cover" style="background-image: url({{asset('acron/assets/images/startup-bg-right.jpg')}});"></div>
    </div>
    <div class="container">
      <div class="col-md-5 col-sm-7">
        <h2 class="text-uppercase font-700">About Us</h2>
        <h4 class="mt-10 line-height-26 source-font">Part of your success.</h4>
        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac vulputate dolor. Nullam venenatis enim in quam euismod fringilla. Donec in risus eget purus mattis varius. Nulla dapibus quis orci et tincidunt. Phasellus in rhoncus quam. Fusce a est lacinia, ultricies mi nec, rutrum dolor.</p>
        <p>Donec vehicula cursus metus viverra aliquet. Nam vel malesuada diam. Proin eleifend luctus mi, vel tincidunt sapien auctor nec. In quis elit in mauris dignissim pharetra. Praesent efficitur dolor a quam tristique ultricies.</p>
        <p class="mt-30"><a class="btn btn-color btn-circle">Read more</a></p>
      </div>
    </div>
  </section>
  <!--=== Our Service End ======-->
  
  <!--=== Our Team Start ======-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase font-700">Meet Our Team</h2>
          <h4 class="mt-10 line-height-26 source-font">- We Are Stronger -</h4>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{asset('acron/assets/images/team/team-01.jpg')}}" class="img-responsive" alt="team-01">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">David Marks</h4>
                  <p class="member-subtitle">UI/UX Designer</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{asset('acron/assets/images/team/team-02.jpg')}}" class="img-responsive" alt="team-02">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Lynda Stone</h4>
                  <p class="member-subtitle">Photographer</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{asset('acron/assets/images/team/team-03.jpg')}}" class="img-responsive" alt="team-03">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Karl Casey</h4>
                  <p class="member-subtitle">Web Developer</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{asset('acron/assets/images/team/team-04.jpg')}}" class="img-responsive" alt="team-04">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Roland Buford</h4>
                  <p class="member-subtitle">CEO/Founder</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icon"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
      </div>
    </div>
  </section>
  <!--=== Our Team End ======-->
  
  <!--=== Testimonails Start ======-->
  <section class="grey-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase font-700">Testimonials</h2>
          <h4 class="mt-10 line-height-26 source-font">- Statisfy Clients -</h4>
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
