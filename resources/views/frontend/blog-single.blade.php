@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
  <!--overlay-menu-->

      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">Latest artical</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="blog-single">
        <div class="container">
          <div class="blog-post-single">
            <img
              class="main-single-image"
              src="frontend/images/resource/blog-single.jpg"
              alt=""
            />
            <div class="post-info">
              <h3>
                Quisque sagittis risus purus, non lacinia nulla congue non.
                Etiam in orci egestas neque ultrices tincidunt. Nulla et nunc
                nunc. In hac habitasse platea dictumst. Ut eget auctor magna.
              </h3>
              <ul class="meta">
                <li>
                  <img src="frontend/images/icons/icon5.svg" alt="" />
                  <a href="#" title="">08 July 2022</a>
                </li>
                <li>
                  <img src="frontend/images/icons/icon6.svg" alt="" />
                  <a href="#" title="">07:41 PM IST</a>
                </li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                est quam, semper at nisi ac, tristique fermentum lectus.
                Praesent sit amet metus et ipsum malesuada blandit id eget
                velit. Praesent vehicula diam finibus imperdiet dignissim.
                Vestibulum non lectus eu neque congue euismod. Duis vel lorem
                consectetur, faucibus urna placerat, mollis dolor. Fusce orci
                felis, efficitur sed dapibus quis, sollicitudin a velit. Cras a
                nunc a eros semper porttitor. Maecenas molestie magna sit amet
                velit facilisis pulvinar.
              </p>
              <p>
                Quisque sagittis risus purus, non lacinia nulla congue non.
                Etiam in orci egestas neque ultrices tincidunt. Nulla et nunc
                nunc. In hac habitasse platea dictumst. Ut eget auctor magna.
                Aliquam ex lacus, rutrum vitae neque vel, ultricies efficitur
                diam. Praesent efficitur justo eget nisl egestas, sed fringilla
                ante bibendum. Quisque quis iaculis risus. Sed semper magna
                sollicitudin leo cursus, a rhoncus enim tincidunt. Integer eu
                tortor ac risus tincidunt semper. Sed orci risus, blandit a dui
                id, luctus imperdiet sem. Nam aliquet, leo ac lobortis
                elementum, lacus velit malesuada risus, et faucibus mauris
                tellus eget turpis.
              </p>
            </div>
            <blockquote>
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
            </blockquote>
            <div class="row bb-info">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <img
                  src="frontend/images/resource/blog-single2.jpg"
                  alt=""
                  class="mw-100"
                />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                  luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                  pharetra vel turpis non, vulputate luctus ex. Phasellus
                  pharetra ut dolor ac rutrum. Curabitur molestie nec mi in
                  congue. Nam luctus ante quis urna molestie, ut venenati
                </p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="frontend/images/resource/single3.jpg" alt="" class="mw-100" />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                  luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                  pharetra vel turpis non, vulputate luctus ex. Phasellus
                  pharetra ut dolor ac rutrum. Curabitur molestie nec mi in
                  congue. Nam luctus ante quis urna molestie, ut venenati
                </p>
              </div>
            </div>
            <img
              class="main-single-v2"
              src="frontend/images/resource/single4.jpg"
              alt=""
            />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
              est quam, semper at nisi ac, tristique fermentum lectus. Praesent
              sit amet metus et ipsum malesuada blandit id eget velit. Praesent
              vehicula diam finibus imperdiet dignissim. Vestibulum non lectus
              eu neque congue euismod. Duis vel lorem consectetur, faucibus urna
              placerat, mollis dolor. Fusce orci felis, efficitur sed dapibus
              quis, sollicitudin a velit. Cras a nunc a eros semper porttitor.
              Maecenas molestie magna sit amet velit facilisis pulvinar.
            </p>
          </div>
          <!--blog-post-single-->
        </div>
      </section>
      <!--blog-single-->

      <section class="marquee-section v2 single-v">
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>

      <section class="collection-section related-posts bg-change">
        <div class="container-fluid">
          <div class="sec-title wow slideInUp">
            <h2>related post</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <div class="swiper-container swiper2 blog-posts">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp1.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp2.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp3.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp5.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
              <div class="swiper-slide">
                <div class="post">
                  <div class="post-thumb">
                    <img src="frontend/images/resource/rp4.jpg" alt="" />
                  </div>
                  <div class="post-info">
                    <h3>
                      <a href="/blog-single" title=""
                        >Nearly 13 Million US Children Infected Since Covid
                        Pandemic</a
                      >
                    </h3>
                    <ul class="meta">
                      <li>
                        <img src="frontend/images/icons/icon5.svg" alt="" />
                        <a href="#" title="">08 July 2022</a>
                      </li>
                      <li>
                        <img src="frontend/images/icons/icon6.svg" alt="" />
                        <a href="#" title="">07:41 PM IST</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--post-->
              </div>
            </div>
            <!-- scrollbar -->
            <div class="swiper-scrollbar v2">
              <span class="swiper-scrollbar-drag"
                ><span class="drag-inner">DISCOVER MORE</span></span
              >
            </div>
          </div>
        </div>
      </section>
      <!--collection-section-->

      <section class="empty-space"></section>

      <section class="marquee-section bt-0 pb-0">
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
        <div
          class="marquee2"
          data-duration="17000"
          data-gap="37"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>
      @endsection
