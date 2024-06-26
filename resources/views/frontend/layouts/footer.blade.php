<footer>
        <div class="main-footer">
          <h1 class="section-bg-title">Glance</h1>
          <div class="container-fluid">
            <div class="footer-widgets">
              <div class="widget widget-links wow fadeInLeft">
                <h3 class="widget-title">CUSTOMER SERVICE</h3>
                <ul class="wd-links">
                  <li><a href="/contact" title="">Contact Support</a></li>
                  <li><a href="#" title="">Track My Order</a></li>
                  <li><a href="#" title="">Returns</a></li>
                  <li><a href="#" title="">Accessibility</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-links wow fadeInLeft"
                data-wow-delay="200ms"
              >
                <h3 class="widget-title">WEBSITE</h3>
                <ul class="wd-links">
                  <li><a href="/terms-and-conditions" title="">Terms of Service</a></li>
                  <li><a href="#" title="">Shipping & Returns</a></li>
                  <li><a href="#" title="">Privacy Policy</a></li>
                  <li><a href="#" title="">Affiliates</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-links wow fadeInLeft"
                data-wow-delay="400ms"
              >
                <h3 class="widget-title">Glance</h3>
                <ul class="wd-links">
                  <li><a href="/faqs" title="">FAQs</a></li>
                  <li><a href="/account" title="">Account</a></li>
                  <li><a href="https://www.instagram.com/binya_kamboh/" title="">Instagram</a></li>
                  <li><a href="/contact" title="">Contact Us</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-newsletter wow fadeInLeft"
                data-wow-delay="600ms"
              >
                <h3 class="widget-title">NEWSLETTER</h3>
                <p>Subscribe and get 10% discount on your first purchase.</p>
                <form>
                  <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                  />
                  <button type="submit" class="theme-btn">subscribe</button>
                </form>
              </div>
              <!--widget-newsletter -->
            </div>
          </div>
        </div>
        <div class="bottom-footer">
          <div class="container">
            <div class="copyright wow slideInUp">
              <p>© 2024 Glance IND - ALL RIGHTS RESERVED</p>
            </div>
          </div>
        </div>
      </footer>
      </div>
      <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-angle-up"></span>
    </div>

    <script src="{{ url('frontend/js/jquery.js')}}"></script>
    <script src="{{ url('frontend/js/jquery-migrate-1.4.1.min.js')}}"></script>
    <script src="{{ url('frontend/js/slick.min.js')}}"></script>
    <script src="{{ url('frontend/js/slick-animation.min.js')}}"></script>
    <script src="{{ url('frontend/js/popper.min.js')}}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{ url('frontend/js/wow.js')}}"></script>
    <script src="{{ url('frontend/js/appear.js')}}"></script>
    <script src="{{ url('frontend/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.marquee.min.js')}}"></script>
    <script
      src="{{ url("frontend/js/masonry.pkgd.min.js")}}"
      integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
      crossorigin="anonymous"
      async
    ></script>
    <script src="{{ url("frontend/js/video.js")}}"></script>
    <script src="{{ url("frontend/js/script.js")}}"></script>


    <script>
      (function () {
        var js =
          "window['__CF$cv$params']={r:'86548f957ecc73a3',t:'MTcxMDU5MDE5Ni4xNzUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement("iframe");
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = "absolute";
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = "none";
        _0xh.style.visibility = "hidden";
        document.body.appendChild(_0xh);
        function handler() {
          var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
          if (_0xi) {
            var _0xj = _0xi.createElement("script");
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
          }
        }
        if (document.readyState !== "loading") {
          handler();
        } else if (window.addEventListener) {
          document.addEventListener("DOMContentLoaded", handler);
        } else {
          var prev = document.onreadystatechange || function () {};
          document.onreadystatechange = function (e) {
            prev(e);
            if (document.readyState !== "loading") {
              document.onreadystatechange = prev;
              handler();
            }
          };
        }
      })();
    </script>
    <script>
        // Set the current date and time
        var now = new Date().getTime();

        // Set the countdown date 7 days from now
        var countDownDate = now + (7 * 24 * 60 * 60 * 1000); // 7 days from now

        // Update the countdown every 1 second
        var x = setInterval(function() {

            // Get the current date and time
            var now = new Date().getTime();

            // Calculate the time difference between now and the countdown date
            var distance = countDownDate - now;

            // Calculate days, hours, minutes, and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the countdown timer
            document.querySelector('.days').innerHTML = days;
            document.querySelector('.hours').innerHTML = hours;
            document.querySelector('.minutes').innerHTML = minutes;
            document.querySelector('.seconds').innerHTML = seconds;

            // If the countdown is over, display a message
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("clockdiv").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
  </body>
</html>
