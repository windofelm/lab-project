<!--=== Loader Start ======-->
<div id="loader-overlay">
  <div class="loader-wrapper">
    <div class="arcon-pulse"></div>
  </div>
</div>
<!--=== Loader End ======-->

<!--=== Wrapper Start ===-->
<div class="wrapper">

  <!--=== Header Start ===-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
    <!--=== Start Top Search ===-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="mdi mdi-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform" action="{{route('blog-articles')}}">
          <input type="text" value="" name="search" placeholder="Yazın ve arayın (enter)..." id="fullscreen-search-input" class="search-bar-top">
          <i class="mdi mdi-magnify fullscreen-search-icon">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--=== End Top Search ===-->
    
    <div class="container">
      <!--=== Start Atribute Navigation ===-->
      <div class="attr-nav">
        <ul>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <i class="mdi mdi-shopping"></i> <span class="badge">3</span> </a>
            <ul class="dropdown-menu cart-list">
              <li> <a href="#" class="photo"><img src="acron/assets/images/thumb01.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Delica omtantur </a></h6>
                <p>2x - <span class="price">$99.99</span></p>
              </li>
              <li> <a href="#" class="photo"><img src="acron/assets/images/thumb02.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Omnes ocurreret</a></h6>
                <p>1x - <span class="price">$33.33</span></p>
              </li>
              <li> <a href="#" class="photo"><img src="acron/assets/images/thumb03.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Agam facilisis</a></h6>
                <p>2x - <span class="price">$99.99</span></p>
              </li>
              <li class="total"> <span class="pull-right"><strong>Total</strong>: $0.00</span> <a href="#" class="btn btn-default btn-cart">Cart</a> </li>
            </ul>
          </li>-->
          <li class="search"><a href="#" id="search-button"><i class="mdi mdi-magnify"></i></a></li>
        </ul>
      </div>
      <!--=== End Atribute Navigation ===-->
      
      <!--=== Start Header Navigation ===-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
        <div class="logo"> <a href="{{route('main')}}"> <img class="logo logo-display" src="{{asset('img/logo47.png')}}" alt=""> <img class="logo logo-scrolled" src="{{asset('img/logo47.png')}}" alt=""> </a> </div>
      </div>
      <!--=== End Header Navigation ===-->
      
      <!--=== Collect the nav links, forms, and other content for toggling ===-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
          <li> <a href="{{route('main')}}">ANASAYFA</a></li>
	  <li> <a href="{{route('about-us')}}">HAKKIMIZDA</a></li>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="about-creative.html">About - Creative</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                  <li><a href="service-simple.html">Service Simple</a></li>
                  <li><a href="service-creative.html">Service Creative</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                <ul class="dropdown-menu">
                  <li><a href="contact-simple.html">Contact Simple</a></li>
                  <li><a href="contact-creative.html">Contact Creative</a></li>
                </ul>
              </li>
              <li><a href="404-page.html">404 Page</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a href="faqs.html">FAQs</a></li>
              <li><a href="term-condition.html">Terms &amp; Conditions</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="career.html">Careers</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
          </li>-->
          <li class="dropdown"> <a href="{{route('blog-articles')}}">Blog</a></li>
	  <li> <a href="{{route('services')}}">HİZMETLER</a></li>
	  <li> <a href="{{route('contact')}}">İLETİŞİM</a></li>
          <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
            <ul class="dropdown-menu">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed</a>
                <ul class="dropdown-menu">
                  <li><a href="box-2-columns.html">2 Columns</a></li>
                  <li><a href="box-3-columns.html">3 Columns</a></li>
                  <li><a href="box-4-columns.html">4 Columns</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed - Space</a>
                <ul class="dropdown-menu">
                  <li><a href="box-space-2-columns.html">2 Columns</a></li>
                  <li><a href="box-space-3-columns.html">3 Columns</a></li>
                  <li><a href="box-space-4-columns.html">4 Columns</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Wide</a>
                <ul class="dropdown-menu">
                  <li><a href="wide-2-columns.html">2 Columns</a></li>
                  <li><a href="wide-3-columns.html">3 Columns</a></li>
                  <li><a href="wide-4-columns.html">4 Columns</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wide - Space</a>
                <ul class="dropdown-menu">
                  <li><a href="wide-space-2-columns.html">2 Columns</a></li>
                  <li><a href="wide-space-3-columns.html">3 Columns</a></li>
                  <li><a href="wide-space-4-columns.html">4 Columns</a></li>
                </ul>
              </li>
              <li><a href="single-portfolio.html">Single Portfolio</a></li>
            </ul>
          </li>-->
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shops</a>
            <ul class="dropdown-menu">
              <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
              <li><a href="shop-standard.html">Shop Standard</a></li>
              <li><a href="shop-boxed.html">Shop Boxed</a></li>
              <li><a href="shop-masonry.html">Shop Masonry</a></li>
              <li><a href="shop-product.html">Single Product</a></li>
              <li><a href="shop-cart.html">Shop Cart</a></li>
              <li><a href="shop-checkout.html">Shop Checkout</a></li>
            </ul>
          </li>-->
          <!--<li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Widgets</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-4">
                    <h6 class="title">Widgets</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                        <li><a href="call-to-action.html">Call to Actions</a></li>
                        <li><a href="parallax-section.html">Parallax Sections</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--=== end col-4 ===-->
                  <!--<div class="col-menu col-md-4">
                    <h6 class="title">Widgets</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="accordions.html">Accordions</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="progress-bar.html">Progress Bars</a></li>
                        <li><a href="contact-form.html">Contact Forms</a></li>
                        <li><a href="google-maps.html">Google Maps</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--=== end col-4 ===-->
                  <!--<div class="col-menu col-md-4">
                    <h6 class="title">Widgets</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="progress-bar-ring.html">Progress Bar Ring</a></li>
                        <li><a href="theme-icons.html">Theme Icons</a></li>
                        <li><a href="boxed-icons.html">Boxed Icons</a></li>
                        <li><a href="grid-columns.html">Grid Columns</a></li>
                        <li><a href="team-member.html">Team Members</a></li>
                        <li><a href="countdowns.html">Countdowns</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--=== end row ===-->
              <!--</li>
            </ul>
          </li>-->
        </ul>
      </div>
      <!--=== /.navbar-collapse ===-->
    </div>
  </nav>
  <!--=== Header End ===-->

