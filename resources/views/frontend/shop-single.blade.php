@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">Best Choice</h2>
            <p>Your ultimate destination for curated men's grooming essentials</p>
          </div>
        </div>
      </section>
      <section class="shop-single-section">
        <div class="container-fluid">
            <div class="shop-product-single">
                <div class="shop-product-main-image">
                    <div class="cart-product-large-slider">
                        <div class="cart-product-large-image">
                            <img src="{{ asset('backend/images/' . $product->product_Img_1) }}" alt="{{ $product->product_name }} - Image 1" />
                        </div>
                        @if ($product->product_Img_2)
                            <div class="cart-product-large-image">
                                <img src="{{ asset('backend/images/' . $product->product_Img_2) }}" alt="{{ $product->product_name }} - Image 2" />
                            </div>
                        @endif
                        @if ($product->product_Img_3)
                            <div class="cart-product-large-image">
                                <img src="{{ asset('backend/images/' . $product->product_Img_3) }}" alt="{{ $product->product_name }} - Image 3" />
                            </div>
                        @endif
                    </div>
                </div>
                <div class="shop-product-single-info">
                    <h3>{{ $product->product_name }}</h3>
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
                    <p>{{ $product->description }}</p>
                    <div class="price">
                        <span>${{ $product->product_price }}</span>
                        <del>$35.00</del>
                    </div>
                    <div class="size-colors">
                        <div class="product-size">
                            <span>Size</span>
                            <a href="#" title="" class="size-popup-show">size guide</a>
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
                            <input type="text" name="name" value="1" aria-autocomplete="list" />
                            <button class="minus-btn" type="button" name="button">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product"  title="" class="theme-btn">buy now</a>
                    </div>
                    <div class="cart-product-thumb-slider">
                        <div class="cart-product-thumb">
                            <img src="{{ asset('backend/images/' . $product->product_Img_1) }}" alt="{{ $product->product_name }} - Thumbnail 1" />
                        </div>
                        @if ($product->product_Img_2)
                            <div class="cart-product-thumb">
                                <img src="{{ asset('backend/images/' . $product->product_Img_2) }}" alt="{{ $product->product_name }} - Thumbnail 2" />
                            </div>
                        @endif
                        @if ($product->product_Img_3)
                            <div class="cart-product-thumb">
                                <img src="{{ asset('backend/images/' . $product->product_Img_3) }}" alt="{{ $product->product_name }} - Thumbnail 3" />
                            </div>
                        @endif
                    </div>
                    <div class="promo">
                        <img src="{{ asset('frontend/images/vt.png') }}" alt="Promo" />
                        50% off Studiofit Light Grey Hooded Jacket code FGLPW245
                    </div>
                </div>
            </div>



          <!--shop-product-singele-->
        </div>
      </section>
      <!--shop-single-section-->

      <div class="size-popup">
        <a href="#" title="" class="close-popup">
          <img src="{{ asset('frontend/images/close.png') }}" alt="" />
        </a>
        <div class="popup-title">
          <h2>size chart</h2>
          <p>Lorem ipsum dolor sit amet adipiscing elit</p>
        </div>
        <div class="size-chart">
          <img src="frontend/images/resource/chart.png" alt="" />
          <table>
            <tbody>
              <tr>
                <td>size</td>
                <td>XS</td>
                <td>s</td>
                <td>M</td>
                <td>L</td>
                <td>XL</td>
                <td>2XL</td>
              </tr>
              <tr>
                <td>Width</td>
                <td>18</td>
                <td>22</td>
                <td>24</td>
                <td>26</td>
                <td>28</td>
                <td>30</td>
              </tr>
              <tr>
                <td>length</td>
                <td>28</td>
                <td>32</td>
                <td>34</td>
                <td>37</td>
                <td>40</td>
                <td>42</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <section class="lookbook-section">
        <div class="container">
          <div class="lookboo-glance wow slideInUp">
            <div class="lookbook-slider">
              <div class="lookbook">
                <img src="{{ asset('frontend/images/resource/img4.jpg') }}" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="{{ asset('frontend/images/resource/lookbook2.jpg') }}" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="{{ asset('frontend/images/resource/lookbook3.jpg') }}" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="{{ asset('frontend/images/resource/lookbook4.jpg') }}" alt="" />
              </div>
              <!--lookbook-->
            </div>
            <h1 class="pb-text wow fadeInUp">Jacket</h1>
          </div>
        </div>
      </section>

      <section class="themes-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-7">
              <div class="row th-images">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="th-image">
                    <img src="{{ asset('frontend/images/resource/th1.jpg') }}" alt="" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="th-image">
                    <img src="{{ asset('frontend/images/resource/th2.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="th-info">
                <h2>
                  <span>GLANCE</span> Your ultimate destination for curated men's grooming essentials.
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                  luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                  pharetra vel turpis non, vulputate luctus ex. Phasellus
                  pharetra ut dolor ac rutrum. Curabitur molestie nec mi in
                  congue. Nam luctus ante quis urna molestie, ut venenatis diam
                  sagittis. Nam ligula velit,
                </p>
                <ul class="th-list">
                  <li>
                    <h4>Morbi euismo odio</h4>
                    <span>Donec ullamcorper dolor</span>
                  </li>
                  <li>
                    <h4>Vestibm vehicula</h4>
                    <span>Morbi bibenm dapibus</span>
                  </li>
                  <li>
                    <h4>Quisque digm lacus</h4>
                    <span>Cras elemum tort</span>
                  </li>
                  <li>
                    <h4>Etiam scelerisque</h4>
                    <span>Quisque sed placerat</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

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

      <section class="images-section">
        <div class="container-fluid">
          <div class="images-sec">
            <div class="image-col">
              <img src="{{ asset('frontend/images/resource/image1.jpg') }}" alt="" />
            </div>
            <div class="image-col">
              <img src="{{ asset('frontend/images/resource/image2.jpg') }}" alt="" />
            </div>
            <div class="image-col">
              <img src="{{ asset('frontend/images/resource/image3.jpg') }}" alt="" />
            </div>
            <div class="image-col">
              <img src="{{ asset('frontend/images/resource/shop-img1.jpg') }}" alt="" />
            </div>
            <div class="image-col">
              <img src="{{ asset('frontend/images/resource/shop-img2.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!--images-section-->

      <section class="testimonial-section v2">
        <div class="container">
          <div class="testimonial-slider">
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="{{ asset('frontend/images/resource/testi1.jpg') }}" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="{{ asset('frontend/images/resource/testi1.jpg') }}" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="{{ asset('frontend/images/resource/testi1.jpg') }}" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--testimonial-section-->

      <section class="blog-posts-section">
        <div class="container">
          <div class="sec-title text-left">
            <h2>Studiofit Light Grey Hooded Man Jacket</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis non, vulputate luctus ex. Phasellus pharetra ut dolor ac
              rutrum.
            </p>
          </div>
          <!--sec-title-->
          <div class="row blog_posts">
            <div class="col-lg-6">
              <div class="blog_post">
                <div class="blog_post_thumb">
                  <img src="{{ asset('frontend/images/resource/postt1.jpg') }}" alt="" />
                </div>
                <div class="blog_post_info">
                  <h3><a href="#" title="">Light Grey Hooded Jacket</a></h3>
                  <p>
                    Vestibulum dignissim imperdiet nunc, mollis gravida sapien
                    ornare eu. Nunc luctus fermentum est. Proin mi dolor,
                    gravida non erat at, eleifend tincidunt mauris. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Vestibulum
                    pretium nisi orci, id bibendum
                  </p>
                </div>
              </div>
              <!--blog_post-->
            </div>
            <div class="col-lg-6">
              <div class="blog_post">
                <div class="blog_post_thumb">
                  <img src="{{ asset('frontend/images/resource/postt2.jpg') }}" alt="" />
                </div>
                <div class="blog_post_info">
                  <h3><a href="#" title="">Light Grey Hooded Jacket</a></h3>
                  <p>
                    Vestibulum dignissim imperdiet nunc, mollis gravida sapien
                    ornare eu. Nunc luctus fermentum est. Proin mi dolor,
                    gravida non erat at, eleifend tincidunt mauris. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Vestibulum
                    pretium nisi orci, id bibendum
                  </p>
                </div>
              </div>
              <!--blog_post-->
            </div>
          </div>
        </div>
      </section>
      <!--posts-section-->

      <section class="prod-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="{{ asset('frontend/images/resource/shop1.jpg') }}" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">girls hat</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="{{ asset('frontend/images/resource/shop2.jpg') }}" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">winter collection</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="{{ asset('frontend/images/resource/shop3.jpg') }}" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">summer girl dress</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews-section">
        <div class="container-fluid">
          <div class="sec-title">
            <h2>Grey Hooded Jacket Reviews</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <ul class="reviews-list">
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="{{ asset('frontend/images/resource/review.jpg') }}" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="{{ asset('frontend/images/resource/review2.jpg') }}" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="{{ asset('frontend/images/resource/review3.jpg') }}" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="{{ asset('frontend/images/resource/review3.jpg') }}" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <!--reviews-list-->
          <div class="full-button text-center">
            <a href="#" title="" class="theme-btn">more reviews</a>
          </div>
        </div>
      </section>
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
      <script>
        // Get all the list items inside the size-list
const sizeItems = document.querySelectorAll('.size-list li');

// Loop through each list item
sizeItems.forEach(item => {
    // Add click event listener to each list item
    item.addEventListener('click', function() {
        // Remove 'active' class from all items
        sizeItems.forEach(li => li.classList.remove('active'));

        // Add 'active' class to the clicked item
        this.classList.add('active');
    });
});

      </script>
@endsection
