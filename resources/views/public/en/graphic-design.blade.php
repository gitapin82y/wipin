@extends('layouts.public')

@section('title', 'Affordable Quality Graphic Design Services - Wipin')

@section('meta_description', 'Affordable quality graphic design services including logo design, banner design, poster design and much more, able to meet all your business needs')

@section('meta_keywords', 'wipin, graphic design services, affordable graphic design, affordable quality graphic design')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Affordable Quality Graphic Design Services - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/graphic-design-services')

@section('meta_og_description', 'Affordable quality graphic design services including logo design, banner design, poster design and much more, able to meet all your business needs')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Affordable Quality Graphic Design Services - Wipin')

@section('meta_twitter_description', 'Affordable quality graphic design services including logo design, banner design, poster design and much more, able to meet all your business needs')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-dan-joki-tugas-it-murah-wipin.png'))

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
              <span class="gradient">Graphic Design</span> Services
            </h1>
            <p class="mt-4 mb-5">
              Affordable quality graphic design services including logo design, banner design, poster design and much more, able to meet all your business needs
            </p>
            <a href="#pricelist" class="btn-main">Use Our Services</a>
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
          <img src="{{asset('assets/images/jasa-desain-grafis.png')}}" width="811" height="749" class="headerImage" alt="wipin graphic design services provider" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- start body -->

  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="wipin design services" />
      <div class="row col-12 m-0">
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
          <p class="title-main mb-0 title">Wipin Benefits</p>
          <h2 class="mt-1">
            Why Choose Wipin<br />For Your Graphic Design Services?
          </h2>
          <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0"
            alt="advantages of using affordable web services at wipin" />

        </div>
        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <div class="card-item section-dark-color1">
            <h3>Free Consultation</h3>
            <p>
              If you're still confused, don't hesitate to consult with us about your project to achieve the best results
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Friendly Pricing</h3>
            <p>
              Don't worry about the price - you can negotiate first and you can pay 50% upfront if you don't have enough budget
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Trusted</h3>
            <p>
              The professionalism of our designers has earned the trust of our customers, so there's no need to doubt
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Service Pricing</p>
          <h2 class="mt-1">
            Graphic Design Services at Street Prices<br>
            with Five-Star Quality
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Logo Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 200,000</span></p>
          
          <a href="logo-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Banner Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="banner-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Packaging Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 200,000</span></p>
          
          <a href="packaging-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Poster Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="poster-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>T-shirt Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="t-shirt-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Brochure Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="brochure-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Certificate Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 100,000</span></p>
          
          <a href="certificate-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>

        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Instagram Feed Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
     
          <a href="instagram-feed-design#pricelist" class="btn-main mt-4">More Details</a>
        </div>

        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Envelope Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 100,000</span></p>
          
          <a href="envelope-design#pricelist" class="btn-main mt-4">More Details</a>
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
            Clients Are Very Satisfied<br />With Design Results
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
              Thanks for providing the best quality banner design for my business. Wipin is truly the best!
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
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="wipin faq" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Common Questions <br> About Graphic Design Services
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