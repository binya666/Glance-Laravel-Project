@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
      <div class="popup subscribe-popup">
        <a href="#" title="" class="close-popup">
          <img src="frontend/images/close2.png" alt="" />
        </a>
        <div class="row">
          <div class="col-lg-6 image-popup">
            <img src="frontend/images/resource/p-sale.jpg" alt="" />
          </div>
          <div class="col-lg-6 popup-content">
            <div class="inner-column">
              <div class="popup-title text-center">
                <h2>coming soon!!</h2>
                <p>Your ultimate destination for curated men's grooming essentials.</p>
              </div>
              <div class="time-counter" id="clockdiv">
                <ul style="padding: 17px 25px 17px;">
                  <li>
                    <h3 class="days">20</h3>
                    <span>Days</span>
                  </li>
                  <li>
                    <h3 class="hours">09</h3>
                    <span>Hours</span>
                  </li>
                  <li>
                    <h3 class="minutes">59</h3>
                    <span>Minutes</span>
                  </li>
                  <li>
                    <h3 class="seconds">47</h3>
                    <span>Seconds</span>
                  </li>
                </ul>
              </div>
              <div class="full-btn" style="padding-top: 26px;">
                <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn v2"
                onclick="alert('Thank you for your purchase!')">buy now</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shop-single-section popup-quick-view">
        <div class="shop-product-single">
          <a href="#" title="" class="close-popup">
            <img src="frontend/images/close2.png" alt="" />
          </a>
          <div class="shop-product-main-image">
            <span class="pr-bar">new</span>
            <div class="cart-product-large-slider">
              <div class="cart-product-large-image">
                <img src="frontend/images/resource/jacket1.png" alt="" />
              </div>
              <div class="cart-product-large-image">
                <img src="frontend/images/resource/jacket2.png" alt="" />
              </div>
              <div class="cart-product-large-image">
                <img src="frontend/images/resource/jacket3.png" alt="" />
              </div>
            </div>
          </div>
          <div class="shop-product-single-info">
            <h3>
              <a href="shop-single.php" title=""
                >Studiofit Light Grey Hooded Jacket</a
              >
            </h3>
            <div class="prod-ratings">
              <ul class="ratings">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>4.5</span>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis non, vulputate luctus ex.
            </p>
            <div class="price">
              <span>$25.45</span>
              <del>$35.00</del>
            </div>
            <div class="size-colors">
              <div class="product-size">
                <span>Size</span>
                <a href="#" title="">size guide</a>
                <ul class="size-list">
                  <li class="active">l</li>
                  <li>m</li>
                  <li>s</li>
                  <li>xl</li>
                  <li>xll</li>
                </ul>
              </div>
              <div class="product-colors">
                <span>color</span>
                <ul class="colors-list">
                  <li class="active">
                    <span class="clr1"></span>
                  </li>
                  <li>
                    <span class="clr2"></span>
                  </li>
                  <li>
                    <span class="clr3"></span>
                  </li>
                  <li>
                    <span class="clr4"></span>
                  </li>
                  <li>
                    <span class="clr5"></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cart-items-add">
              <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                  <i class="fa fa-plus"></i>
                </button>
                <input
                  type="text"
                  name="name"
                  value="1"
                  aria-autocomplete="list"
                />
                <button class="minus-btn" type="button" name="button">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
              <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn">buy now</a>
            </div>
            <div class="cart-product-thumb-slider">
              <div class="cart-product-thumb">
                <img src="frontend/images/resource/jacket1.png" alt="" />
              </div>
              <div class="cart-product-thumb">
                <img src="frontend/images/resource/jacket2.png" alt="" />
              </div>
              <div class="cart-product-thumb">
                <img src="frontend/images/resource/jacket3.png" alt="" />
              </div>
            </div>
            <div class="promo">
              <img src="frontend/images/vt.png" alt="" />
              50% off Studiofit Light Grey Hooded Jacket code FGLPW245
            </div>
          </div>
        </div>
      </div>
      <section class="main-slider-v2">
        <div class="slider-nav">
          <div class="main-slider-slide">
            <img
              src="frontend/images/resource/main-banner1.jpg"
              alt=""
              class="animated"
              data-animation-in="zoomInImage"
            />
            <div class="main-slider-content">
              <span>Haute Couture</span>
              <h1>New Arrivals</h1>
              <p>Your ultimate destination for curated men's grooming essentials.</p>
              <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn">buy now</a>
            </div>
          </div>
          <!--main-slider-slide-->
          <div class="main-slider-slide">
            <img
              src="frontend/images/resource/main-banner2.jpg"
              alt=""
              class="animated"
              data-animation-in="zoomInImage"
            />
            <div class="main-slider-content">
              <span>Haute Couture</span>
              <h1>New Arrivals</h1>
              <p>Your ultimate destination for curated men's grooming essentials.</p>
              <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn">buy now</a>
            </div>
          </div>
          <!--main-slider-slide-->
          <div class="main-slider-slide">
            <img
              src="frontend/images/resource/main-banner3.jpg"
              alt=""
              class="animated"
              data-animation-in="zoomInImage"
            />
            <div class="main-slider-content">
              <span>Haute Couture</span>
              <h1>New Arrivals</h1>
              <p>Your ultimate destination for curated men's grooming essentials</p>
              <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn">buy now</a>
            </div>
          </div>
          <!--main-slider-slide-->
        </div>
        <div class="slider-dots-box"></div>
      </section>
      <!--main-slider-->

      <section class="about-section-v2">
        <div class="container">
          <div class="about-content-v2">
            <h2>
              Style is the
              <img src="frontend/images/resource/c1.png" alt="" /> perfection
              <img src="frontend/images/resource/c2.png" alt="" /> point of view
              <img src="frontend/images/resource/c3.png" alt="" />
            </h2>
            <p>
            Welcome to Glance, your ultimate destination for curated men's grooming essentials. Elevate your style effortlessly with our carefully selected range of clothing, shoes, and accessories. From suave suits to stylish sneakers, we've got everything you need to make a statement. With Glance, achieving your desired look is just a click away.
            </p>
            <a href="/about" title="" class="theme-btn">about more</a>
          </div>
        </div>
      </section>

      <section class="lookbook-section-v2">
        <div class="container">
          <div class="lookbook-v2-slide">
            <div class="lookbook-v2 row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="lookbook-inner wow fadeIn" data-wow-delay="200ms">
                  <img src="frontend/images/resource/book1.jpg" alt="" />
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="lookbook-inner wow fadeIn" data-wow-delay="400ms">
                  <img src="frontend/images/resource/book2.jpg" alt="" />
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="lookbook-inner wow fadeIn" data-wow-delay="600ms">
                  <img src="frontend/images/resource/book3.jpg" alt="" />
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="lookbook-inner wow fadeIn" data-wow-delay="800ms">
                  <img src="frontend/images/resource/book4.jpg" alt="" />
                </div>
              </div>
            </div>
            <h1 class="pb-text wow slideInUp">lookbook</h1>
          </div>
        </div>
      </section>

      <section class="marquee-section v2 web-slides">
        <div
          class="marquee6"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>

      <section class="category-section-v2">
        <div class="container-full">
          <div class="sec-title space-v2 wow fadeInUp">
            <h2>GLANCE Category</h2>
            <p>
            Dive into our exclusive Glance category, where sophistication meets style. From timeless classics to contemporary trends, find everything you need to craft your unique aesthetic. Explore our collection now and make every glance count.
            </p>
          </div>
          <div class="categories-v2">
            <div class="swiper-container swiper3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                              <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <h6>Men Clothing</h6>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <h6>Men's Grooming</h6>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" style="transition: all 0.3s ease;"/>
                          </div>
                          <h3>
                            <h6>Innerwear & Loungewear</h6>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" style="transition: all 0.3s ease;"/>
                          </div>
                          <h3>
                            <h6>Accessories</h6>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" style="transition: all 0.3s ease;"/>
                          </div>
                          <h3>
                            <h6>Sunglasses</h6>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Men Clothing</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Men's Grooming</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Innerwear & Loungewear</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Accessories</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Sunglasses</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Men Clothing</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Men's Grooming</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Innerwear & Loungewear</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Accessories</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Sunglasses</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Men Clothing</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Men's Grooming</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Innerwear & Loungewear</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Accessories</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Sunglasses</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Men Clothing</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Men's Grooming</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Innerwear & Loungewear</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Accessories</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Sunglasses</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="category-slide">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery1.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Men Clothing</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery2.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Men's Grooming</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery3.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title=""
                              >Innerwear & Loungewear</a
                            >
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery4.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Accessories</a>
                          </h3>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="category-v2">
                          <div class="category-v2-img">
                            <img src="frontend/images/resource/gallery5.jpg" alt="" />
                          </div>
                          <h3>
                            <a href="shop-single.php" title="">Sunglasses</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-scrollbar v3">
                <span class="swiper-scrollbar-drag"
                  ><span class="drag-inner">DISCOVER MORE</span></span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="product-view-section">
        <div class="container-fluid">
          <div class="product-view-banner">
            <h2>Sports</h2>
            <h2 class="v2">Glance</h2>
            <div class="product-view-slider">
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Air Jordan</a>
                  </h3>
                  <p>
                  Experience Air Jordan: Where style meets performance.
                  Step up your game with iconic designs and unparalleled comfort.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="frontend/images/resource/product-img1.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Men Jacket</a>
                  </h3>
                  <p>
                  Dive into the world of men's jackets, where style meets versatility. From classic cuts to contemporary designs, discover the perfect blend of fashion and function.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="frontend/images/resource/product-img3.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Women's Perfume</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Etiam semper lacus id libero porta blandit.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="shop-single.php" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="frontend/images/resource/product-img1.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
            </div>
            <!--product-view-slider-->
          </div>
        </div>
      </section>
      <!--product-view-section-->

      <section class="marquee-section v2">
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>

      <section class="collection-section v2">
        <div class="container-fluid">
          <div class="sec-title space-v2 wow slideInUp">
            <h2>new collection</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <div class="product-categories v2 without-slide row">
            <div class="col-lg-2">

              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct1.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct2.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/col1.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct4.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct5.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct6.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct7.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!--product-hover-info-->
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct8.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct9.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="product-cat">
                <div class="product-img">
                  <img src="frontend/images/resource/ct10.jpg" alt="" />
                  <span class="pro-category">new</span>
                </div>
                <div class="product-hover-info">
                  <div class="product-hover-head">
                    <ul class="pt-links">
                      <li>new</li>
                      <li>sales</li>
                    </ul>
                    <a href="#" title="" class="fvrt-product"
                      ><img src="frontend/images/icons/heart.svg" alt=""
                    /></a>
                  </div>
                  <div class="product-info-hover">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span>Loues Vuitto</span>
                    <div class="pricee">
                      <span>$25.45</span>
                    </div>
                    <ul class="pro-colors">
                      <li class="clr1"></li>
                      <li class="clr2"></li>
                      <li class="clr3"></li>
                      <li class="clr4"></li>
                    </ul>
                    <ul class="variations">
                      <li>s</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <ul class="pro-buttons">
                      <li>
                        <a href="#" title="" class="theme-btn quick-view-btn"
                          >quick view</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-info">
                  <h3><a href="shop-single.php" title="">Casual Jacket</a></h3>
                  <span class="product-price">$25.45</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="glance-banner">
        <div class="video-intro wow fadeInUp">
          <video id="video1" controls autoplay="autoplay" loop>
            <source src="frontend/videos/1105931_1080p_Teenage_Hood_1920x1080.mp4" />
          </video>
        </div>
      </section>
      <section class="testimonial-section-v2">
        <div class="container-full">
          <div class="sec-title space-v2 wow fadeInUp">
            <h2>client testimonials</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <div class="row testi-v2-slider wow slideInUp">
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                Glance has completely transformed my grooming routine. The quality of their products is exceptional, and I always receive compliments on my style.
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author1.png" alt="" />
                  <h4>Arbaz Ali</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                I'm impressed with the range of options available at Glance. Whether I need a sharp suit for work or casual wear for the weekend, they've got me covered.
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author2.png" alt="" />
                  <h4>Michael R</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                The customer service at Glance is top-notch. They helped me find the perfect shoes for a special occasion, and I couldn't be happier with my purchase.
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author3.png" alt="" />
                  <h4>David L</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                I've never been one to pay much attention to grooming, but Glance changed that for me. Their curated collection made it easy for me to find stylish essentials.
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author1.png" alt="" />
                  <h4>Alex K</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                Shopping at Glance is always a pleasure. Their website is user-friendly, and I love how they keep up with the latest trends while also offering timeless pieces.
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author2.png" alt="" />
                  <h4>Sarah M</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
            <div class="col-lg-4">
              <div class="testi2-slide">
                <p>
                Glance has become my go-to destination for upgrading my style. Their diverse selection of men's grooming essentials ensures. Thanks, Glance!
                </p>
                <div class="testi2-info">
                  <img src="frontend/images/resource/author3.png" alt="" />
                  <h4>Daniel H</h4>
                </div>
              </div>
              <!--testi2-slide-->
            </div>
          </div>
        </div>
      </section>
      <!--testimonial-section-v2-->

      <section class="trending-section-v2">
        <div class="container">
          <div class="sec-title space-v2 wow fadeInUp">
            <h2>trending of the week</h2>
            <p>
            Elevate your look and shield your eyes with the latest shades. Explore our stylish selection and stay ahead of the curve in eyewear fashion
            </p>
          </div>
          <div class="trending-slider wow slideInUp">
            <div class="trending-slide">
              <div class="trending-img">
                <img src="frontend/images/resource/trending1.jpg" alt="" />
                <div class="trending-caption-v2">
                  <div class="trending-thumb">
                    <img src="frontend/images/resource/trending2.jpg" alt="" />
                  </div>
                  <h3><a href="shop-single.php" title="">Sunglasses</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <div class="price">
                    <span>$25.45 <del>$35.00</del></span>
                  </div>
                </div>
              </div>
              <div class="trending-img-v2">
                <img src="frontend/images/resource/trending3.png" alt="" />
                <div class="featured-hover">
                  <span class="hvr"></span>
                  <div class="hvr-content">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span class="price">$25.45</span>
                    <ul class="varies">
                      <li>S</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <a href="#" title="" class="quick-add">quick add</a>
                  </div>
                </div>
                <div class="featured-hover v2">
                  <span class="hvr"></span>
                  <div class="hvr-content">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span class="price">$25.45</span>
                    <ul class="varies">
                      <li>S</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <a href="#" title="" class="quick-add">quick add</a>
                  </div>
                </div>
                <div class="featured-hover v3">
                  <span class="hvr"></span>
                  <div class="hvr-content">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span class="price">$25.45</span>
                    <ul class="varies">
                      <li>S</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <a href="#" title="" class="quick-add">quick add</a>
                  </div>
                </div>
                <div class="featured-hover v5">
                  <span class="hvr"></span>
                  <div class="hvr-content">
                    <h3>
                      <a href="shop-single.php" title="">Casual Jacket</a>
                    </h3>
                    <span class="price">$25.45</span>
                    <ul class="varies">
                      <li>S</li>
                      <li>m</li>
                      <li>l</li>
                    </ul>
                    <a href="#" title="" class="quick-add">quick add</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--trending-section-v2-->

      <section class="brand-section v2">
        <div class="container">
          <div class="pt-logos">
            <div class="pt-logo wow fadeIn">
              <img src="frontend/images/resource/pt1.png" alt="" />
            </div>
            <div class="pt-logo wow fadeIn" data-wow-delay="300ms">
              <img src="frontend/images/resource/pt2.png" alt="" />
            </div>
            <div class="pt-logo wow fadeIn" data-wow-delay="500ms">
              <img src="frontend/images/resource/pt3.png" alt="" />
            </div>
            <div class="pt-logo wow fadeIn" data-wow-delay="700ms">
              <img src="frontend/images/resource/pt4.png" alt="" />
            </div>
            <div class="pt-logo wow fadeIn" data-wow-delay="900ms">
              <img src="frontend/images/resource/pt5.png" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!--brand-section-->

      <section class="collection-new">
        <div class="container-fluid">
          <div class="title-clt wow slideInUp">
            <h2>
              The joy <img src="frontend/images/resource/cl1.png" alt="" /> of dressing
              <img src="frontend/images/resource/cl2.png" alt="" /> is an art
            </h2>
          </div>
          <div class="flex-container wow slideInUp">
            <div class="flex-slide accessories">
              <h2>accessories</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/clothes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
            <div class="flex-slide fashion">
              <h2>fashion</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/clothes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
            <div class="flex-slide sneekers">
              <h2>sneakers</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/clothes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
            <div class="flex-slide blazer">
              <h2>Blazer</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/clothes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
            <div class="flex-slide polo">
              <h2>Polo shirt</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/shoes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
            <div class="flex-slide bag">
              <h2>Hand bag</h2>
              <div class="flex-content">
                <h3>Blazer</h3>
                <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                <a href="/product/category/clothes" title="" class="theme-btn"
                  >shop now</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="marquee-section v2 web-slides">
        <div
          class="marquee6"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>
      <section class="cart-section-v2">
        <div class="container-fluid">
          <div class="card-product-content-v2">
            <div class="card-product-thumb-slider">
              <div class="cart-product-slider">
                <div class="circle-container">
                  <div class="circle delay1"></div>
                  <div class="circle delay2"></div>
                  <div class="circle delay3"></div>
                  <div class="circle delay4"></div>
                </div>
                <div class="cart-product-slider-slide">
                  <div class="cart-product-slide">
                    <img src="frontend/images/resource/product1.png" alt="" />
                  </div>
                  <div class="cart-product-slide">
                    <img src="frontend/images/resource/product2.png" alt="" />
                  </div>
                  <div class="cart-product-slide">
                    <img src="frontend/images/resource/product3.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="cart-slider-thumb wow slideInLeft">
                <div class="cart-product-thumb-slide">
                  <img src="frontend/images/resource/product2.jpg" alt="" />
                </div>
                <div class="cart-product-thumb-slide">
                  <img src="frontend/images/resource/product-2.jpg" alt="" />
                </div>
                <div class="cart-product-thumb-slide">
                  <img src="frontend/images/resource/product-3.jpg" alt="" />
                </div>
              </div>
            </div>
            <!--card-product-thumb-slider-->
            <div class="cart-product-info-v2">
              <div class="cart-product-content">
                <div class="cart-product-info wow slideInRight">
                  <h2>Studiofit Light Grey Hooded Jacket</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                    pharetra vel turpis non, vulputate luctus ex. Phasellus
                    pharetra ut dolor ac rutrum.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="shop-single.php" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--card-product-content-v2-->
        </div>
      </section>
      <!--cart-section-->

      <section class="latest-news-section">
        <div class="container-fluid">
          <div class="sec-title wow fadeInUp">
            <h2>latest news</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <!--sec-title-->
          <div class="blog-posts">
            <div class="post wow fadeInLeft">
              <div class="post-thumb">
                <img src="frontend/images/resource/blog1.jpg" alt="" />
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
            <div class="post wow fadeInLeft" data-wow-delay="200ms">
              <div class="post-thumb">
                <img src="frontend/images/resource/blog2.jpg" alt="" />
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
            <div class="post wow fadeInLeft" data-wow-delay="400ms">
              <div class="post-thumb">
                <img src="frontend/images/resource/blog3.jpg" alt="" />
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
            <div class="post wow fadeInLeft" data-wow-delay="600ms">
              <div class="post-thumb">
                <img src="frontend/images/resource/blog4.jpg" alt="" />
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
            <div class="post wow fadeInLeft" data-wow-delay="800ms">
              <div class="post-thumb">
                <img src="frontend/images/resource/blog5.jpg" alt="" />
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
          <!--blog-posts-->
          <div class="full-button text-center wow slideInUp">
            <a href="#" title="" class="theme-btn">view all</a>
          </div>
        </div>
      </section>
      <!--latest-news-section-->

    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    @endsection
