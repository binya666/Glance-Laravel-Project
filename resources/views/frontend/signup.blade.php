<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | Login</title>
    <!-- Stylesheets -->
    <link href="{{ url('frontend/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{ url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ url('frontend/css/slick.css')}}" rel="stylesheet" />
    <link href="{{ url('frontend/css/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{ url('frontend/css/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link href="{{ url('frontend/css/style.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="frontend/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="{{ url('frontend/images/favicon.png')}}" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
  </head>

  <body>
    <div class="lg-page">
      <div class="lg-popup">
        <div class="lg-content">
          <div class="lg-content-inner">
            <h3>create an account</h3>
            <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor sit</p>
            <ul class="lg-social">
              <li>
                <a href="#" title=""
                  ><span><img src="frontend/images/google.svg" alt="" /></span> sign with
                  google</a
                >
              </li>
              <li>
                <a href="#" title=""
                  ><span><img src="frontend/images/fb.svg" alt="" /></span> sign with
                  facebook</a
                >
              </li>
            </ul>
            <div class="or">
              <span>Or sign in with email</span>
            </div>
            <form action="#" method="post">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="arbaz ali" />
              </div>
              <div class="input-field">
                <label>Email</label>
                <input
                  type="email"
                  name="email"
                  placeholder="glance@support.com"
                />
              </div>
              <div class="input-field">
                <label>Password</label>
                <input
                  type="password"
                  name="password"
                  placeholder="*********************"
                />
              </div>
              <button type="submit" class="theme-btn v2 w-100">
                create a login
              </button>
              <div class="btm">
                <span
                  >Already have an account yet ?<a href="/login" title=""
                    >Login</a
                  ></span
                >
              </div>
            </form>
          </div>
        </div>
        <div class="lg-image">
          <img src="frontend/images/resource/pop2.jpg" alt="" />
          <a href="index.php" title="" class="close-pop"
            ><img src="frontend/images/icons/cancle-img.png" alt=""
          /></a>
        </div>
      </div>
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
    <script src="{{ url('frontend/js/script.js')}}"></script>
    <script>
      (function () {
        var js =
          "window['__CF$cv$params']={r:'8654916968c2229a',t:'MTcxMDU5MDI3MS4yNjMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
  </body>
</html>
