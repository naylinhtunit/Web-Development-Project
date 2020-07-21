

<!--==========================
  Contact Section
============================-->
<section id="contact">
  <div class="container">
    <div class="row wow fadeInUp">

        <div class="col-lg-4 col-md-4">
            <div class="container">
                <div class="row">
                    <div class="contact-about">
                      <h3><img class="main-logo" src="{{asset('public/img/logo/forw3b_logo.png')}}" alt="" /></h3>
                      
                    <div class="info">
                        <div>
                            <i class="ion-ios-location-outline"></i>
                            <p>{{ Lang::get('address', array(), Helper::lang()) }}</p>
                        </div>
        
                        <div>
                            <a href="mailto:info@forw3b.com">
                                <i class="ion-ios-email-outline"></i>
                                <p>info@forw3b.com</p>
                            </a>
                        </div>
        
                        <div>
                            <a href="tel:09766033123">
                                <i class="ion-ios-telephone-outline"></i>
                                <p>(+959) 766-033-123</p>
                            </a>
                        </div>
                    </div>
                    
                      <div class="social-links">
                        <a href="viber://chat?number=09766033123"><i class="fab fa-viber"></i></a>
                        <a href="https://www.facebook.com/ForW3b/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="mailto:info@forw3b.com"><i class="far fa-envelope"></i></a>
                        <a href="tel:09766033123"><i class="ion-ios-telephone-outline"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-8 col-md-8">
            <div class="container">
                <div class="row">
                    <div style="width: 100%">
                        <iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;coord=16.8033154,96.1840221&amp;q=Pathein%20Nyunt%206%20Street%2C%20Mingalar%20Taung%20Nyunt%2C%20Yangon.+(Forw3b)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

  </div>
</section><!-- #contact -->

<div class="foot-bg container">
    <div class="clear-fix"></div>
</div>

<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            <p>Copyright © 2019 <a href="{{ url('/') }}"><b>Forw3b</b>.</a> All rights reserved.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="{{ url('/') }}" class="scrollto">Home</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="{{ url('/contact') }}">Contact</a>
            
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('public/js/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/js/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('public/js/lib/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/js/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('public/js/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('public/js/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('public/js/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('public/js/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('public/js/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('public/js/lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <!--Typed-->
  <script src="{{asset('public/js/lib/typed/typed.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('public/js/main.js')}}"></script>

</body>
</html>