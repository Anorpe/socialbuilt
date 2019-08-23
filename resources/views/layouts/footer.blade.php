<!-- Footer
    ================================================= -->
    <footer id="footer">
            <div class="container">
                <div class="row">
                <div class="footer-wrapper">
                  <div class="col-md-2 col-sm-2">
                    <h6>Andrés Orrego</h6>
                    <ul class="footer-links">
                      <li><a href="">Aorrego@unal.edu.co</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2 col-sm-2">
                    <h6>Alex santiago Contreras</h6>
                    <ul class="footer-links">
                      <li><a href="">Acontrerash@unal.edu.co</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <h6>Sebastián González Jiménez</h6>
                    <ul class="footer-links">
                      <li><a href="">Sgonzalezj@unal.edu.co</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <h6>Pablo</h6>
                      <ul class="contact">
                          <li><a href="">Correo</a></li>
                      </ul>
                  </div>
                </div>
                </div>
            </div>
              </footer>
          <!--preloader-->
          <div id="spinner-wrapper">
            <div class="spinner"></div>
          </div>
          
          <!-- Scripts
          ================================================= -->
          @yield('scripts')
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
          <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/jquery.sticky-kit.min.js')}}"></script>
          <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
          <script src="{{asset('js/script.js')}}"></script>
        </body>
      </html>
      