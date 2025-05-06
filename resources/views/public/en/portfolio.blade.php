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
<!-- Add CSS if needed -->
<style>
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
</style>
@endpush

@section('content')
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
        
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="website">Website</button>
            <button class="filter-btn" data-filter="ui-ux">UI/UX Design</button>
            <button class="filter-btn" data-filter="graphic">Graphic Design</button>
        </div>
        
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
    });
</script>
@endpush