@extends('layouts.public')

@section('title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_description', 'Professional website development services with affordable pricing. Our expert developers create high-quality websites tailored to your business or personal needs.')

@section('meta_keywords', 'wipin, website development, affordable website development, business website, professional website services')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/en/website-development')

@section('meta_og_description', 'Professional website development services with affordable pricing. Our expert developers create high-quality websites tailored to your business or personal needs.')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Affordable Quality Website Development Services - Wipin')

@section('meta_twitter_description', 'Professional website development services with affordable pricing. Our expert developers create high-quality websites tailored to your business or personal needs.')

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
                        Professional Website Development
                        <span class="gradient">at Affordable Prices</span>
                    </h1>
                    <p class="mt-4 mb-5">
                        Our team of experienced developers creates high-quality websites with the best systems and technologies to meet your business or personal needs.
                    </p>
                    <a href="#pricelist" class="btn-main">{{ __('general.use_service') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('assets/images/jasa-website-dan-desain.png') }}" width="811" height="749" class="headerImage"
                    alt="Wipin website development services" />
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
                <p class="title-main mb-0 title">Our Website Development</p>
                <h2 class="mt-1">
                    Custom Solutions For Your Business Needs
                </h2>
                <img src="{{asset('assets/images/website-development.png')}}" width="500" height="500"
                    class="w-100 pt-4 pt-md-4 h-auto servicesImage text-center" alt="website development solutions" />
            </div>

            <div class="col-md-6 col-12" data-aos="fade-up-left">
                <div class="card-item section-dark-color1">
                    <h3>Responsive Design</h3>
                    <p>
                        All our websites are fully responsive, ensuring perfect display on any device - from mobile phones to desktop computers.
                    </p>
                </div>
                <div class="card-item section-dark-color1">
                    <h3>SEO Optimization</h3>
                    <p>
                        We implement best SEO practices to help your website rank higher in search engines and attract more organic traffic.
                    </p>
                </div>
                <div class="card-item section-dark-color1">
                    <h3>Fast Loading Speed</h3>
                    <p>
                        Our websites are optimized for performance with minimal loading times, providing excellent user experience.
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
                <p class="title-main mb-0 title">Our Pricing</p>
                <h2 class="mt-1">
                    Affordable Website Development Packages
                </h2>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Basic Package</h3>
                <p class="fw-bold">Starting from</p>
                <span>Rp 750,000</span>
                <ul>
                    <li>5 Pages</li>
                    <li>Responsive design</li>
                    <li>Free revisions (2x)</li>
                    <li>Free hosting</li>
                    <li>Free domain</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Basic%20Website%20Package" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Standard Package</h3>
                <p class="fw-bold">Starting from</p>
                <span>Rp 1,500,000</span>
                <ul>
                    <li>10 Pages</li>
                    <li>Responsive design</li>
                    <li>SEO optimization</li>
                    <li>Free revisions (5x)</li>
                    <li>Free hosting</li>
                    <li>Free domain</li>
                    <li>Basic CMS</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Standard%20Website%20Package" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Premium Package</h3>
                <p class="fw-bold">Starting from</p>
                <span>Rp 3,000,000</span>
                <ul>
                    <li>Unlimited Pages</li>
                    <li>Responsive design</li>
                    <li>Advanced SEO optimization</li>
                    <li>Free revisions (10x)</li>
                    <li>Free hosting</li>
                    <li>Premium domain</li>
                    <li>Full CMS</li>
                    <li>E-commerce functionality</li>
                    <li>Social media integration</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20the%20Premium%20Website%20Package" class="btn-main" target="_blank">Order Now</a>
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
                        Our Latest Website Projects
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
                <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350"
                    alt="company profile website development by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
                    alt="library website design by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350"
                    alt="culinary website design by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350"
                    alt="travel website development by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350"
                    alt="starbuks web design by wipin">
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
                    Frequently Asked Questions<br>About Website Development
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
                                How long does it take to develop a website?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    It depends on the complexity of the project, but most websites can be completed within 2-4 days. Simple websites may be completed in as little as 1 day, while more complex projects may take longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                                Do you provide website hosting and domain registration?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Yes, we provide free hosting and domain registration with all our website development packages. We'll handle all the technical aspects so you can focus on your business.
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
                                Will my website be mobile-friendly?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Absolutely! All our websites are built with responsive design, ensuring they look and function perfectly on all devices - from smartphones and tablets to desktop computers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                                What if I need revisions after the website is completed?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    We offer free revisions according to your selected package. Basic package includes 2 revisions, Standard package includes 5 revisions, and Premium package includes 10 revisions. Additional revisions are available at an extra cost.
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