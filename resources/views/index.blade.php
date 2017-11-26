@extends('layouts.main_layout')

@section('title', 'Web Yazılım ve Uygulama Geliştirme')
@section('meta_description', 'Web yazılım ve yygulama geliştirme alanında modern teknolojileri kullanarak projelirinize değer katıyoruz.')

@section('content')

@include('layouts.main_header')

<!--=== Flex Slider Start ===-->
  <section class="pt-0 pb-0">
    <div class="slider-bg flexslider">
      <ul class="slides">
        <!--=== SLIDE 1 ===-->
        <li>
          <div class="slide-img" style="background:url(acron/assets/images/slides/home-bg-1.jpg) center center / cover scroll no-repeat;" data-stellar-background-ratio="0.2"></div>
          <div class="hero-text-wrap">
            <div class="hero-text white-color">
              <div class="container text-center">
                <h3 class="white-color text-uppercase font-400 letter-spacing-5">Proje GelİşTİrme</h3>
                <h2 class="white-color text-uppercase font-700">Web Uygulama & Web API</h2>
                <h3 class="white-color font-400">Web uygulama geliştirme, süreç yönetimi ve danışmanlık hizmeti.</h3>
                <p class="text-center mt-30">
                  <a class="btn btn-white btn-circle btn-animate"><span>Projeyİ Başlat</span></a>
                  <a class="btn btn-dark btn-circle btn-animate"><span>BİLGİ al</span></a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <!--=== SLIDE 2 ===-->
        <li>
          <div class="slide-img" style="background:url(acron/assets/images/slides/home-bg-2.jpg) center center / cover scroll no-repeat;" data-stellar-background-ratio="0.2"></div>
          <div class="hero-text-wrap gradient-overlay-bg">
            <div class="hero-text">
              <div class="container text-center">
                <h3 class="white-color text-uppercase font-400 letter-spacing-5">Dİjİtal Pazarlama &amp;</h3>
                <h2 class="white-color text-uppercase font-700">Pazarlama Odaklı Seo</h2>
                <p class="text-center mt-30"><a class="btn btn-dark btn-circle btn-animate"><span>Daha Fazla <i class="mdi mdi-arrow-right"></i></span></a> <a href="{{route('contact')}}" class="btn btn-outline-white btn-circle">İLETİŞİME Geç</a> </p>
              </div>
            </div>
          </div>
        </li>
        <!--=== SLIDE 3 ===-->
        <li>
          <div class="slide-img" style="background:url(acron/assets/images/slides/home-bg-3.jpg) center center / cover scroll no-repeat;" data-stellar-background-ratio="0.2"></div>
          <div class="hero-text-wrap">
            <div class="hero-text">
              <div class="container text-center">
                <h3 class="white-color text-uppercase font-400 letter-spacing-5">Bahsedİn</h3>
                <h2 class="white-color text-uppercase font-700">TEMİZ &amp; BASİT</h2>
                <h3 class="white-color font-400">Hepsine değil yapmamız gerekene odaklı çalışırız.</h3>
                <p class="text-center mt-30"><a class="btn btn-color btn-circle">Yaptıklarımızı Görün</a> </p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--=== Flex Slider End ===-->
  
  <!--=== Who We Are Start ===-->
  <section class="first-ico-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Neler Yaparız?</h2>
          <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Web uygulama GELİŞTİRME -</h4>
          <div class="mt-30 wow fadeTop" data-wow-delay="0.3s">
            <p>Web uygulamanızı, projenizi, web sitelerinizi modern web uygulama geliştirme tekniklerini kulanarak; hızlı, güvenilir ve seo uyumlu şekilde hayata geçiriyoruz. Sektörde yer aldığımız her günün bize kattığı tecrübeyi sizlere daha iyi hizmet vermek adına şekillendiriyoruz. </p>
          </div>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 feature-box text-center wow fadeTop" data-wow-delay="0.1s"> <i class="mdi mdi-scale font-50px dark-icon"></i>
          <h4 class="text-uppercase">STRATEJİ PLANLAMASI</h4>
          <p>Proje üzerinde ihtiyaç planlaması yaparak, iş akışını(zaman) ve kaynak kullanımını ortaya koyarız.</p>
        </div>
        <div class="col-md-4 feature-box text-center wow fadeTop" data-wow-delay="0.2s"> <i class="mdi mdi-chart-arc font-50px dark-icon"></i>
          <h4 class="text-uppercase">MODERN GELİŞTİRME</h4>
          <p>Modern geliştirme araçlarını aktif olarak kullanarak projenin ömrüne katkıda bulunuyoruz.</p>
        </div>
        <div class="col-md-4 feature-box text-center wow fadeTop" data-wow-delay="0.3s"> <i class="mdi mdi-flask-outline font-50px dark-icon"></i>
          <h4 class="text-uppercase">YÜKSEK KULLANIŞLILIK</h4>
          <p>Hedef kitle analizi sayesinde, uygun teknolojiler kullanılarak herşeye değil olması gerekene odaklanıyoruz.</p>
        </div>
      </div>
    </div>
  </section>
  <!--=== Who We Are End ===-->
  
  <!--=== Portfolio Start ===-->
  <section class="pt-0 pb-0">
    <div class="container-fluid">
      <div class="row">
        <div class="portfolio-container text-center">
          <ul id="portfolio-filter" class="list-inline filter-transparent wow fadeTop" data-wow-delay="0.1s">
            <li class="active" data-group="all">Tamamı</li>
            <li data-group="design">Tasarım</li>
            <li data-group="web">Web Uygulama</li>
            <li data-group="branding">Marka</li>
            <li data-group="print">Print</li>
          </ul>
          <ul id="portfolio-grid" class="three-column hover-two">
            <li class="portfolio-item wow fadeIn wow fadeIn" data-wow-delay="0.1s" data-groups='["all", "print", "branding"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/1.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Business Cards</h3>
                    <a href="single-portfolio.html" class="links">Print Design</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/1.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.2s" data-groups='["all", "branding", "web"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/2.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Magazine</h3>
                    <a href="single-portfolio.html" class="links">Branding</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/2.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.3s" data-groups='["all", "branding"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/3.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Rabycad CD Design</h3>
                    <a href="single-portfolio.html" class="links">Branding</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/3.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.4s" data-groups='["all", "print", "design"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/4.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Micro Chips</h3>
                    <a href="single-portfolio.html" class="links">Web Design</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/4.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.5s" data-groups='["all", "design"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/5.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Flyer</h3>
                    <a href="single-portfolio.html" class="links">Print Design</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/5.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            <li class="portfolio-item wow fadeIn" data-wow-delay="0.6s" data-groups='["all", "design", "web"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="acron/assets/images/portfolio/grid/6.jpg" alt="">
                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">Flat Web Design</h3>
                    <a href="single-portfolio.html" class="links">Web Design</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="acron/assets/images/portfolio/grid/6.jpg"><i class="fa fa-search"></i></a></li>
                    <li><a href="single-portfolio.html"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--=== Portfolio End ===-->
  
  <!--=== Counter Start ===-->
  <section class="dark-bg pt-80 pb-80">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 counter text-center col-sm-6 wow fadeTop" data-wow-delay="0.1s"> <i class="mdi mdi-clock blue-icon font-30px"></i>
          <h2 class="count white-color font-700">3500</h2>
          <h3>Çalışma Saati</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6 wow fadeTop" data-wow-delay="0.2s"> <i class="mdi mdi-emoticon blue-icon font-30px"></i>
          <h2 class="count white-color font-700">220</h2>
          <h3>Mutlu Müşteri</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6 wow fadeTop" data-wow-delay="0.3s"> <i class="mdi mdi-trophy-variant blue-icon font-30px"></i>
          <h2 class="count white-color font-700">108</h2>
          <h3>Tebrikler</h3>
        </div>
        <div class="col-md-3 counter text-center col-sm-6 wow fadeTop" data-wow-delay="0.4s"> <i class="mdi mdi-cup blue-icon font-30px"></i>
          <h2 class="count white-color font-700">86</h2>
          <h3>Yıllık Geliştirme</h3>
        </div>
      </div>
    </div>
  </section>
  <!--=== Counter End ===-->
  
  <!--=== Our Team Start ===-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Bize Katılın</h2>
          <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Uzmanlarımız / Alan -</h4>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeTop" data-wow-delay="0.3s">
          <div class="team-member-container gallery-image-hover"> <img src="acron/assets/images/team/team-01.jpg" class="img-responsive" alt="team-01">
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
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeTop" data-wow-delay="0.4s">
          <div class="team-member-container gallery-image-hover"> <img src="acron/assets/images/team/team-02.jpg" class="img-responsive" alt="team-02">
            <div class="member-caption">
              <div class="member-description text-center">
                <div class="member-description-wrap">
                  <h4 class="member-title">Lynda Stone</h4>
                  <p class="member-subtitle">Front-End Developer</p>
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
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeTop" data-wow-delay="0.5s">
          <div class="team-member-container gallery-image-hover"> <img src="acron/assets/images/team/team-03.jpg" class="img-responsive" alt="team-03">
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
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeTop" data-wow-delay="0.6s">
          <div class="team-member-container gallery-image-hover"> <img src="acron/assets/images/team/team-04.jpg" class="img-responsive" alt="team-04">
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
  <!--=== Our Team End ===-->
  
  <!--=== Testimonails Start ===-->
  <section class="grey-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Ne DedİLER</h2>
          <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Bazı MüşerİLER -</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="slick testimonial">
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="acron/assets/images/team/avatar-1.jpg" alt="avatar-1"/>
                <h5>Hank Dano</h5>
                <p>Founder &amp; CEO of Arcon </p>
                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend consequat.</h4>
              </div>
            </div>
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="acron/assets/images/team/avatar-2.jpg" alt="avatar-1"/>
                <h5>Julia Banks</h5>
                <p>CEO of Arcon</p>
                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend consequat.</h4>
              </div>
            </div>
            <!--=== Slide ===-->
            <div class="testimonial-item">
              <div class="testimonial-content"> <img class="img-responsive img-circle" src="acron/assets/images/team/avatar-3.jpg" alt="avatar-1"/>
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
  <!--=== Testimonails End ===-->
  
  <!--=== Blogs Start ===-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Blog GÖNDERİLERİ</h2>
          <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Son Yayınlar -</h4>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-12 remove-padding">
          <div class="owl-carousel blog-slider">

            @foreach($articles as $article)
            <div class="post">
              <div class="post-img"> <img class="img-responsive" src="{{$article->image}}" alt=""/> </div>
              <div class="post-info">
                <h3><a href="{{route('blogarticle', \Illuminate\Support\Str::slug($article->title)."-".$article->id)}}">{{$article->title}}</a></h3>
                <h6>Tarih: {{\Illuminate\Support\Carbon::parse($article->created_at)->format("d-m-Y")}}</h6>
                <p>{{\Illuminate\Support\Str::words(strip_tags($article->body), 20, "...")}}</p>
                <a class="readmore" href="{{route('blogarticle', \Illuminate\Support\Str::slug($article->title)."-".$article->id)}}"><span>Daha Fazla</span></a> </div>
            </div>
            <!--=== Post End ===-->
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Blogs End ===-->




@endsection
