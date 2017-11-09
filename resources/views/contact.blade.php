@extends('layouts.main_layout')

@section('title')
Contact &#8211; Cevizlab
@endsection
@section('content')

@include('layouts.main_header')

<!--=== page-title-section start ===-->
  <section class="title-hero-bg contact-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="page-title text-center">
        <h1>Contact Creative</h1>
        <h4 class="text-uppercase mt-30 white-color">Customer Support 24 Hours</h4>
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
          <h2 class="merriweather-font">Get in Touch</h2>
          <h4 class="text-uppercase source-font">Find your brand's voice</h4>
          <form name="contact-form" id="contact-form" action="php/contact.php" method="POST" class="mt-50">
            <div class="messages"></div>
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" required="required" placeholder="Your Name" data-error="Your Name is Required">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required" data-error="Please Enter Valid Email">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="phone">Your Phone</label>
              <input type="phone" name="phone" class="form-control" id="phone" placeholder="Your Phone">
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea name="message" class="form-control" id="message" rows="7" placeholder="Your Message" required data-error="Please, Leave us a message"></textarea>
              <div class="help-block with-errors mt-20"></div>
            </div>
            <button type="submit" name="submit" class="btn btn-color btn-circle">Send Message</button>
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
              <h3>Office Address</h3>
              <p>The PATH Toronto, <br>
                ON M5B 2H1, Canada</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer blue-bg">
            <div class="text-center white-color"> <i class="mdi mdi-email font-50px white-icon"></i>
              <h3>Email Us</h3>
              <p class="mb-0">hello@arcon.com</p>
              <p>jobs@arcon.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer dark-bg">
            <div class="text-center white-color"> <i class="mdi mdi-cellphone font-50px white-icon"></i>
              <h3>Call Us</h3>
              <p class="mb-0">(+1) 613 555-0105</p>
              <p>(+1) 613 555-0105</p>
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
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/1.png" alt="01"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/2.png" alt="02"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/3.png" alt="03"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/4.png" alt="04"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/5.png" alt="05"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/6.png" alt="06"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/7.png" alt="07"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/8.png" alt="08"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/9.png" alt="09"/> </div>
          <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/10.png" alt="10"/> </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Clients End ======-->

@endsection

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>

