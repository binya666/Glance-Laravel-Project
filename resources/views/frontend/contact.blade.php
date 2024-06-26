@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
            <section class="page-banner">
                <div class="container">
                    <div class="page-banner-content text-center">
                        <h2 class="page-title">Contact us</h2>
                        <p> Start browsing now and unleash your unique style!</p>
                    </div>
                </div>
            </section>
            <section class="contact-page-section">
                <div class="container">
                    <div class="about-content-v2">
                        <h2>
                            Style is the
                            <img src="frontend/images/resource/c1.png" alt="" /> perfection
                            <img src="frontend/images/resource/c2.png" alt="" /> point of view
                            <img src="frontend/images/resource/c3.png" alt="" />
                        </h2>
                        <p>
                            Got something on your mind? Drop us a line! Whether it's a question, feedback, or just to say
                            hello, we'd love to hear from you. Reach out to us using the contact form below, and we'll get
                            back to you as soon as possible.
                        </p>
                        <ul class="contact-links-info">
                            <li>
                                <div class="ct-icon">
                                    <img src="frontend/images/ct1.png" alt="" />
                                </div>
                                <p>House No.32, MIG, Maksi Rd, Tulja Vihar, Awas Dewas, M.P</p>
                            </li>
                            <li>
                                <div class="ct-icon">
                                    <img src="frontend/images/ct2.png" alt="" />
                                </div>
                                <a href="#" title="">glance@ support.com</a>
                                <a href="#" title=""><span class="__cf_email__"
                                        data-cfemail="26414a47484543665243474b0845494b">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <div class="ct-icon">
                                    <img src="frontend/images/ct3.png" alt="" />
                                </div>
                                <a href="#" title="">+91 0123 456 789</a>
                                <a href="#" title="">+32 145 789 478</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="map-section-full">
                <div class="container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27457.43347083639!2d73.1097266119936!3d30.657082443443585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1714093161387!5m2!1sen!2s"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

            <section class="contact-form-section">
                <div class="container">
                    <div class="sec-title space-v2">
                        <h2>get in touch</h2>
                        <p>
                            For any inquiries or assistance, please don't hesitate to contact us. We're here to help! You
                            can reach us via email at glance@gmail.com or by phone at +923126036074. Alternatively, you can
                            fill out the contact form below, and we'll get back to you as soon as possible.
                        </p>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning"
                            style="background-color:#b88669; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{ $message }}</h1>
                            </strong>
                        </div>
                    @endif
                    <form action="/contact" method="post" class="contact_form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>first Name</label>
                                    <input type="text" id="firstname" name="firstname" placeholder="John" />
                                    @if ($errors->has('firstname'))
                                        <span class="text-danger">
                                            {{ $errors->first('firstname') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>last Name</label>
                                    <input type="text" id="lastname" name="lastname" placeholder="Doe" />
                                    @if ($errors->has('lastname'))
                                        <span class="text-danger">
                                            {{ $errors->first('lastname') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>your email</label>
                                    <input type="email" id="email" name="email"
                                        placeholder="name@example.com" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>your message</label>
                                    <textarea name="message" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-submit">
                                    <button type="submit" name="submit" class="theme-btn v2">send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <section class="marquee-section bt-0 pb-0">
                <div class="marquee" data-duration="17000" data-gap="10" data-duplicated="true">
                    <h2>The best fashion store can deliver</h2>
                </div>
                <div class="marquee2" data-duration="17000" data-gap="37" data-duplicated="true">
                    <h2>The best fashion store can deliver</h2>
                </div>
            </section>
        @endsection
