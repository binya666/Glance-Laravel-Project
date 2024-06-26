@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">faq</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="faqs-section-page">
        <div class="container">
            <div class="sec-title mw-100">
                <h2>frequently asked qustions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel turpis non, vulputate luctus ex. Phasellus pharetra ut dolor ac rutrum. Curabitur molestie nec mi in congue. Nam luctus ante quis urna molestie.</p>
            </div><!--sec-title-->
                <div class="accordion" id="accordionExample">
                    @foreach ($faqs as $faqs)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ $faqs->faq_title }}
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ $faqs->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
      <!--faqs-section-->

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


