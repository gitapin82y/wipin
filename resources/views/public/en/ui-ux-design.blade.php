@extends('layouts.public')

@section('title', 'Professional UI/UX Design Services - Wipin')

@section('meta_description', 'Expert UI/UX design services for exceptional digital experiences. Our designers create intuitive and attractive interfaces for web and mobile applications.')

@section('meta_keywords', 'ui ux design services, user interface design, user experience design, mobile app design, website design, wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Professional UI/UX Design Services - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/en/ui-ux-design')

@section('meta_og_description', 'Expert UI/UX design services for exceptional digital experiences. Our designers create intuitive and attractive interfaces for web and mobile applications.')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Professional UI/UX Design Services - Wipin')

@section('meta_twitter_description', 'Expert UI/UX design services for exceptional digital experiences. Our designers create intuitive and attractive interfaces for web and mobile applications.')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

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
                        Professional UI/UX Design
                        <span class="gradient">for Exceptional User Experience</span>
                    </h1>
                    <p class="mt-4 mb-5">
                        We create intuitive and visually appealing UI/UX designs for both mobile and web applications. Our designers focus on user experience to make your digital products stand out.
                    </p>
                    <a href="#pricelist" class="btn-main">{{ __('general.use_service') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('assets/images/jasa-desain-ui-ux.png') }}" width="811" height="749" class="headerImage"
                    alt="Wipin UI/UX design services" />
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
                <p class="title-main mb-0 title">Our UI/UX Design Process</p>
                <h2 class="mt-1">
                    Creating Exceptional Digital Experiences
                </h2>
                <img src="{{asset('assets/images/ui-ux-design.png')}}" width="500" height="500"
                    class="w-100 pt-4 pt-md-4 h-auto servicesImage text-center" alt="UI/UX design process" />
            </div>

            <div class="col-md-6 col-12" data-aos="fade-up-left">
                <div class="card-item section-dark-color1">
                    <h3>Research & Analysis</h3>
                    <p>
                        We begin by understanding your business, target audience, and goals to create a user-centric design strategy.
                    </p>
                </div>
                <div class="card-item section-dark-color1">
                    <h3>Wireframing & Prototyping</h3>
                    <p>
                        We create detailed wireframes and interactive prototypes to visualize the user journey and interface design.
                    </p>
                </div>
                <div class="card-item section-dark-color1">
                    <h3>User Testing & Refinement</h3>
                    <p>
                        We test and refine the design based on user feedback to ensure optimal usability and satisfaction.
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
                    Affordable UI/UX Design Packages
                </h2>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Mobile App Design</h3>
                <p class="fw-bold">Price per screen</p>
                <span>Rp 30,000</span>
                <ul>
                    <li>Custom color schemes</li>
                    <li>Free prototype</li>
                    <li>Free mockup</li>
                    <li>User flow design</li>
                    <li>2 revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20Mobile%20App%20UI/UX%20Design" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Website Design</h3>
                <p class="fw-bold">Price per page</p>
                <span>Rp 45,000</span>
                <ul>
                    <li>Custom color schemes</li>
                    <li>Responsive design</li>
                    <li>Free prototype</li>
                    <li>Free mockup</li>
                    <li>3 revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20Website%20UI/UX%20Design" class="btn-main" target="_blank">Order Now</a>
            </div>
            <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
                <h3>Dashboard Design</h3>
                <p class="fw-bold">Price per dashboard</p>
                <span>Rp 75,000</span>
                <ul>
                    <li>Complex interface design</li>
                    <li>Data visualization elements</li>
                    <li>Free prototype</li>
                    <li>Free mockup</li>
                    <li>User flow design</li>
                    <li>5 revision rounds</li>
                </ul>
                <a href="https://wa.me/6285198330157?text=Hello%20Wipin,%20I'm%20interested%20in%20Dashboard%20UI/UX%20Design" class="btn-main" target="_blank">Order Now</a>
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
                        Our Latest UI/UX Design Projects
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
                <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" width="600" height="350"
                    alt="online book app UI/UX design by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350"
                    alt="dashboard UI/UX design by wipin">
            </div>
            <div class="card-item section-dark-color1 item">
                <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" width="600" height="350"
                    alt="music app UI/UX design by wipin">
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
                    Frequently Asked Questions<br>About UI/UX Design
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
                                What's the difference between UI and UX design?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    UI (User Interface) design focuses on the visual elements and aesthetics of a digital product, while UX (User Experience) design focuses on the overall user journey and functionality. Our services combine both aspects to create beautiful and functional designs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                                How long does the UI/UX design process take?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    The timeline varies depending on the complexity of your project. Simple app or website designs can be completed in 3-5 days, while more complex projects may take 1-2 weeks. We'll provide a specific timeline after discussing your requirements.
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
                                What deliverables will I receive with UI/UX design services?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    You'll receive high-fidelity design files, interactive prototypes, mockups showing your design in realistic contexts, and all necessary assets for development implementation. We can provide files in various formats including Figma, Sketch, or Adobe XD.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item section-dark-color1">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                                Do you also develop the designs you create?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Yes! We offer end-to-end services from design to development. If you'd like us to implement your UI/UX designs, we can provide website or app development services as well. This ensures your final product matches the design vision exactly.
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