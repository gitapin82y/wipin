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
            <div class="col-12 col-lg-6">
                <div class="col-12 main-header pt-2 text-center text-lg-start">
                    <h1 class="title">
                        Professional Graphic Design
                        <span class="gradient">at Affordable Prices</span>
                    </h1>
                    <p class="mt-4 mb-5">
                        From logos and branding to marketing materials, our professional graphic designers create high-quality designs that elevate your business image and attract customers.
                    </p>
                    <a href="#pricelist" class="btn-main">{{ __('general.use_service') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('assets/images/jasa-desain-grafis.png') }}" width="811" height="749" class="headerImage"
                    alt="Wipin graphic design services" />
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
                <p class="title-main mb-0 title">Our Graphic Design Services</p>
                <h2 class="mt-1">
                    Comprehensive Design Solutions<br>For Your Business
                </h2>
                <img src="{{asset('assets/images/graphic-design-services.png')}}" width="500" height="500"
                    class="w-100 pt-4 pt-md-4 h-auto servicesImage text-center" alt="graphic design services" />
            </div>

            <div class="col-md-6 col-12" data-aos="fade-up-left">
                <a href="{{ route('show.en', 'logo-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Logo Design</h3>
                        <p>
                            Professional, memorable logo designs that represent your brand identity and values
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
                <a href="{{ route('show.en', 'banner-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Banner Design</h3>
                        <p>
                            Eye-catching banner designs for websites, social media, events, and advertising
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
                <a href="{{ route('show.en', 'packaging-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Packaging Design</h3>
                        <p>
                            Creative and functional packaging designs that protect your products and attract customers
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-12" data-aos="fade-up-right">
                <a href="{{ route('show.en', 'poster-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Poster Design</h3>
                        <p>
                            Impactful poster designs for promotions, events, and advertisements
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
                <a href="{{ route('show.en', 'brochure-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Brochure Design</h3>
                        <p>
                            Informative and visually appealing brochure designs that effectively communicate your message
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12" data-aos="fade-up-left">
                <a href="{{ route('show.en', 'instagram-feed-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>Instagram Feed Design</h3>
                        <p>
                            Cohesive and attractive Instagram feed designs that enhance your social media presence
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
                <a href="{{ route('show.en', 'tshirt-design') }}">
                    <div class="card-item section-dark-color1">
                        <h3>T-Shirt Design</h3>
                        <p>
                            Creative and wearable t-shirt designs for businesses, events, and merchandise
                        </p>
                        <p class="title-main fw-light">{{ __('general.see_details') }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="pricelist" class="section-dark-color">
    <div class="container">
        <div class="row">
            <div class="text-center mb-4">
                <p class="title-main mb-0 title">Our Pricing</p>
                <h2 class="mt-1">
                    Affordable Graphic Design Packages
                </h2>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Basic Package</h3>
                <p class="fw-bold">Starting from</p>
                <p class="line-through mb-0">Rp 200,000</p>
                <span>Rp 100,000</span>
                <ul>
                    <li>1 design concept</li>
                    <li>Custom color schemes</li>
                    <li>High-quality design</li>
                    <li>Free mockup</li>
                    <li>2 revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Basic%20Graphic%20Design%20Package" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Standard Package</h3>
                <p class="fw-bold">Starting from</p>
                <p class="line-through mb-0">Rp 350,000</p>
                <span>Rp 200,000</span>
                <ul>
                    <li>2 design concepts</li>
                    <li>Custom color schemes</li>
                    <li>High-quality design</li>
                    <li>Free mockup</li>
                    <li>Source files included</li>
                    <li>5 revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Standard%20Graphic%20Design%20Package" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Premium Package</h3>
                <p class="fw-bold">Starting from</p>
                <p class="line-through mb-0">Rp 500,000</p>
                <span>Rp 350,000</span>
                <ul>
                    <li>3 design concepts</li>
                    <li>Custom color schemes</li>
                    <li>Premium quality design</li>
                    <li>Multiple mockups</li>
                    <li>Source files included</li>
                    <li>Print-ready files</li>
                    <li>Unlimited revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Premium%20Graphic%20Design%20Package" class="btn-main" target="_blank">Order Now</a>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-12">
                <div class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left">
                    <p class="title-main mb-0 title">Portfolio</p>
                    <h2 class="mt-1">
                        Our Latest Graphic Design Projects
                    </h2>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="justify-content-md-end justify-content-center d-flex">
                    <a href="{{ route('show.en', 'portfolio') }}" class="btn-main mt-3">{{ __('general.see_all') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center px-3 px-md-0">
        <div class="owl-carousel owl-theme">
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/desain-grafis-game-wipin.png')}}" width="600" height="350"
                    alt="game graphic design by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/desain-feed-instagram-wipin.png')}}" width="600" height="350"
                    alt="instagram feed design by wipin">
            </div>
        </div>
    </div>
</section>

<section id="faq">
    <div class="container">
        <div class="row">
            <div class="text-center mb-3">
                <p class="title-main mb-0 title">FAQ</p>
                <h2 class="mt-1">
                    Frequently Asked Questions<br>About Graphic Design
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
                                What graphic design services do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    We offer a wide range of graphic design services including logo design, banner design, poster design, packaging design, brochure design, Instagram feed design, t-shirt design, certificate design, and more. We can help with virtually any graphic design need for your business or personal projects.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                                How long does it take to complete a graphic design project?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Most graphic design projects can be completed within 1-3 days depending on complexity and revisions. Simple designs might be finished in 24 hours, while more complex projects might take up to a week. We'll provide a specific timeline after discussing your requirements.
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
                                What file formats will I receive for my designs?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    We provide designs in various formats to suit your needs. Standard formats include JPG and PNG for web use, and PDF for print. For logo designs, we also provide vector formats (AI, EPS, SVG) which are scalable without quality loss. If you need specific formats, just let us know.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                                Do I own the copyright to the designs you create for me?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Yes, once the project is completed and paid in full, you own the full copyright to the designs we create for you. You can use them for any purpose, commercially or personally. We do request permission to use the designs in our portfolio, but we will always credit you as the client.
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