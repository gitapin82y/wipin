@extends('layouts.public')

@section('title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_description', 'Affordable quality website development services with professional developers able to meet your business or personal website needs and requirements')

@section('meta_keywords', 'wipin, website development services, affordable website development, business websites')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/website-development-services')

@section('meta_og_description', 'Affordable quality website development services with professional developers able to meet your business or personal website needs and requirements')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_twitter_description', 'Affordable quality website development services with professional developers able to meet your business or personal website needs and requirements')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-dan-joki-tugas-it-murah-wipin.png'))

@push('style')
<style>
    #pricelist .card-item {
      margin: 20px 0px;
      border-radius: 0;
      border: 1px solid #ffa34d2b; 
      padding-bottom: 100px;
    }
    #pricelist .card-item li::before{
      display: none;
    }
    .btn-bottom{
      bottom: 0px;
      position: absolute;
      width: 80%;
      margin: 30px 0px;
    }
    #whyUs .card-item {
    margin: 10px 10px;
    width: 20rem !important;
    max-width: 100%;
    }
    @media (max-width: 768px) {
      #whyUs .card-item {
        width: 90% !important;
    }
    #whyUs .card-item h1{
      font-size: 20px;
    }
  }
  </style>
@endpush

@section('content')
  <!-- start header -->
  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="col-12 main-header pt-2 text-center text-lg-start">
            <h1 class="title">
              Affordable
              <span class="gradient">Website Development</span> Services
            </h1>
            <p class="mt-4 mb-5">
              Affordable quality website development services with professional developers able to meet your business or personal website needs and requirements
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
                <p>Projects<br />Completed</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 p-0">
          <img src="{{asset('assets/images/jasa-pembuatan-website.png')}}" width="811" height="749" class="headerImage" alt="wipin website development services" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

