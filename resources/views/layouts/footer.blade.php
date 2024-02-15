<footer>
    <div class="container">
     
      <div class="pb-5 mt-5">
        <div class="row g-2 g-lg-4 align-items-center">
          <div class="col-lg-6 text-center text-lg-start">
            <p class="mb-0 copyright-text content">&copy;2024 StorySphere. All rights reserved.</p>
          </div>
          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-inline footer-menu">
              <li class="list-inline-item m-0"><a href='/qurno/privacy'>Privacy Policy</a></li>
              <li class="list-inline-item m-0"><a href='/qurno/404-page'>404 Page</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end of footer -->
  
  <!-- JS Plugins -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{url("plugins/bootstrap/bootstrap.min.js")}}"></script>
  <script src="{{asset("plugins/lightense/lightense.min.js")}}"></script>
  
  <!-- Main Script -->
  <script src="{{url("assets/js/script.js")}}"></script>


  <script>
    @yield("scripts")
  </script>

{{-- script to calculate words to read --}}
  <script>
    function calculateReadingTime(words){
      let averageReadingSpeed = 200

      let readingTIme = words.length/averageReadingSpeed

      console.log(readingTIme);
    }
  </script>
  
  </body></html>