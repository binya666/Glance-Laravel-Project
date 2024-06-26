@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

            <section class="page-banner">
                <div class="container">
                    <div class="page-banner-content text-center">
                        <h2 class="page-title">About us</h2>
                        <p>Porem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
            </section>
            <section class="page-content">
                <div class="container-fluid">
                    <div class="row align-items-end about-top">
                        <div class="col-lg-6 text-column">
                            <h2><span>GLANCE</span> Themes are compatible</h2>
                        </div>
                        <div class="col-lg-6 text-para">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                                pharetra vel turpis non, vulputate luctus ex. Phasellus pharetra
                                ut dolor ac rutrum. Curabitur molestie nec mi in congue. Nam
                                luctus ante quis urna molestie, ut venenatis diam sagittis. Nam
                                ligula velit,
                            </p>
                        </div>
                    </div>
                    <div class="full-image">
                        <img src="frontend/images/resource/about-img1.jpg" alt="" />
                    </div>
                    <div class="row images-row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                                    <div class="image">
                                        <img src="frontend/images/resource/abt1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                                    <div class="image">
                                        <img src="frontend/images/resource/abt2.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                                    <div class="image">
                                        <img src="frontend/images/resource/abt3.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 title-column">
                            <div class="inner-column">
                                <h2>
                                    <span>GLANCE</span> Themes are compatible with major plugins
                                    and much more!
                                </h2>
                                <p>
                                    Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                                    facilisis quam, a ornare justo risus et felis. Morbi bibendum
                                    dapibus dapibus. Morbi euismod, leo sed
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="about-bottom">
                        <h2>
                            GLANCE Themes are compatible with major plugins and much more!
                        </h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris vitae eros venenatis tellus faucibus tincidunt.
                                    Pellentesque in neque magna. Integer placerat purus nec
                                    rhoncus convallis. Nam et sodales mauris. Nulla gravida justo
                                    tellus, ac faucibus dui placerat quis. Donec cursus a lacus id
                                    dictum. Nulla eget tincidunt ligula, eget vulputate elit.
                                    Morbi hendrerit, orci at dapibus auctor, nunc lacus pretium
                                    velit, eu condimentum odio risus non magna. Duis sit amet nisi
                                    odio. Vivamus non facilisis sapien.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris vitae eros venenatis tellus faucibus tincidunt.
                                    Pellentesque in neque magna. Integer placerat purus nec
                                    rhoncus convallis. Nam et sodales mauris. Nulla gravida justo
                                    tellus, ac faucibus dui placerat quis. Donec cursus a lacus id
                                    dictum. Nulla eget tincidunt ligula, eget vulputate elit.
                                    Morbi hendrerit, orci at dapibus auctor, nunc lacus pretium
                                    velit, eu condimentum odio risus non magna. Duis sit amet nisi
                                    odio. Vivamus non facilisis sapien.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--page-content-->
            <!--sec-title-->
            <section class="team-section-page">
                <div class="container">
                    <div class="sec-title">
                        <h2>Glance team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas
                            iaculis. Donec nibh enim, pharetra vel turpis</p>
                    </div><!--sec-title-->
                    <div class="row teams">
                        @foreach ($member as $member)
                        <div class="col-lg-2 team-column">
                            <div class="inner-column">
                                <div class="team-img-v2">
                                    <img src="{{ url($member->imgpath) }}" alt="" />
                                </div>
                                <div class="team-info-v2">
                                    <h3>{{ $member->name }}</h3>
                                    <span>{{ $member->designation }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--team-section-->

            <section class="marquee-section bt-0 pb-0">
                <div class="marquee" data-duration="17000" data-gap="10" data-duplicated="true">
                    <h2>The best fashion store can deliver</h2>
                </div>
                <div class="marquee2" data-duration="17000" data-gap="37" data-duplicated="true">
                    <h2>The best fashion store can deliver</h2>
                </div>
            </section>
        @endsection
