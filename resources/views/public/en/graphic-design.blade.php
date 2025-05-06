@extends('layouts.public')

@section('title', 'Professional Graphic Design Services - Wipin')

@section('meta_description', 'High-quality graphic design services including logo design, banner design, poster design, and more. Our professional designers deliver exceptional results for your business.')

@section('meta_keywords', 'graphic design services, logo design, banner design, poster design, packaging design, brochure design, wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Professional Graphic Design Services - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/en/graphic-design')

@section('meta_og_description', 'High-quality graphic design services including logo design, banner design, poster design, and more. Our professional designers deliver exceptional results for your business.')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Professional Graphic Design Services - Wipin')

@section('meta_twitter_description', 'High-quality graphic design services including logo design, banner design, poster design, and more. Our professional designers deliver exceptional results for your business.')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-dan-joki-tugas-it-murah-wipin.png'))

@push('style')
<!-- Add CSS if needed -->
@endpush

@section('content')
<section id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 align-self-center">
          <div class="col-12 main-header pt-2 text-center text-lg-start">
            <h1 class="title">
              Professional
              <span class="gradient">Graphic Design</span> Services
            </h1>
            <p class="mt-4 mb-5">
              High-quality graphic design services including logo design, banner design, poster design, and more. Our professional designers deliver exceptional results for your business needs.
            </p>
            <a href="#pricelist" class="btn-main">View Our Services</a>
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
          <img src="{{ asset('assets/images/jasa-desain-grafis.png') }}" width="811" height="749" class="headerImage" alt="wipin graphic design services provider" />
        </div>
      </div>
    </div>
  </section>

  <section id="whyUs">
    <div class="container">
      <img src="{{ asset('assets/images/backgroundDesain.png') }}" class="backgroundDesain h-auto" width="600" height="600"
        alt="design services wipin" />
      <div class="row col-12 m-0">
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
          <p class="title-main mb-0 title">Wipin Benefits</p>
          <h2 class="mt-1">
            Why Choose Wipin<br />For Graphic Design Services?
          </h2>
          <img src="{{ asset('assets/images/whyUs.png') }}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0"
            alt="advantages of using affordable design services at wipin" />
        </div>
        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <div class="card-item section-dark-color1">
            <h3>Free Consultation</h3>
            <p>
              If you're unsure, don't hesitate to consult with us about your project to achieve the best possible outcome
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Affordable Pricing</h3>
            <p>
              Don't worry about the cost - you can negotiate with us and pay just 50% upfront if you're on a tight budget
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Trusted Service</h3>
            <p>
              The professionalism of our designers has earned our customers' trust, so you can rely on us without hesitation
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
            Graphic Design Services with<br>
            Five-Star Quality at Affordable Prices
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Logo Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 200,000</span></p>
          
          <a href="{{ route('show.en', 'logo-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Banner Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="{{ route('show.en', 'banner-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Packaging Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 200,000</span></p>
          
          <a href="{{ route('show.en', 'packaging-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Poster Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="{{ route('show.en', 'poster-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>T-Shirt Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="{{ route('show.en', 'tshirt-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Brochure Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
          
          <a href="{{ route('show.en', 'brochure-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Certificate Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 100,000</span></p>
          
          <a href="{{ route('show.en', 'certificate-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>

        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Instagram Feed Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 150,000</span></p>
     
          <a href="{{ route('show.en', 'instagram-feed-design') }}#pricelist" class="btn-main mt-4">More Details</a>
        </div>

        <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
          <h3>Envelope Design</h3>
          <p class="fw-bold mt-3 mb-0">Starting from</p>
          <p><span>Rp 100,000</span></p>
          
          <a href="{{ route('show.en', 'envelope-design') }}#pricelist" class="btn-main mt-4">More Details</a>
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
            Clients Are Very Satisfied With<br />Our Design Results
          </h2>
        </div>
      </div>
      <div class="row owl-carousel owl-theme">
        <div class="card-item section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{ asset('assets/images/avatar1.svg') }}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Yuni</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I've never been disappointed ordering designs here, because the results always exceed my expectations.
            </p>
            <img src="{{ asset('assets/icons/stars.svg') }}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{ asset('assets/images/avatar2.svg') }}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Saputra</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Minimalist design exactly as I wanted and they even included a bonus mockup, thanks so much, amazing work!
            </p>
            <img src="{{ asset('assets/icons/stars.svg') }}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{ asset('assets/images/avatar3.svg') }}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Wulan</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I could choose the design I liked and they completed it in just one day. Thanks Wipin!
            </p>
            <img src="{{ asset('assets/icons/stars.svg') }}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{ asset('assets/images/avatar4.svg') }}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Diana</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Thank you for providing the best quality banner design for my business, Wipin is truly the best!
            </p>
            <img src="{{ asset('assets/icons/stars.svg') }}" width="300" height="100" class="star" alt="wipin testimonial review" />
          </div>
        </div>
      </div>
      <div class="justify-content-center d-flex">
        <a href="https://g.co/kgs/PP8cZD" target="_blank" class="btn-main mt-3">Add Testimonial</a>
     </div>
      <img src="{{ asset('assets/images/testimoniDesain2.png') }}" class="design1" alt="testimonial design" />
      <img src="{{ asset('assets/images/testimoniDesain1.png') }}" class="design2" alt="testimonial design" />
    </div>
  </section>

  <section id="faq">
    <div class="container">
      <img src="{{ asset('assets/images/backgroundDesain.png') }}" class="backgroundDesain h-auto" width="600" height="600"
        alt="wipin faq" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Frequently Asked Questions <br> About Graphic Design Services
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
                    Click <a href="#pricelist">Use Service</a> and click the button for each package. You'll be directed to WhatsApp chat for discussion, payment (deposit or full payment), processing, revisions & finishing.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                  What is your payment system?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We accept payments via OVO, Dana, ShopeePay, Mandiri, and BRI. <br>
                    There are 2 payment options: <br>
                    - Full payment <br>
                    - 50% deposit, with the remaining amount to be transferred when the project is completed
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
                  What if I need revisions after the design is complete?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We provide free revisions according to your selected package. Additional revisions beyond the package limit will incur an extra cost per revision.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  How long does the design process take?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    The fastest delivery is 1 day, but it depends on the design complexity and could take up to 2-3 days.
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