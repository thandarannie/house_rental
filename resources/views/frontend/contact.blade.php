@extends('template')
  @section('content')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
                  <div class="col-md-4 text-center py-4">
                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                        <span class="icon-map-o"></span>
                    </div>
                    <p><span>Address:</span> 40th Street, 70*71,Mandalay</p>
                  </div>
                  <div class="col-md-4 text-center py-4">
                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                        <span class="icon-mobile-phone"></span>
                    </div>
                    <p><span>Phone:</span> <a href="tel://1234567920">09788097388</a></p>
                  </div>
                  <div class="col-md-4 text-center py-4">
                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                        <span class="icon-envelope-o"></span>
                    </div>
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">akl945@gmail.com</a></p>
                  </div>
                </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 align-items-stretch d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 align-items-stretch d-flex">
                <!-- <div id="map" class="bg-white border"> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.313051968401!2d96.09544332844669!3d21.960945108979868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d0d618afde7%3A0x9b2a1e81fc171bb0!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1574416540968!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                    
                  </iframe>" 
                 
                    
                  
          </div>
        </div>
      </div>
    </section>
    @endsection
        

    