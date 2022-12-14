<div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contact</h3>
              <address>{{$setting->adress}}</address>
              <ul class="list-unstyled links">
                <li><a href="tel://11234567890">{{$setting->phone}}</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">{{$setting->email}}</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">

          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('services')}}">Properties</a></li>
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('contact')}}">Contact us</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="{{$setting->instagram}}"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="{{$setting->twitter}}"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="{{$setting->facebook}}"><span class="icon-facebook"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="https://github.com/kaanboyacii">Kaan BOYACI</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/tiny-slider.js"></script>
    <script src="{{asset('assets')}}/js/aos.js"></script>
    <script src="{{asset('assets')}}/js/navbar.js"></script>
    <script src="{{asset('assets')}}/js/counter.js"></script>
    <script src="{{asset('assets')}}/js/custom.js"></script>