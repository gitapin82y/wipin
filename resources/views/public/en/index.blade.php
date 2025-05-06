@extends('layouts.public')
 
@section('title', 'Affordable Website and Design Services - Wipin')
@section('meta_description', 'Professional UI/UX design, website development, and graphic design services tailored to your business needs.')
@section('meta_keywords', 'design services, website development, logo design, branding, UI/UX design')
@section('meta_author', 'Wipin Team')

@section('meta_og_title', 'Design and Website Services')
@section('meta_og_description', 'Get professional design services from the expert Wipin team.')
@section('meta_url', url('/services'))
@section('meta_image', asset('assets/images/services-banner.png'))

@section('meta_twitter_title', 'Design Services - Wipin')
@section('meta_twitter_description', 'The best design and website solutions for your business.')
@section('meta_twitter_image', asset('assets/images/services-banner.png'))

@push('style')

@endpush


@section('content')
  <!-- start header -->
  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="col-12 main-header pt-2 text-center text-lg-start">
            <h1 class="title">
              Affordable Website and Design
              <span class="gradient">Services</span>
            </h1>
            <p class="mt-4 mb-5">
              Professional website development, UI/UX design, and graphic design services at affordable prices, meeting both business and personal needs
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
          <img src="{{ asset('assets/images/jasa-website-dan-desain.png') }}" width="811" height="749" class="headerImage"
            alt="Wipin - website development, UI/UX design and graphic design services" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- start body -->
  <section id="layananKami">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
          <p class="title-main mb-0 title">Wipin Services</p>
          <h2 class="mt-1">
            3 Wipin Services Ready<br>To Fulfill Your Vision
          </h2>
          <img src="{{asset('assets/images/services.png')}}" width="500" height="500"
            class="w-100 pt-4 pt-md-4 h-auto servicesImage text-center" alt="wipin services" />
          <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain1 h-auto w-100"
            width="600" height="600" alt="wipin design services" />
        </div>

        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <a href="{{ route('show.en', 'website-development') }}">
          <div class="card-item section-dark-color1">
            <h3>Website Development</h3>
            <p>
              Experienced developers creating various web designs with the best systems
            </p>
            <p class="title-main fw-light">Read More</p>
          </div>
          </a>
          <a href="{{ route('show.en', 'ui-ux-design') }}">
            <div class="card-item section-dark-color1">
              <h3>UI UX Design</h3>
              <p>
                We have experience creating UI UX designs for both mobile and web platforms
              </p>
              <p class="title-main fw-light">Read More</p>
            </div>
          </a>
          <a href="{{ route('show.en', 'graphic-design') }}">
            <div class="card-item section-dark-color1">
              <h3>Graphic Design</h3>
              <p>
                Professional designers providing the highest quality design services
              </p>
              <p class="title-main fw-light">Read More</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="wipin design services" />
      <div class="row col-12 m-0 flex-column-reverse flex-md-row">

        <div class="col-md-6 col-12" data-aos="fade-up-right">
          <div class="card-item section-dark-color1">
            <h3>Free Consultation</h3>
            <p>
              If you're unsure about your project, don't hesitate to consult with us to achieve the best results for your goals
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Friendly Pricing</h3>
            <p>
              Don't worry about the price – you can negotiate and pay 50% upfront if you don't have enough budget
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Trusted</h3>
            <p>
              The professionalism of our developers and designers has earned our customers' trust, so you can rely on us without doubt
            </p>
          </div>
        </div>
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-left">
          <p class="title-main mb-0 title">Wipin Benefits</p>
          <h2 class="mt-1">
            Why Choose Wipin for<br />Web Development and Design Services?
          </h2>
          <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0" alt="benefits of using wipin's affordable web services" />

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
            3 Wipin Services With<br>
            Various Affordable Options
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>Website Development</h3>
          <p class="fw-bold">Starting from</p>
          <span>Rp 50,000</span>
          <ul>
            <li>Free revisions</li>
            <li>Free hosting</li>
            <li>Free domain</li>
          </ul>
          <a href="{{ route('show.en', 'website-development') }}#pricelist" class="btn-main">See Details</a>
        </div>
        <div class="card-item  section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>UI UX Design</h3>
          <p class="fw-bold">Price per page</p>
          <p class="mb-0"><span>Rp 30,000</span> | Mobile design</p>
          <p class="mb-0"><span>Rp 45,000</span> | Web design</p>
          <ul>
            <li>Custom color schemes</li>
            <li>Free prototype</li>
            <li>Free mockup</li>
          </ul>
          <a href="{{ route('show.en', 'ui-ux-design') }}#pricelist" class="btn-main">See Details</a>
        </div>
        <div class="card-item  section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>Graphic Design</h3>
          <p class="fw-bold">Starting from</p>
          <p class="line-through mb-0">Rp 200,000</p>
          <span>Rp 100,000</span>

          <ul>
            <li>Custom color schemes</li>
            <li>High quality design</li>
            <li>Free mockup</li>
          </ul>
          <a href="{{ route('show.en', 'graphic-design') }}#pricelist" class="btn-main">See Details</a>
        </div>
      </div>
    </div>
  </section>


  <section id="portfolio">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="wipin portfolio" />
      <div class="row mb-5">
        <div class="col-md-8 col-12">
          <div class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left">
            <p class="title-main mb-0 title">Portfolio</p>
            <h2 class="mt-1">
              Wipin Projects From Various Industries
            </h2>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="justify-content-md-end justify-content-center d-flex">
            <a href="{{ route('show.en', 'portfolio') }}" class="btn-main mt-3">See All</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center px-3 px-md-0">
      <div class="owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" width="600" height="350"
            alt="ui ux design online book app by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350"
            alt="company profile website development by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350"
            alt="ui ux dashboard design by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" width="600" height="350"
            alt="ui ux music app design by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
            alt="library website design by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350"
            alt="culinary website design by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350"
            alt="travel website development by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350"
            alt="starbucks web design by wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/desain-grafis-game-wipin.png')}}" width="600" height="350"
            alt="game graphic design services">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/desain-feed-instagram-wipin.png')}}" width="600" height="350"
            alt="instagram feed design by wipin">
        </div>
      </div>
    </div>
  </section>

  <section id="penghargaan">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="awards background design" />
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">3 Latest Awards</p>
          <h2 class="mt-1">
            Certificates Achieved by Wipin<br />
            at the National Level
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara1">
          <img src="{{asset('assets/icons/medal1.svg')}}" width="100" height="50"
            alt="1st place web design award wipin" />
          <h3 class="my-3">1st Place in Web Design</h3>
          <p>
            Held by Yogyakarta Technology University with the theme "Indonesian Diversity" from July 5...
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara2">
          <img src="{{asset('assets/icons/medal3.svg')}}" width="100" height="50"
            alt="2nd place ui ux design award wipin" />
          <h3 class="my-3">2nd Place in UI UX Design</h3>
          <p>
            Held by Lumintulogic, an information technology company in Yogyakarta with the theme...
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara4">
          <img src="{{asset('assets/icons/medal2.svg')}}" width="100" height="50"
            alt="favorite web design award wipin" />
          <h3 class="my-3">Favorite Web Award</h3>
          <p>
            Held by Bali State Polytechnic in the INTECH FEST (Information and Technology...
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
            Clients Are Very Satisfied<br />With Project Results
          </h2>
        </div>
      </div>
      <div class="row owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar1.svg')}}" width="100" height="100" class="avatar"
                alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Aditya</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I've never been disappointed ordering designs here, because the results always exceed my expectations.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar2.svg')}}" width="100" height="100" class="avatar"
                alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Daffa Darma</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Their service really helped me complete my programming assignments when I was stuck with coding problems.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar"
                alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Salsabila</h3>
              <small>Student</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I could choose the design I liked and they completed my portfolio website in just one day. Thanks, Wipin!
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="wipin testimonial review" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar4.svg')}}" width="100" height="100" class="avatar"
                alt="testimonial profile" />
            </div>
            <div class="col-9 pl-2">
              <h3>Andre Kurniawan</h3>
              <small>Entrepreneur</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              I ordered a website and since I knew nothing about it, I consulted first and they gave me the best recommendations.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="wipin testimonial review" />
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
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="wipin faq" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Common Questions <br> From Wipin Clients
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
                    Click <a href="#pricelist">Use Our Services</a> and click the button for each package. You'll be directed to WhatsApp chat for discussion, payment (deposit or full payment), process, revisions & finishing.
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
                  What if I need revisions after the project is complete?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    We provide free revisions according to the selected package. Beyond that, there is an additional cost per revision.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  How long does it take to complete a project?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    The fastest completion time is 1 day, but it depends on the project's complexity. Most projects are completed within 2-4 days.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


 <!-- Modal -->
 <div class="modal fade" id="juara1" tabindex="-1" aria-labelledby="juara1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">1st Place in Web Design</h3>
          <button type="button" aria-label="close modal" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Held by Yogyakarta Technology University with the theme "Indonesian Diversity" from July 5 to July 26, with results announced on July 30, 2021. We succeeded in winning 1st place at the national level.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="juara2" tabindex="-1" aria-labelledby="juara2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">2nd Place in UI UX Design</h3>
          <button type="button" class="btn-close" aria-label="close modal" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Held by Lumintulogic, an information technology company in Yogyakarta, with the theme of redesigning the UI/UX of Lumintulogic's company profile website. The competition ran from January 6 to January 20, and on January 23, 2022, we were announced as the 2nd place winner at the national level.</p>
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
          <p>Held by Bali State Polytechnic during the INTECH FEST (Information and Technology Festival) 2020 with the theme "Information and Technology can Support Future Life". We successfully won the Favorite Web Design Competition Award at the national level.</p>
        </div>
      </div>
    </div>
  </div>
  
    <!-- modal promosi -->
  <div class="modal fade" tabindex="-1" id="modalPromosi">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PROMO UNTIL THE END OF <span id="newMonth" class="modal-title"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
         <img src="{{asset('assets/images/promo-jasa-website-wipin.png')}}" width="100%"
                alt="website service promo only at wipin" />
                    <a href="https://wipinweb.com/en/website-development#pricelist" class="btn fw-bold px-3 btn-warning mt-4">Get The Promo Now</a>
      </div>
    
    </div>
  </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function(){
      
      const month = ["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];
  
      const d = new Date();
      let bulan = month[d.getMonth()];
      document.getElementById("newMonth").innerText = bulan;
  
      $("#modalPromosi").modal('show');
              
   });
   
      jQuery.event.special.touchstart = {
        setup: function (e, t, s) {
          this.addEventListener("touchstart", s, {
            passive: !t.includes("noPreventDefault")
          })
        }
      }, jQuery.event.special.touchmove = {
        setup: function (e, t, s) {
          this.addEventListener("touchmove", s, {
            passive: !t.includes("noPreventDefault")
          })
        }
      }, jQuery.event.special.wheel = {
        setup: function (e, t, s) {
          this.addEventListener("wheel", s, {
            passive: !0
          })
        }
      }, jQuery.event.special.mousewheel = {
        setup: function (e, t, s) {
          this.addEventListener("mousewheel", s, {
            passive: !0
          })
        }
      };
    </script>
@endpush