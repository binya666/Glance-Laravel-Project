@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">Clothes</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="top-match-section v2">
        <div class="container-fluid">
          <div class="categories-match-slider">
            <div class="swiper5 shop-categories-section">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect1.jpg') }}" alt="" />
                    <h3>dresses</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect2.jpg') }}" alt="" />
                    <h3>Top & Tees</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect3.jpg') }}" alt="" />
                    <h3>Bottomwear</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect4.jpg') }}" alt="" />
                    <h3>Jumpsuits</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect1.jpg') }}" alt="" />
                    <h3>dresses</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect2.jpg') }}" alt="" />
                    <h3>Top & Tees</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect3.jpg') }}" alt="image" />
                    <h3>Bottomwear</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="{{ asset('frontend/images/resource/rect4.jpg') }}" alt="" />
                    <h3>Jumpsuits</h3>
                  </div>
                </div>
              </div>
              <!-- pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <!--categories-match-slider-->
        </div>
      </section>

      <section class="shop-page">
        <div class="container-fluid">
          <div class="shop-header">
            <h4>Showing 1–15 of 36 results</h4>
            <div class="switcher">
              <h4>In stock only</h4>
              <label class="switch">
                <input type="checkbox" checked />
                <span class="slider round"></span>
              </label>
            </div>
            <div class="shop-filters">
              <ul class="tabs-icons">
                <li class="current" data-tab="tab-1">
                  <i class="fa fa-list"></i>
                </li>
                <li data-tab="tab-2"><i class="fa fa-th-large"></i></li>
                <li data-tab="tab-3"><i class="fa fa-th"></i></li>
              </ul>
              <ul class="shop-ul">
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Brands</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>Brand 1</li>
                      <li>Brand 2</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Colors</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>Red</li>
                      <li>Green</li>
                      <li>Orange</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Size</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>small</li>
                      <li>medium</li>
                      <li>large</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Price</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>200$</li>
                      <li>300$</li>
                      <li>400$</li>
                    </ul>
                  </div>
                </li>
              </ul>
              <div class="sort-by">
                <div class="drop-menu">
                  <div class="select">
                    <span>Sort by : Featured</span>
                    <div class="check-icon">
                      <i class="fa fa-angle-down"></i>
                    </div>
                  </div>
                  <input type="hidden" name="gender" />
                  <ul class="dropeddown">
                    <li>trending</li>
                    <li>winter collection</li>
                    <li>summer collection</li>
                    <li>top seller</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="custom-tab-content">
            <div class="custom-tab-pane current" id="tab-1">
              <div class="collection-section bb-0">
                <div class="product-categories v2">
                    @foreach ($clothes as $product)
                        <div class="product-cat">
                            <div class="product-img">
                                <img src="{{ asset('backend/images/' . $product->product_Img_1) }}" alt="" />
                                <span class="pro-category">new</span>
                            </div>
                            <div class="product-hover-info">
                                <div class="product-hover-head">
                                    <ul class="pt-links">
                                        <li>new</li>
                                        <li>sales</li>
                                    </ul>
                                    <a href="https://api.whatsapp.com/send?phone=923126036074&text=I%20am%20interested%20in%20this%20product" title="" class="fvrt-product">
                                        <img src="{{ asset('frontend/images/icons/heart.svg') }}" alt="image" />
                                    </a>
                                </div>
                                <div class="product-info-hover">
                                    <h3>
                                        <a href="/shop-single" title="">{{ $product->product_name }}</a>
                                    </h3>
                                    <span>{{ $product->product_brand }}</span>
                                    <div class="pricee">
                                        <span>${{ $product->product_price }}</span>
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
                                        <li class="active">l</li>
                                    </ul>
                                    <ul class="pro-buttons">
                                        <li>
                                            <a href="{{ route('shop-single', ['id' => $product->id]) }}" title="Quick View" class="theme-btn">quick view</a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--product-hover-info-->
                            <div class="product-info">
                                <h3>
                                    <a href="/shop-single" title="">{{ $product->product_name }}</a>
                                </h3>
                                <span class="product-price">{{ $product->product_price }}</span>
                            </div>
                        </div>
                    @endforeach



                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link active" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="custom-tab-pane grid-view" id="tab-2">
              <div class="collection-section bb-0">
                <div class="product-categories v2">

                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="custom-tab-pane" id="tab-3">
              <div class="collection-section bb-0">
                <div class="product-categories v2">

                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
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
                    <a href="/shop-single" title="">Women's Perfume</a>
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
                    <a href="/shop-single" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="{{ asset('frontend/images/resource/product-img1.png') }}" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="/shop-single" title="">Women's Perfume</a>
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
                    <a href="/shop-single" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="{{ asset('frontend/images/resource/product-img1.png') }}" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="/shop-single" title="">Women's Perfume</a>
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
                    <a href="/shop-single" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="{{ asset('frontend/images/resource/product-img1.png') }}" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
            </div>
            <!--product-view-slider-->
          </div>
        </div>
      </section>

      <section class="marquee-section abt border-top-0">
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

