@extends('layouts.public')

@section('title', 'Affordable Quality Instagram Feed Design Services')

@section('meta_description', 'Affordable quality Instagram feed design services able to meet your business or personal Instagram feed design needs and requirements')

@section('meta_keywords', 'instagram feed design services, affordable instagram feed design, affordable quality instagram feed design, business instagram feed design, wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Affordable Quality Instagram Feed Design Services')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/instagram-feed-design-services')

@section('meta_og_description', 'Affordable quality Instagram feed design services able to meet your business or personal Instagram feed design needs and requirements')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Affordable Quality Instagram Feed Design Services')

@section('meta_twitter_description', 'Affordable quality Instagram feed design services able to meet your business or personal Instagram feed design needs and requirements')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@push('style')
<style>
    #pricelist .card-item {
      margin: 20px 10px;
    }
    #pricelist .card-item li::before{
      display: none;
    }
  
  </style>
@endpush

@section('content')
  <!-- start header -->
  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 align-self-center">
          <div class="col-12 main-header pt-2 text-center text-lg-start">
            <h1 class="title">
              Affordable
              <span class="gradient">Instagram Feed Design</span> Services
            </h1>
            <p class="mt-4 mb-5">
              Affordable quality Instagram feed design services able to meet your business or personal Instagram feed design needs and requirements
            </p>
            <a href="#pricelist" class="btn-main">View Design Packages</a>
          </div>
          <div class="col-12 text-center text-lg-start">
            <div class="d-flex">
              <div class="col-6">
                <h2 class="number title">389</h2>
                <p>Our<br />Customers</p>
              </div>
              <div class="col-6">
                <h2 class="number title">413</h2>
                <p>Designs<br />Completed</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 p-0">
          <img src="{{asset('assets/images/desain-grafis-detail.png')}}" width="811" height="749" class="headerImage" alt="Instagram Feed Design Services" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- start body -->

  <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Service Pricing</p>
          <h2 class="mt-1">
            Instagram Feed Design Services <br> at Street Prices
            with Five-Star Quality
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="card-item section-dark-color1 col-12 col-md-5" data-aos="fade-up">
          <h3 class="f-28 mb-2">Package A</h3>
          <p class="fw-bold mb-0">Starting from</p>
             <p><span>$18.75</span></p>
          <ul class="p-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">3 feed designs</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">2 Revisions <small class="fw-light">(1 minor & 1 major)</small></li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">1-2 Days</li>
          <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross">Master File</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">Export JPG / PNG</li>
          </ul>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Instagram%20Feed%20Design%20Services%20Package%20A
        " class="btn-main mt-4" target="_blank">Order Now</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-5" data-aos="fade-up">
          <h3 class="f-28 mb-2">Package B</h3>
          <p class="fw-bold mb-0">Starting from</p>

           <p><span>$37.50</span></p>
          <ul class="p-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">6 feed designs</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">3 Revisions <small class="fw-light">(2 minor & 1 major)</small></li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">1-2 Days</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">Master File</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check">Export JPG / PNG</li>
          </ul>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Instagram%20Feed%20Design%20Services%20Package%20B
        " class="btn-main mt-4" target="_blank">Order Now</a>
        </div>
      </div>
    </div>
  </section>


  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain1 h-auto" width="600" height="600"
        alt="wipin design services" />
      <div class="row col-12 m-0">
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
          <p class="title-main mb-0 title">Design Process</p>
          <h2 class="mt-1">
            Instagram Feed Design with Fast Process<br /> and Premium Quality
          </h2>
          <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0"
            alt="advantages of using affordable web services at wipin" />

        </div>
        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <div class="card-item section-dark-color1">
            <h3>Design Consultation</h3>
            <p>
              Consultation regarding your Instagram feed needs and design requirements
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Payment</h3>
            <p>
              We will process your Instagram feed after payment is completed. There are 2 payment methods: 30% deposit or full payment
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Design Process</h3>
            <p>
              We will process your Instagram feed design according to the design concept
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Final Design</h3>
            <p>
              You can request design revisions according to the revision limit of the design package you choose
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="testimoni">
    <div class="container section-dark-color">
      <div class="row">
        <div class="text-center text-md-start mb-5">
          <p class="title-main mb-0 title">Google Business Testimonials</p>
          <h2 class="mt-1">
            Clients Are Very Satisfied<br />With Instagram Feed Design Results
          </h2>
        </div>
      </div>
      <div class="row owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar1.svg')}}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Yuni</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Never disappointed ordering designs here, because the results are always beyond expectations - really excellent.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar2.svg')}}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Saputra</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Minimalist design as requested, and even got a bonus mockup too. Thanks, it's really awesome!
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Wulan</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I could choose the design I liked and it was completed so quickly, in just one day. Thanks Wipin!
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar4.svg')}}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Diana</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Thanks for providing the best quality design for my business. Wipin is truly the best!
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
      </div>
      <div class="justify-content-center d-flex">
        <a href="https://g.co/kgs/PP8cZD" target="_blank" class="btn-main mt-3">Add Testimonial</a>
     </div>
      <img src="{{asset('assets/images/testimoniDesain2.png')}}" class="design1" alt="testimonial design" />
      <img src="{{asset('assets/images/testimoniDesain1.png')}}" class="design2" alt="testimonial design" />
    </div>
  </section>

  <section id="faq">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain2 h-auto" width="600" height="600"
        alt="wipin faq" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Common Questions <br> About Instagram Feed Design Services
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">

        <div class="accordion accordion-flush row" id="accordionFlushExample">
          <div class="col-12 col-md-6">

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  How do I use Wipin's services?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Click <a href="#pricelist">Use Our Services</a> and click the button for each package, which will direct you to WhatsApp chat. From there, discussion, payment (deposit/full payment), the process, revisions, and finishing will be done.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                  What about the payment system?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We accept payments through OVO, Dana, ShopeePay, Mandiri, and BRI. <br>
                    Payment can be made with two options: <br>
                    - Full payment <br>
                    - 50% deposit and the remaining can be paid when the project is completed
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                  What if the design is completed but requires revisions?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We provide free revisions according to the selected package. If revisions exceed the specified limit, there will be an additional fee per revision.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  How long does design completion take?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    As quick as 1 day, but depending on the complexity of the design, it can take up to 2-3 days
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

@push('script')
<!-- Add JavaScript if needed -->
@endpush