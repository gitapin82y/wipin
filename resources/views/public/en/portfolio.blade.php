@extends('layouts.public')

@section('title', 'Wipin Website and Design Portfolio')

@section('meta_description', 'View our diverse range of completed projects from various industries. Wipin takes pride in helping clients meet their needs, and is committed to delivering the best results that align with your requirements and vision.')

@section('meta_keywords', 'wipin, website portfolio, wipin portfolio')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Wipin Website and Design Portfolio')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/en/portfolio')

@section('meta_og_description', 'View our diverse range of completed projects from various industries. Wipin takes pride in helping clients meet their needs, and is committed to delivering the best results that align with your requirements and vision.')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Wipin Website and Design Portfolio')

@section('meta_twitter_description', 'View our diverse range of completed projects from various industries. Wipin takes pride in helping clients meet their needs, and is committed to delivering the best results that align with your requirements and vision.')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-dan-joki-tugas-it-murah-wipin.png'))

@push('style')
<style>
    /* Portfolio Items Styling */
    .portfolio-item {
        margin-bottom: 30px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .portfolio-item:hover {
        transform: translateY(-10px);
    }
    
    .portfolio-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    
    .portfolio-info {
        padding: 20px;
        background-color: var(--dark-color1);
    }
    
    .portfolio-info h3 {
        margin-top: 0;
        font-size: 1.2rem;
    }
    
    .portfolio-info p {
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    
    .portfolio-category {
        display: inline-block;
        padding: 5px 10px;
        background-color: var(--main-color);
        color: white;
        border-radius: 20px;
        font-size: 0.8rem;
        margin-right: 5px;
        margin-bottom: 5px;
    }
    
    .portfolio-filters {
        margin-bottom: 30px;
        text-align: center;
    }
    
    .filter-btn {
        padding: 8px 15px;
        margin: 0 5px 10px;
        background-color: var(--dark-color1);
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .filter-btn:hover, .filter-btn.active {
        background-color: var(--main-color);
        color: white;
    }
    
    /* Recent Projects Section */
    .recent-project-item {
        margin: 15px 0;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .preview-link {
        color: #ffa24d;
        text-decoration: none;
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }
    
    .preview-link:hover {
        color: #ff8c1a;
    }
    
    /* Stats Counter */
    .counter-section {
        padding: 30px 0;
    }
    
    .counter-item {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .counter-number {
        font-size: 3rem;
        font-weight: bold;
        color: var(--main-color);
        margin-bottom: 10px;
    }
    
    .counter-label {
        font-size: 1.1rem;
    }
    
    /* Client Logos */
    .client-logos {
        margin: 40px 0;
    }
    
    .client-logos img {
        max-width: 100%;
        height: auto;
    }
    
    /* Stats */
    .number {
        font-size: 2.5rem;
        color: var(--main-color);
    }
</style>
@endpush

@section('content')
<!-- Stats Counter Section -->
<section id="portfolio-stats" class="py-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <div class="counter-item">
                    <h2 class="number title">389</h2>
                    <p>Satisfied Clients</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="counter-item">
                    <h2 class="number title">413</h2>
                    <p>Completed Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Header Section -->
<section id="portfolio-header" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title">Our <span class="gradient">Portfolio</span></h1>
                <p class="mt-3 mb-5">
                    Discover our diverse collection of projects across various industries. Each project showcases our commitment to quality, creativity, and client satisfaction.
                </p>
            </div>
        </div>
        
        <!-- Recent Projects Section -->
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="mb-4">Recently Completed Projects</h2>
                <p>Take a look at our most recent website projects that we've successfully delivered to our clients.</p>
            </div>
        </div>
        
        <div class="row justify-content-around mb-5">
            <div class="col-md-4 col-sm-6 recent-project-item section-dark-color1" data-aos="fade-up">
                <img src="{{asset('assets/portfolio/catu-inter-global.png')}}" alt="Catu Inter Global Website" class="img-fluid">
                <div class="p-3">
                    <h3>Catu Inter Global</h3>
                    <p>Corporate website with elegant design and responsive functionality</p>
                    <a href="https://catuinterglobal.com" class="preview-link" target="_blank">
                        View Live Site &nbsp; <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 recent-project-item section-dark-color1" data-aos="fade-up">
                <img src="{{asset('assets/portfolio/gemilang-indo-karya.png')}}" alt="Gemilang Indo Karya Website" class="img-fluid">
                <div class="p-3">
                    <h3>Gemilang Indo Karya</h3>
                    <p>Business website with modern design and informative content</p>
                    <a href="https://gemilangindokarya.com" class="preview-link" target="_blank">
                        View Live Site &nbsp; <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 recent-project-item section-dark-color1" data-aos="fade-up">
                <img src="{{asset('assets/portfolio/indonesia-medical-center.png')}}" alt="Indonesia Medical Center Website" class="img-fluid">
                <div class="p-3">
                    <h3>Indonesia Medical Center</h3>
                    <p>Healthcare website with clean design and user-friendly navigation</p>
                    <a href="https://indonesiamedicalcenter.com" class="preview-link" target="_blank">
                        View Live Site &nbsp; <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Portfolio Filters -->
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="website">Website</button>
            <button class="filter-btn" data-filter="ui-ux">UI/UX Design</button>
            <button class="filter-btn" data-filter="graphic">Graphic Design</button>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="row">
            <!-- Website Projects -->
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" alt="Company Profile Website">
                <div class="portfolio-info">
                    <h3>Corporate Website</h3>
                    <p>Professional company profile website with modern design and responsive layout</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" alt="Library Website">
                <div class="portfolio-info">
                    <h3>Library Management System</h3>
                    <p>Comprehensive website for library catalog management with user-friendly interface</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" alt="Culinary Website">
                <div class="portfolio-info">
                    <h3>Culinary Website</h3>
                    <p>Attractive food and restaurant website with online menu and reservation system</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" alt="Travel Website">
                <div class="portfolio-info">
                    <h3>Travel Agency Website</h3>
                    <p>Engaging travel website with tour packages, booking system, and destination information</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" alt="Coffee Shop Website">
                <div class="portfolio-info">
                    <h3>Coffee Shop Website</h3>
                    <p>Modern website for a coffee shop chain with product showcase and store locator</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <!-- Additional Website Projects (from Indonesian version) -->
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/website-bisnis-kios-toyota.png')}}" alt="Toyota Business Website">
                <div class="portfolio-info">
                    <h3>Automotive Business Website</h3>
                    <p>SEO-friendly Toyota dealership website designed to increase sales and customer engagement</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/website-artikel-travel.png')}}" alt="Travel Article Website">
                <div class="portfolio-info">
                    <h3>Travel Blog Website</h3>
                    <p>Travel website that attracts customers through articles about destinations and travel tips</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/website-landing-page-jasa-sedot-wc.png')}}" alt="Service Landing Page">
                <div class="portfolio-info">
                    <h3>Service Landing Page</h3>
                    <p>Single-page business information optimized to highlight services and generate leads</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/web-produk-neo-furniture.png')}}" alt="Furniture Product Website">
                <div class="portfolio-info">
                    <h3>Furniture Product Showcase</h3>
                    <p>E-commerce platform for browsing furniture products with WhatsApp ordering system</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/website-personal-build-by-wipin.png')}}" alt="Personal Website">
                <div class="portfolio-info">
                    <h3>Developer Portfolio</h3>
                    <p>Personal website for a freelance full-stack developer showcasing portfolio and skills</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/Web-Property-Bisnis.png')}}" alt="Property Business Website">
                <div class="portfolio-info">
                    <h3>Real Estate Listings</h3>
                    <p>Property information platform with WhatsApp integration for contacting sales team</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/web-sekolah.png')}}" alt="School Website">
                <div class="portfolio-info">
                    <h3>School Website</h3>
                    <p>Educational institution website with curriculum information, activities, and online registration</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/Web-Ecommerce.png')}}" alt="E-commerce Website">
                <div class="portfolio-info">
                    <h3>E-commerce Platform</h3>
                    <p>Online shopping website with attractive design and automated payment system</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="website">
                <img src="{{asset('assets/portfolio/webcostum.png')}}" alt="Custom Business Website">
                <div class="portfolio-info">
                    <h3>Custom Business Application</h3>
                    <p>Web-based business management system for data handling, finance, inventory, and employee monitoring</p>
                    <span class="portfolio-category">Website</span>
                </div>
            </div>
            
            <!-- UI/UX Projects -->
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="ui-ux">
                <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" alt="Online Book App">
                <div class="portfolio-info">
                    <h3>E-Book Mobile App</h3>
                    <p>User-friendly mobile application for reading and managing digital books</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="ui-ux">
                <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" alt="Dashboard Design">
                <div class="portfolio-info">
                    <h3>Analytics Dashboard</h3>
                    <p>Intuitive dashboard interface with data visualization for business analytics</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="ui-ux">
                <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" alt="Music App Design">
                <div class="portfolio-info">
                    <h3>Music Streaming App</h3>
                    <p>Sleek and intuitive music player app with personalized recommendations</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <!-- Graphic Design Projects -->
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="graphic">
                <img src="{{asset('assets/portfolio/desain-grafis-game-wipin.png')}}" alt="Game Graphic Design">
                <div class="portfolio-info">
                    <h3>Game Visual Design</h3>
                    <p>Creative graphic elements for mobile game interface and promotional materials</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 portfolio-item" data-category="graphic">
                <img src="{{asset('assets/portfolio/desain-feed-instagram-wipin.png')}}" alt="Instagram Feed Design">
                <div class="portfolio-info">
                    <h3>Instagram Content Strategy</h3>
                    <p>Cohesive and visually appealing Instagram feed design for brand identity</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos Section -->
<section id="client-logos" class="py-5 section-dark-color">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Trusted By Various Industries</h2>
                <p>Companies from different sectors have placed their trust in Wipin to deliver high-quality digital solutions.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{asset('assets/portfolio/client-wipin.png')}}" class="img-fluid" alt="Wipin Clients">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Client Testimonials</h2>
                <p>What our clients say about working with us</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <div class="portfolio-info">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{asset('assets/images/avatar1.svg')}}" width="50" height="50" class="rounded-circle me-3" alt="Client Avatar">
                            <div>
                                <h4 class="mb-0">Aditya</h4>
                                <p class="mb-0 text-muted">Entrepreneur</p>
                            </div>
                        </div>
                        <p>"Never disappointed when ordering designs here, because the results always exceed expectations - amazing quality."</p>
                        <img src="{{asset('assets/icons/stars.svg')}}" width="120" alt="5-star Rating">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <div class="portfolio-info">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{asset('assets/images/avatar3.svg')}}" width="50" height="50" class="rounded-circle me-3" alt="Client Avatar">
                            <div>
                                <h4 class="mb-0">Salsabila</h4>
                                <p class="mb-0 text-muted">Student</p>
                            </div>
                        </div>
                        <p>"I could choose the design I liked and it was incredibly fast - my portfolio website was ready in just one day. Thanks Wipin!"</p>
                        <img src="{{asset('assets/icons/stars.svg')}}" width="120" alt="5-star Rating">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <div class="portfolio-info">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{asset('assets/images/avatar4.svg')}}" width="50" height="50" class="rounded-circle me-3" alt="Client Avatar">
                            <div>
                                <h4 class="mb-0">Andre Kurniawan</h4>
                                <p class="mb-0 text-muted">Business Owner</p>
                            </div>
                        </div>
                        <p>"I ordered a website with no prior knowledge, so I consulted first and they provided the best recommendations for my business."</p>
                        <img src="{{asset('assets/icons/stars.svg')}}" width="120" alt="5-star Rating">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section id="contact-cta" class="py-5 section-dark-color">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Start Your Project?</h2>
        <p class="mb-4">Contact us today to discuss your ideas and requirements. We're here to help you bring your vision to life.</p>
        <a href="https://wa.me/6285198330157" class="btn-main" target="_blank">Contact Us Now</a>
    </div>
</section>
@endsection

@push('script')
<script>
    $(document).ready(function(){
        // Portfolio filtering
        $('.filter-btn').on('click', function(){
            var category = $(this).data('filter');
            
            // Update active button
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            // Filter items
            if(category === 'all'){
                $('.portfolio-item').show();
            } else {
                $('.portfolio-item').hide();
                $('.portfolio-item[data-category="'+category+'"]').show();
            }
        });
        
        // Initialize any carousels or sliders if needed
        if($('.owl-carousel').length) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        }
    });
</script>
@endpush