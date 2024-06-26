@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">My Account</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="account-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="account-sidebar">
                <div class="account-user">
                  <div class="account-user-img">
                    <img src="assets/images/resource/user.png" alt="" />
                    <a href="#" title="" class="edit"
                      ><img src="assets/images/pencil.png" alt=""
                    /></a>
                  </div>
                  <div class="account-user-info">
                    <h3>Arbaz Ali</h3>
                    <span
                      ><a
                        href="cdn-cgi/l/email-protection.php"
                        class="__cf_email__"
                        data-cfemail="c0a1b2a2a1baa1aca980b3b5b0b0afb2b4eea3afad"
                        >[email&#160;protected]</a
                      ></span
                    >
                  </div>
                </div>
                <!--account user end-->
                <ul class="account-list">
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac1.png" alt="" />
                    </div>
                    <h4><a href="#" title="">Profile Information</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac2.png" alt="" />
                    </div>
                    <h4><a href="#" title="">Manage Address</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac3.png" alt="" />
                    </div>
                    <h4><a href="#" title="">Gift Cards</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac4.png" alt="" />
                    </div>
                    <h4><a href="#" title="">Save Card</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac5.png" alt="" />
                    </div>
                    <h4><a href="#" title="">All Reviews & Rating</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac6.png" alt="" />
                    </div>
                    <h4><a href="#" title="">My Wishlist</a></h4>
                  </li>
                  <li>
                    <div class="ac-icon">
                      <img src="assets/images/ac7.png" alt="" />
                    </div>
                    <h4><a href="#" title="">Logout</a></h4>
                  </li>
                </ul>
              </div>
              <!--account-sidebar end-->
            </div>
            <div class="col-lg-7">
              <div class="personal-information-column">
                <div class="personal-information">
                  <h3>personal information</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                    pharetra vel turpis non, vulputate luctus ex. Phasellus
                    pharetra ut dolor
                  </p>
                </div>
                <div class="row user-details">
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>First Name</h4>
                      <span>Arbaz</span>
                      <div class="us-icon">
                        <img src="assets/images/us1.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>last Name</h4>
                      <span>Ali</span>
                      <div class="us-icon">
                        <img src="assets/images/us1.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Email ID</h4>
                      <span
                        ><a
                          href="cdn-cgi/l/email-protection.php"
                          class="__cf_email__"
                          data-cfemail="fa9b88989b80ba898f8a8a95888ed4999597"
                          >[email&#160;protected]</a
                        ></span
                      >
                      <div class="us-icon">
                        <img src="assets/images/us2.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Contact number</h4>
                      <span>+91 123 456 789</span>
                      <div class="us-icon">
                        <img src="assets/images/us3.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Address</h4>
                      <span>MIG 153 Ram Nagar</span>
                      <div class="us-icon">
                        <img src="assets/images/us4.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>City</h4>
                      <span>Dewas</span>
                      <div class="us-icon">
                        <img src="assets/images/us4.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>State</h4>
                      <span>Madhya Pradesh</span>
                      <div class="us-icon">
                        <img src="assets/images/us4.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Zip Code</h4>
                      <span>4550011</span>
                      <div class="us-icon">
                        <img src="assets/images/us5.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Country</h4>
                      <span>India</span>
                      <div class="us-icon">
                        <img src="assets/images/us6.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="user_info">
                      <h4>Password</h4>
                      <span>***************</span>
                      <div class="us-icon">
                        <img src="assets/images/us7.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="full-button">
                      <a
                        href="#"
                        title=""
                        class="theme-btn v2 w-100 text-center"
                        >save</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!--personal-information-column-->
            </div>
          </div>
        </div>
      </section>
      <!--account-section-->

      <section class="marquee-section bt-0 pb-0">
        <div
          class="marquee"
          style="margin-top: -value"
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