<section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="wipin design services" />
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-up">
          <p class="title-main title mb-0">Wipin Benefits</p>
          <h2 class="mt-1">
            Why Choose Wipin<br />For Your Website Development?
          </h2>
        </div>
        </div>
        <div class="row justify-content-around">
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Free Consultation</h3>
            <p>
              If you're still confused, don't hesitate to consult with us about your project to achieve the best results
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Friendly Pricing</h3>
            <p>
              Don't worry about the price - you can negotiate first and you can pay 50% upfront if you don't have enough budget
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Trusted</h3>
            <p>
              Wipin has received hundreds of 5/5 star reviews on Google Business and has hundreds of portfolios you can view
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Faster Websites</h3>
            <p>
              A good website loading time is no more than 2 seconds, and Wipin is able to optimize website performance
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Free Domain</h3>
            <p>
              You can request a domain name and don't need to spend more than 100k just to buy a domain
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Free Hosting</h3>
            <p>
              You don't need to spend more than 500k just to buy your own hosting, we provide free hosting
            </p>
          </div>
      </div>
    </div>
  </section>

    <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Website Service Pricing</p>
          <h2 class="my-2">
            Most Affordable Website Development Services
          </h2>
          <p class="mt-3">
            Adjust the website development service package prices below to your budget and needs. <br> You can also consult with Wipin's admin for free for the right offers and solutions. <a href="https://api.whatsapp.com/send?phone=6285198330157" class="title-main" target="_blank">Consult Now</a>
            </p>   
            
            <p class="mt-3">
              Small, Medium, and Premium packages are built using WordPress CMS technology, with a minimum website active period of 1 year.
            </p>        

        </div>
      </div>
      <div class="row justify-content-around">
        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3" data-aos="fade-up">
          <h3>Small Package</h3>
          <p class="fw-light">Perfect for personal websites, portfolios, landing pages</p>
          <p class="fw-bold m-0">Package Price</p>
          <p><span>Rp 50.000 </span><small>/Month</small></p>
          <ul class="p-0">
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 1 Page <small class="fw-light">(additional? 100k per page)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Free Google Ads</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 5 Revisions</li>
                        <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Speed Optimization <small class="fw-light">(high perform)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Free Mockup Design</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Hosting <small class="fw-light">(without cpanel login access)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Business Email <small class="fw-light">(name@domain.com)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Responsive Web <small class="fw-light">(design adapts to device)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Blog Feature <small class="fw-light">(Free 4 Articles)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Integration Features <small class="fw-light">(whatsapp, google maps)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> SEO Friendly</li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Google Analytics <small class="fw-light">(website visitor analysis)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Lifetime Warranty</li>
          </ul>
          <p class="fw-light mt-4 desc">Minimum active period 1 year, renewal only 400k per year</p>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Website%20Development%20Small%20Package
        " class="btn-main btn-bottom" target="_blank">Check Price/Year</a>
        </div>

        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3" data-aos="fade-up">
          <h3>Medium Package</h3>
          <p class="fw-light">Perfect for medium businesses such as promotional websites, small business websites</p>
          <p class="fw-bold m-0 text-warning">20% Discount</p>
          <p class="line-through mb-0">Rp 100.000 <small>/Month</small></p>
          <p><span>Rp 80.000 </span><small>/Month</small></p>
          <ul class="p-0">
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 4 Pages <small class="fw-light">(additional? 100k per page)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Free Google Ads</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 10 Revisions</li>
                         <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Speed Optimization <small class="fw-light blink text-warning">(2x faster)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Free Mockup Design</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Hosting <small class="fw-light">(without cpanel login access)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 1 Business Email <small class="fw-light blink text-warning">(name@domain.com)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Responsive Web <small class="fw-light">(design adapts to device)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Blog Feature <small class="fw-light">(Free 4 Articles)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Integration Features <small class="fw-light">(whatsapp, google maps, email form)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> SEO Friendly</li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="cross"> Google Analytics <small class="fw-light">(website visitor analysis)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Lifetime Warranty</li>
          </ul>
          <p class="fw-light mt-4 desc">Minimum active period 1 year, renewal only 400k per year</p>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Website%20Development%20Medium%20Package
        " class="btn-main btn-bottom" target="_blank">Check Price/Year</a>
        </div>

        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3"  data-aos="fade-up">
          <h3>Premium Package</h3>
          <p class="fw-light">Perfect for professional businesses, e-commerce, company profiles, news portals</p>
            <p class="fw-bold m-0 text-warning">32% Discount 
              <small class="blink text-warning">( BESTSELLER )</small>
            </p>
            <p class="line-through mb-0">Rp 220.000 <small>/Month</small></p>
            <p><span>Rp 150.000 </span><small>/Month</small></p>
            <ul class="p-0">
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 8 Pages <small class="fw-light">(additional? 100k per page)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Google Ads</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 99 Revisions</li>
                           <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Speed Optimization <small class="fw-light blink text-warning">(10x faster)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Mockup Design</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Hosting <small class="fw-light blink text-warning">(with cpanel login access)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 5 Business Emails <small class="fw-light blink text-warning">(name@domain.com)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Responsive Web <small class="fw-light">(design adapts to device)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Blog Feature <small class="fw-light blink text-warning">(Free 4 Articles)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> SEO Friendly</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Integration Features <small class="fw-light">(whatsapp, google maps, email form, language translator)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Google Analytics <small class="fw-light">(website visitor analysis)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Lifetime Warranty</li>
            </ul>
            <p class="fw-light mt-4 desc">Minimum active period 1 year, renewal only 400k per year</p>
            <a href="
            https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Website%20Development%20Premium%20Package
          " class="btn-main btn-bottom" target="_blank">Check Price/Year</a>
          </div>
     
          <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3"  data-aos="fade-up">
            <h3>Business Package</h3>
            <p class="fw-light">Perfect for websites with advanced features and more website menus</p>
              <p class="fw-bold m-0">Package Price</p>
              <p><span>Rp 250.000 </span><small>/Month</small></p>
              <ul class="p-0">
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 14 Pages <small class="fw-light">(additional? 100k per page)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Google Ads</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 99 Revisions</li>
                             <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Speed Optimization <small class="fw-light blink text-warning">(10x faster)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Mockup Design</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free Hosting <small class="fw-light blink text-warning">(with cpanel login access)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Free 5 Business Emails <small class="fw-light blink text-warning">(name@domain.com)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Responsive Web <small class="fw-light">(design adapts to device)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Blog Feature <small class="fw-light blink text-warning">(Free 8 Articles)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> SEO Friendly</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Integration Features <small class="fw-light">(whatsapp, google maps, email form, language translator, live chat)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Google Analytics <small class="fw-light">(website visitor analysis)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="check"> Lifetime Warranty</li>
              </ul>
              <p class="fw-light mt-4 desc">Minimum active period 1 year, renewal only 400k per year</p>
              <a href="
              https://api.whatsapp.com/send?phone=6285198330157&text=Hello%20Admin%20I%20Want%20To%20Order%20Website%20Development%20Business%20Package
            " class="btn-main btn-bottom" target="_blank">Check Price/Year</a>
            </div>    
      </div>
        <p class="mt-3 text-center">
          If there are some terms you don't understand
          <a href="#faq" class="title-main">FAQ</a> Can help you
      </p>  
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="wipin portfolio" />
       <div class="row mb-5">
        <div class="col-md-8 col-12">
          <div class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left">
            <p class="title-main mb-0 title">Portfolio</p>
            <h2 class="mt-1">
              Wipin Projects from Various Industries
            </h2>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="justify-content-md-end justify-content-center d-flex">
            <a href="/en/portfolio" class="btn-main mt-3">View All</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center px-3 px-md-0">
      <div class="owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350" alt="company profile website development service">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350" alt="dashboard website design service">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
            alt="library website development service">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350" alt="culinary website development service">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350" alt="travel website development service">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350" alt="starbucks web design service">
        </div>
      </div>
    </div>
  </section>

  <section id="penghargaan">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="awards background design" />
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main title mb-0">3 Latest Awards</p>
          <h2 class="mt-1">
            Certificates Achieved by Wipin<br />
            At the National Level
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara1">
          <img src="{{asset('assets/icons/medal1.svg')}}" width="100" height="50" alt="1st place web design award wipin" />
          <h3 class="my-3">1st Place Web Design</h3>
          <p>
            Organized by Yogyakarta Technology University with the contest theme "Diversity of the Archipelago" on July 5th..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara2">
          <img src="{{asset('assets/icons/medal3.svg')}}" width="100" height="50" alt="ui ux design award wipin" />
          <h3 class="my-3">2nd Place UI UX Design</h3>
          <p>
            Organized by Lumintulogic, an information technology company in Yogyakarta with a redesign UI/UX web company profile theme..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara4">
          <img src="{{asset('assets/icons/medal2.svg')}}" width="100" height="50" alt="web design award wipin" />
          <h3 class="my-3">Favorite Web Award</h3>
          <p>
            Organized by Bali State Polytechnic in the INTECH FEST (Information and Technology Festival) activity..
          </p>
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
            Clients Are Very Satisfied<br />With Website Results
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
              <h3>Aditya</h3>
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
              <img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar" alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Salsabila</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I could choose the design I liked and my portfolio website was finished so quickly, in just one day. Thanks Wipin!
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
              <h3>Andre Kurniawan</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I ordered a website because I didn't understand anything, so I consulted first and was given the best advice
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
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600" alt="wipin faq" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main title mb-0">FAQ</p>
          <h2 class="mt-1">
            Common Questions <br> About Website Development Services
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="accordion accordion-flush row" id="accordionFlushExample">
          <div class="col-12 col-md-6">
            <!-- Common Questions -->
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  How do I use Wipin's services?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Click <a href="#pricelist">Use Our Services</a> and click the button for each package, which will direct you to WhatsApp chat. From there, discussion, payment (deposit/full payment), the process, revisions, and finishing will be done according to the agreement.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                  What about the payment system?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We accept payments through Paypal, OVO, Dana, ShopeePay, Mandiri, and BRI. Payment can be made with two options: <br>
                    - Full payment <br>
                    - 50% deposit and the remaining can be paid when the project is completed.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                  What if the project is completed but requires revisions?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We provide free revisions according to the selected package. If revisions exceed the specified limit, there will be an additional fee per revision.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  How long does project completion take?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    The work can be completed as quickly as 1 day, but depends on the difficulty level of the project. Usually, projects are completed within 2-4 days.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="true" aria-controls="flush-collapse5">
                  What Website Development Technology is Used?
                </button>
              </h2>
              <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    For Small, Medium, and Premium Packages, we use WordPress CMS to make the creation process quick and facilitate SEO on each website page. For custom websites that need to manage data, we use Laravel, React, Bootstrap, or Tailwind technologies, depending on your system requirements. You can also request other technologies.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading6">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="true" aria-controls="flush-collapse6">
                  What is a Domain?
                </button>
              </h2>
              <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    A domain is the address name used to access your website on the internet, such as `www.example.com`. We provide domains with various extensions according to the selected package.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading100">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse100" aria-expanded="true" aria-controls="flush-collapse100">
                  What is Hosting?
                </button>
              </h2>
              <div id="flush-collapse100" class="accordion-collapse collapse" aria-labelledby="flush-heading100" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Hosting is a service that provides space on a server to store your website files and data so they can be accessed online. We offer hosting in packages, with or without access to cPanel login.
                  </p>
                </div>
              </div>
            </div>
  
          </div>
  
          <div class="col-12 col-md-6">
            <!-- Term Explanations -->
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading7">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="true" aria-controls="flush-collapse7">
                  What is a Business Email?
                </button>
              </h2>
              <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    A business email is an email address that uses your company domain, for example `name@yourdomain.com`. This gives a professional impression and increases customer trust.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading8">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="true" aria-controls="flush-collapse8">
                  What is a Responsive Web?
                </button>
              </h2>
              <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Responsive web is a website design that adjusts its display and layout to fit various screen sizes and devices, such as desktops, tablets, and phones. This ensures an optimal user experience on all devices.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading9">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="true" aria-controls="flush-collapse9">
                  What is SSL Security?
                </button>
              </h2>
              <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    SSL (Secure Sockets Layer) is a security protocol that encrypts data between the server and visitors' browsers to protect sensitive information. Your website will be marked with a padlock icon in the browser's address bar.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading10">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="true" aria-controls="flush-collapse10">
                  What is SEO?
                </button>
              </h2>
              <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    SEO (Search Engine Optimization) is the process of optimizing your website to appear in search engine results like Google. This includes keyword settings, content, and other techniques to increase your website's visibility.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading11">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="true" aria-controls="flush-collapse11">
                  What is Google Analytics?
                </button>
              </h2>
              <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Google Analytics is a web analysis tool that provides data about your website visitors, including the number of visitors, visit duration, and traffic sources. This helps you understand visitor behavior and measure website performance.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading12">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="true" aria-controls="flush-collapse12">
                  What is a Mockup Design?
                </button>
              </h2>
              <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    A mockup design is a visual representation of your website when viewed on mobile and desktop. We provide the mockup design when the website is completed, so you can publish it on social media as a story or post showing that you now have a website using the mockup design we provide.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading13">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="true" aria-controls="flush-collapse13">
                  What is Google Ads?
                </button>
              </h2>
              <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Google Ads is Google's paid advertising platform that allows you to display ads in Google search results and on other websites. Ads can be customized based on keywords, location, and demographics to reach the right audience.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="modal fade" id="juara1" tabindex="-1" aria-labelledby="juara1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">1st Place Web Design</h3>
          <button type="button" aria-label="close modal" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Organized by Yogyakarta Technology University with the contest theme "Diversity of the Archipelago" from July 5th to July 26th and announced on July 30th, 2021, we successfully won 1st place at the national level.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="juara2" tabindex="-1" aria-labelledby="juara2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">2nd Place UI UX Design</h3>
          <button type="button" class="btn-close" aria-label="close modal" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Organized by Lumintulogic, an information technology company in Yogyakarta, with the theme of redesigning the UI/UX web company profile of Lumintulogic. The competition ran from January 6th to January 20th, and on January 23rd, 2022, we were announced as the 2nd place winner at the national level.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="juara4" tabindex="-1" aria-labelledby="juara4" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">Favorite Web Award</h3>
          <button type="button" class="btn-close" aria-label="close modal" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Organized by Bali State Polytechnic in the INTECH FEST (Information and Technology Festival) 2020 activity with the theme "Information and Technology can Support Future Life", and we successfully won the Favorite Web Design Competition Award at the national level.</p>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script>
    $('.show-popup a').click(function(e) {
  e.preventDefault();

  // Get package name and monthly price
  var paketName = $(this).parent().find('h3').text();
  var priceElement = $(this).parent().find('span');
  var priceString = priceElement.text().replace('.', '').replace('Rp ', '');
  var pricePerMonth = parseFloat(priceString);

  // Calculate total cost per year
  var totalCost = pricePerMonth * 12;

  Swal.fire({
    html: `<strong>${paketName}</strong><br>
           Monthly price: Rp ${pricePerMonth.toLocaleString('id-ID')}<br>
           Total cost (12 months): Rp ${totalCost.toLocaleString('id-ID')}`,
    icon: 'success',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Continue to WhatsApp',
    cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          // Continue to WhatsApp link if confirmed
          window.location.href = $(this).attr('href');
        }
      });
    });
  </script>
@endpush