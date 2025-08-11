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
        margin-top: 10px;
        border-radius: 6px;
        object-fit: cover;
    }
    
    .portfolio-info {
        padding:10px 0px;
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
        color: white !important;
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
    .recent-project-item img{
        border-radius: 6px;
        margin-top: 10px;
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

    /* Graphic Design Card Styles */
    .graphic-portfolio-item {
        margin-bottom: 30px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        position: relative;
    }
    
    .graphic-portfolio-item:hover {
        transform: translateY(-10px);
    }

    /* Image Slider Styles */
    .image-slider {
        position: relative;
        height: 250px;
        overflow: hidden;
         border-radius: 6px;
    }

    .slider-container {
        display: flex;
        transition: transform 0.3s ease;
        height: 100%;
        border-radius: 6px;
        margin-top: 10px;
    }
    .slider-container img{
        border-radius: 6px;
    }
    .slide-image {
        min-width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        background-color: #f8f9fa;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        color: #ff8c1a !important; 
        font-weight: bold;
        transition: all 0.3s ease;
        z-index: 1;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 1);
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .slider-nav.prev {
        left: 10px;
    }

    .slider-nav.next {
        right: 10px;
    }

    .slider-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 5px;
        z-index: 10;
    }

    .indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: var(--main-color);
        transform: scale(1.2);
    }

    /* Modal Styles */
    .image-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        padding: 20px;
    }

    .modal-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
        margin: auto;
        display: block;
        border-radius: 10px;
        top: 50%;
        transform: translateY(-50%);
        object-fit: contain;
        background-color: white;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    .close-modal {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        z-index: 1001;
    }

    .close-modal:hover {
        opacity: 0.7;
    }

    .modal-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: 2px solid rgba(255, 140, 26, 0.8);
        color: #ff8c1a;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
        transition: all 0.3s ease;
        z-index: 1001;
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }

    .modal-nav:hover {
        background: rgba(255, 255, 255, 1);
        border-color: #ff8c1a;
        color: #ff8c1a;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    .modal-nav.prev {
        left: 20px;
    }

    .modal-nav.next {
        right: 20px;
    }

    .modal-info {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        background: rgba(0, 0, 0, 0.7);
        padding: 15px;
        border-radius: 10px;
        z-index: 1001;
    }

    .modal-info h4 {
        margin: 0 0 5px 0;
        font-size: 1.2rem;
    }

    .modal-info p {
        margin: 0;
        font-size: 0.9rem;
        opacity: 0.8;
    }

        @media (max-width: 768px) {
        .slider-nav {
            width: 35px;
            height: 35px;
            font-size: 16px;
        }
        
        .modal-nav {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }
        
        .close-modal {
            font-size: 30px;
            top: 10px;
            right: 25px;
        }
    }
</style>

<style>
    /* Live Portfolio Links Section */
    .live-portfolio-section {
        background: linear-gradient(135deg, var(--dark-color1) 0%, rgba(255, 162, 77, 0.1) 100%);
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .live-portfolio-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,162,77,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .live-portfolio-container {
        position: relative;
        z-index: 2;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #fff 0%, var(--main-color) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-title p {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    .portfolio-links-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .portfolio-link-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 162, 77, 0.2);
        border-radius: 15px;
        padding: 25px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .portfolio-link-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--main-color), transparent);
        transition: left 0.5s ease;
    }

    .portfolio-link-card:hover::before {
        left: 100%;
    }

    .portfolio-link-card:hover {
        transform: translateY(-5px);
        border-color: var(--main-color);
        box-shadow: 0 15px 35px rgba(255, 162, 77, 0.2);
        background: rgba(255, 255, 255, 0.08);
    }

    .portfolio-link-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .portfolio-link-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--main-color), #ff6b35);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .portfolio-link-content h4 {
        margin: 0 0 5px 0;
        font-size: 1.1rem;
        font-weight: 600;
        color: #fff;
    }

    .portfolio-link-content .domain {
        color: var(--main-color);
        font-size: 0.9rem;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .portfolio-link-content .domain:hover {
        color: #ff8c1a;
        text-decoration: underline;
    }

    .portfolio-link-content .category {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.7);
        margin-top: 5px;
    }


    /* Responsive Design */
    @media (max-width: 768px) {
        .section-title h2 {
            font-size: 2rem;
        }
        
        .portfolio-links-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .portfolio-link-card {
            padding: 20px;
        }
        
        .portfolio-link-icon {
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
        }
    }

    @media (max-width: 480px) {
        .live-portfolio-section {
            padding: 40px 0;
        }
        
        .section-title h2 {
            font-size: 1.8rem;
        }
        
        .portfolio-link-info {
            gap: 12px;
        }
        
        .portfolio-link-content h4 {
            font-size: 1rem;
        }
    }

    /* Animation untuk cards */
    .portfolio-link-card {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }

    .portfolio-link-card:nth-child(1) { animation-delay: 0.1s; }
    .portfolio-link-card:nth-child(2) { animation-delay: 0.2s; }
    .portfolio-link-card:nth-child(3) { animation-delay: 0.3s; }
    .portfolio-link-card:nth-child(4) { animation-delay: 0.4s; }
    .portfolio-link-card:nth-child(5) { animation-delay: 0.5s; }
    .portfolio-link-card:nth-child(6) { animation-delay: 0.6s; }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Button untuk project detail */
    .btn-project-detail {
        background-color:  white;
        color: #ff6b35 !important;
        border: none;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 10px 0 5px 0;
        display: block;
    }

    .btn-project-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
    }

    /* Project Modal Styles */
    .project-modal {
        display: none;
        position: fixed;
        z-index: 2000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        backdrop-filter: blur(5px);
        padding: 20px;
    }

    .modal-content-project {
        background: var(--dark-color1);
        margin: 2% auto;
        padding: 0;
        border-radius: 20px;
        width: 90%;
        max-width: 900px;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 162, 77, 0.2);
    }

    .close-project-modal {
        position: absolute;
        right: 25px;
        top: 20px;
        color: #fff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
        z-index: 2001;
        transition: all 0.3s ease;
    }

    .close-project-modal:hover {
        color: var(--main-color);
        transform: scale(1.1);
    }

    .project-header {
        background: linear-gradient(135deg, var(--main-color), #ff6b35);
        padding: 40px 30px 30px;
        border-radius: 20px 20px 0 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .project-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    .project-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: white;
        position: relative;
        z-index: 2;
    }

    .project-header .project-type {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        display: inline-block;
        position: relative;
        z-index: 2;
    }

    .project-body {
        padding: 30px;
    }

    .project-overview {
        margin-bottom: 30px;
    }

    .project-overview h3 {
        color: var(--main-color);
        font-size: 1.4rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .project-overview p {
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
    }

    .project-details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }

    .detail-section {
        background: rgba(255, 255, 255, 0.05);
        padding: 25px;
        border-radius: 15px;
        border-left: 4px solid var(--main-color);
    }

    .detail-section h4 {
        color: var(--main-color);
        font-size: 1.2rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-section ul {
        list-style: none;
        padding: 0;
    }

    .detail-section ul li {
        padding: 8px 0;
        color: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-section ul li::before {
        content: '✓';
        color: var(--main-color);
        font-weight: bold;
        font-size: 1.1rem;
    }

    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 15px 0;
    }

    .tech-item {
        background: linear-gradient(135deg, rgba(255, 162, 77, 0.2), rgba(255, 107, 53, 0.2));
        color: var(--main-color);
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        border: 1px solid rgba(255, 162, 77, 0.3);
    }

    .live-demo-section {
        text-align: center;
        margin-top: 30px;
        padding: 25px;
        background: rgba(255, 162, 77, 0.1);
        border-radius: 15px;
        border: 1px solid rgba(255, 162, 77, 0.2);
    }

    .btn-live-demo {
        background: linear-gradient(135deg, var(--main-color), #ff6b35);
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin-top: 10px;
    }

    .btn-live-demo:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255, 162, 77, 0.3);
        color: white;
        text-decoration: none;
    }

    /* Icons untuk sections */
    .icon-overview::before { content: '📋'; }
    .icon-features::before { content: '⚡'; }
    .icon-tech::before { content: '🛠️'; }
    .icon-users::before { content: '👥'; }
    .icon-demo::before { content: '🌐'; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .modal-content-project {
            width: 95%;
            margin: 5% auto;
            max-height: 85vh;
        }
        
        .project-header {
            padding: 30px 20px 25px;
        }
        
        .project-header h2 {
            font-size: 1.8rem;
        }
        
        .project-body {
            padding: 20px;
        }
        
        .project-details-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .close-project-modal {
            right: 15px;
            top: 15px;
            font-size: 28px;
        }
    }

    /* Custom scrollbar for modal */
    .modal-content-project::-webkit-scrollbar {
        width: 8px;
    }

    .modal-content-project::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }

    .modal-content-project::-webkit-scrollbar-thumb {
        background: var(--main-color);
        border-radius: 10px;
    }

    .modal-content-project::-webkit-scrollbar-thumb:hover {
        background: #ff8c1a;
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
              Situs Web dan Desain <span class="gradient">Portofolio</span> Wipin
            </h1>
            <p class="mt-4 mb-5">
              Anda dapat melihat berbagai proyek yang telah kami selesaikan dari berbagai industri. Wipin bangga dengan hasil setiap proyek yang membantu kebutuhan klien, dan berkomitmen untuk memberikan hasil terbaik yang sesuai dengan kebutuhan dan visi Anda.
            </p>
            <a href="#portfolio-header" class="btn-main">Lihat Portofolio</a>
          </div>
          <div class="col-12 text-center text-lg-start">
            <div class="d-flex">
              <div class="col-6">
                <h2 class="number title">389</h2>
                <p>Our<br />Customer</p>
              </div>
              <div class="col-6">
                <h2 class="number title">413</h2>
                <p>Project<br />Completed</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 p-0">
          <img src="{{asset('assets/images/jasa-pembuatan-website.png')}}" width="811" height="749" class="headerImage" alt="jasa pembuatan website wipin" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->


<!-- Portfolio Header Section -->
<section id="portfolio-header" class="pt-0 pb-5">
    <div class="container">
        <!-- Portfolio Filters -->
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="website">Static Website</button>
            <button class="filter-btn" data-filter="web-app">Web Application</button>
            <button class="filter-btn" data-filter="ui-ux">UI/UX Design</button>
            <button class="filter-btn" data-filter="graphic">Graphic Design</button>
        </div>
        
<!-- Portfolio Grid -->
        <div class="row justify-content-around">
            <!-- Website Projects -->
       
            
            <!-- Additional Website Projects (from Indonesian version) -->
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/website-bisnis-kios-toyota.png')}}" alt="Toyota Business Website">
                <div class="portfolio-info">
                    <h3>Situs Web Bisnis Otomotif</h3>
                    <p>Situs web dealer Toyota yang ramah SEO dirancang untuk meningkatkan penjualan dan keterlibatan pelanggan</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/website-artikel-travel.png')}}" alt="Travel Article Website">
                <div class="portfolio-info">
                 <h3>Situs Web Blog Perjalanan</h3>
                    <p>Situs web perjalanan yang menarik pelanggan melalui artikel tentang destinasi dan tips perjalanan</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/website-landing-page-jasa-sedot-wc.png')}}" alt="Service Landing Page">
                <div class="portfolio-info">
                   <h3>Landing Page</h3>
                    <p>Informasi bisnis satu halaman yang dioptimalkan untuk menyoroti layanan dan menghasilkan prospek</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/web-produk-neo-furniture.png')}}" alt="Furniture Product Website">
                <div class="portfolio-info">
                <h3>Etalase Produk Furnitur</h3>
                    <p>Platform e-commerce untuk melihat-lihat produk furnitur dengan sistem pemesanan melalui WhatsApp</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/website-personal-build-by-wipin.png')}}" alt="Personal Website">
                <div class="portfolio-info">
                   <h3>Portofolio Pengembang</h3>
                    <p>Situs web pribadi untuk pengembang full-stack lepas yang menampilkan portofolio dan keahlian</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/Web-Property-Bisnis.png')}}" alt="Property Business Website">
                <div class="portfolio-info">
                <h3>Daftar Properti Real Estat</h3>
                    <p>Platform informasi properti dengan integrasi WhatsApp untuk menghubungi tim penjualan</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/web-sekolah.png')}}" alt="School Website">
                <div class="portfolio-info">
                 <h3>Situs Web Sekolah</h3>
                    <p>Situs web institusi pendidikan dengan informasi kurikulum, kegiatan, dan pendaftaran online</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/Web-Ecommerce.png')}}" alt="E-commerce Website">
                <div class="portfolio-info">
                   <h3>Platform E-commerce</h3>
                    <p>Situs web belanja online dengan desain menarik dan sistem pembayaran otomatis</p>
                    <span class="portfolio-category">Static Website</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="website">
                <img src="{{asset('assets/portfolio/webcostum.png')}}" alt="Custom Business Website">
                <div class="portfolio-info">
                      <h3>Aplikasi Bisnis Kustom</h3>
                    <p>Sistem manajemen bisnis berbasis web untuk penanganan data, keuangan, inventaris, dan pemantauan karyawan</p>
                    <span class="portfolio-category">Web Application</span>
                </div>
            </div>
            
            <!-- UI/UX Projects -->
                 <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" alt="Company Profile Website">
                <div class="portfolio-info">
                         <h3>Situs Web Korporat</h3>
                    <p>Situs web profil perusahaan profesional dengan desain modern dan tata letak responsif</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" alt="Library Website">
                <div class="portfolio-info">
                    <h3>Sistem Manajemen Perpustakaan</h3>
                    <p>Situs web komprehensif untuk manajemen katalog perpustakaan dengan antarmuka yang mudah digunakan</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" alt="Culinary Website">
                <div class="portfolio-info">
                    <h3>Situs Web Kuliner</h3>
                    <p>Situs web makanan dan restoran yang menarik dengan menu online dan sistem reservasi</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" alt="Travel Website">
                <div class="portfolio-info">
                    <h3>Situs Web Agen Perjalanan</h3>
                    <p>Situs web perjalanan yang menarik dengan paket tur, sistem pemesanan, dan informasi destinasi</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" alt="Coffee Shop Website">
                <div class="portfolio-info">
                     <h3>Situs Web Kedai Kopi</h3>
                    <p>Situs web modern untuk rantai kedai kopi dengan etalase produk dan pencari lokasi toko</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>

    <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
    <img src="{{asset('portfolio/web-app/sipena.png')}}" alt="Sipena School Management System">
   <div class="portfolio-info">
         <h3>Sipena - Sistem Manajemen Sekolah Digital</h3>
        <p>Platform digital terintegrasi untuk sekolah dengan aplikasi seluler dan dasbor web untuk mendigitalkan proses pembelajaran dan administrasi sekolah</p>
        <span class="portfolio-category">Web Application</span>
          <button class="btn-project-detail" data-project="sipena">See Project Details</button>
    </div>
</div>

<div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
<img src="{{asset('portfolio/web-app/tryoutcpns.png')}}" alt="CPNS Tryout & Learning System">
<div class="portfolio-info">
<h3>Tryout CPNS - Platform Pembelajaran & Ujian</h3>
<p>Platform persiapan ujian CPNS dengan sistem tryout waktu nyata, materi pembelajaran lengkap, dan analisis hasil mendalam</p>
<span class="portfolio-category">Web Application</span>
<button class="btn-project-detail" data-project="cpns-tryout">See Project Details</button>
</div>
</div>

<div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
<img src="{{asset('portfolio/web-app/merawatindonesia.png')}}" alt="MerawatIndonesia Donation Platform">
<div class="portfolio-info">
<h3>Merawat Indonesia - Platform Donasi Digital</h3>
<p>Platform donasi transparan dengan fitur penggalangan dana dan sistem pembayaran otomatis yang terintegrasi dengan Facebook & TikTok Pixel</p>
<span class="portfolio-category">Web Application</span>
<button class="btn-project-detail" data-project="merawat-indonesia">See Project Details</button>
</div>
</div>

<div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
<img src="{{asset('portfolio/web-app/aloja.png')}}" alt="Aloja Investment Platform">
<div class="portfolio-info">
<h3>Aloja - Platform UMKM & Investor</h3>
<p>Platform digital yang menghubungkan UMKM dengan investor melalui kelas mentoring, pitching, dan sistem pembayaran terintegrasi</p>
<span class="portfolio-category">Web Application</span>
<button class="btn-project-detail" data-project="aloja">See Project Details</button>
</div>
</div>

<div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
<img src="{{asset('portfolio/web-app/epic.png')}}" alt="Epic License Management System">
<div class="portfolio-info">
<h3>Epic - Layanan Perizinan Digital</h3>
<p>Sistem perizinan digital terpercaya dengan aplikasi seluler dan web untuk pelacakan waktu nyata dan obrolan langsung dengan petugas</p>
<span class="portfolio-category">Web Application</span>
<button class="btn-project-detail" data-project="epic">See Project Details</button>
</div>
</div>


<div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1" data-category="web-app">
<img src="{{asset('portfolio/web-app/esellexpress.png')}}" alt="Esellexpress Reseller Platform">
<div class="portfolio-info">
<h3>Esellexpress - Platform Reseller & E-commerce</h3>
<p>Sistem e-commerce multi-peran dengan dompet digital untuk reseller, penjual, dan pembeli dengan notifikasi email terintegrasi</p>
<span class="portfolio-category">Web Application</span>
<button class="btn-project-detail" data-project="esellexpress">See Project Details</button>
</div>
</div>

<!-- Project Detail Modals -->
<div id="project-modal" class="project-modal">
    <div class="modal-content-project">
        <span class="close-project-modal">&times;</span>
        <div id="modal-content-body">
            <!-- Content will be dynamically loaded here -->
        </div>
    </div>
</div>

            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" alt="Online Book App">
                <div class="portfolio-info">
                    <h3>Aplikasi Seluler E-Book</h3>
                    <p>Aplikasi seluler yang mudah digunakan untuk membaca dan mengelola buku digital</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" alt="Dashboard Design">
                <div class="portfolio-info">
                    <h3>Dasbor Analitik</h3>
                    <p>Antarmuka dasbor intuitif dengan visualisasi data untuk analitik bisnis</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <div class="col-md-3 mx-1 col-sm-6 portfolio-item section-dark-color1"  data-category="ui-ux">
                <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" alt="Music App Design">
                <div class="portfolio-info">
                   <h3>Aplikasi Streaming Musik</h3>
                    <p>Aplikasi pemutar musik yang ramping dan intuitif dengan rekomendasi yang dipersonalisasi</p>
                    <span class="portfolio-category">UI/UX Design</span>
                </div>
            </div>
            
            <!-- Enhanced Graphic Design Projects with Image Sliders -->
            
            <!-- Burger Bangor Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="burger-bangor">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/burger-bangor/jasa-desain-wipinweb.com-burger-bangor.jpg')}}" alt="Burger Bangor Design 1" class="slide-image">
                        <img src="{{asset('portfolio/burger-bangor/jasa-desain-wipinweb.com-burger-bangor1.jpg')}}" alt="Burger Bangor Design 2" class="slide-image">
                        <img src="{{asset('portfolio/burger-bangor/jasa-desain-wipinweb.com-burger-bangor2.jpg')}}" alt="Burger Bangor Design 3" class="slide-image">
                        <img src="{{asset('portfolio/burger-bangor/jasa-desain-wipinweb.com-burger-bangor3.jpg')}}" alt="Burger Bangor Design 4" class="slide-image">
                        <img src="{{asset('portfolio/burger-bangor/jasa-desain-wipinweb.com-burger-bangor4.jpg')}}" alt="Burger Bangor Design 5" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h3>Identitas Merek Burger Bangor</h3>
                    <p>Desain merek lengkap termasuk logo, menu, dan materi promosi untuk restoran burger</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

            <!-- Bandung City Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="bandung-city">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/bandung-city/jasa-desain-wipinweb.com-bandung-city.jpg')}}" alt="Bandung City Design 1" class="slide-image">
                        <img src="{{asset('portfolio/bandung-city/jasa-desain-wipinweb.com-bandung-city1.jpg')}}" alt="Bandung City Design 2" class="slide-image">
                        <img src="{{asset('portfolio/bandung-city/jasa-desain-wipinweb.com-bandung-city2.jpg')}}" alt="Bandung City Design 3" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                 <h3>Kampanye Pariwisata Kota Bandung</h3>
                    <p>Materi promosi pariwisata yang menampilkan budaya dan daya tarik Bandung</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

            <!-- Jogja City Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="jogja-city">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/jogja-city/jasa-desain-wipinweb.com-jogja-city.jpg')}}" alt="Jogja City Design 1" class="slide-image">
                        <img src="{{asset('portfolio/jogja-city/jasa-desain-wipinweb.com-jogja-city1.jpg')}}" alt="Jogja City Design 2" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                <h3>Desain Warisan Kota Jogja</h3>
                    <p>Desain promosi warisan budaya yang menyoroti landmark bersejarah Yogyakarta</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

            <!-- RSUD KRT Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="rsud-krt">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt.jpg')}}" alt="RSUD KRT Design 1" class="slide-image">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt1.jpg')}}" alt="RSUD KRT Design 2" class="slide-image">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt2.jpg')}}" alt="RSUD KRT Design 3" class="slide-image">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt3.jpg')}}" alt="RSUD KRT Design 4" class="slide-image">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt4.jpg')}}" alt="RSUD KRT Design 5" class="slide-image">
                        <img src="{{asset('portfolio/RSUD-KRT/jasa-desain-wipinweb.com-rsud-krt5.jpg')}}" alt="RSUD KRT Design 6" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h3>Branding Rumah Sakit RSUD KRT</h3>
                    <p>Paket branding layanan kesehatan lengkap termasuk papan nama, formulir, dan materi promosi</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

            <!-- Rumah Makan Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="rumah-makan">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan.jpg')}}" alt="Rumah Makan Design 1" class="slide-image">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan1.jpg')}}" alt="Rumah Makan Design 2" class="slide-image">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan2.jpg')}}" alt="Rumah Makan Design 3" class="slide-image">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan3.jpg')}}" alt="Rumah Makan Design 4" class="slide-image">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan4.jpg')}}" alt="Rumah Makan Design 5" class="slide-image">
                        <img src="{{asset('portfolio/rumah-makan/jasa-desain-wipinweb.com-rumah-makan5.jpg')}}" alt="Rumah Makan Design 6" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                 <h3>Identitas Merek Restoran</h3>
                    <p>Branding restoran tradisional dengan desain menu, papan nama, dan materi promosi</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

            <!-- Surabaya City Project -->
            <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="surabaya-city">
                    <div class="slider-container">
                        <img src="{{asset('portfolio/surabaya-city/jasa-desain-wipinweb.com-surabaya-city.jpg')}}" alt="Surabaya City Design 1" class="slide-image">
                        <img src="{{asset('portfolio/surabaya-city/jasa-desain-wipinweb.com-surabaya-city1.jpg')}}" alt="Surabaya City Design 2" class="slide-image">
                        <img src="{{asset('portfolio/surabaya-city/jasa-desain-wipinweb.com-surabaya-city2.jpg')}}" alt="Surabaya City Design 3" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                  <h3>Promosi Kota Surabaya</h3>
                    <p>Kampanye branding kota modern yang menampilkan perkembangan dan daya tarik Surabaya</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>

               <div class="col-md-3 mx-1 col-sm-6 graphic-portfolio-item section-dark-color1"  data-category="graphic">
                <div class="image-slider" data-project="instagram-content">
                    <div class="slider-container">
                        <img src="{{asset('assets/portfolio/desain-grafis-game-wipin.png')}}" alt="Desain Grafis Game Wipin" class="slide-image">
                        <img src="{{asset('assets/portfolio/desain-feed-instagram-wipin.png')}}" alt="Desain Feed Instagram Wipin" class="slide-image">
                    </div>
                    <button class="slider-nav prev">❮</button>
                    <button class="slider-nav next">❯</button>
                    <div class="slider-indicators">
                        <span class="indicator active"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
                <div class="portfolio-info">
                   <h3>Strategi Konten Instagram</h3>
                    <p>Desain feed Instagram yang kohesif dan menarik secara visual untuk identitas merek</p>
                    <span class="portfolio-category">Graphic Design</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="live-portfolio-section">
    <div class="container live-portfolio-container">
        <div class="section-title">
          <h2>Situs Web Portofolio Aktif</h2>
            <p>Jelajahi situs web portofolio aktif kami yang saat ini berjalan dan melayani bisnis nyata di berbagai industri.</p>
        </div>
        
        <div class="portfolio-links-grid">
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Dexina Advisory Indonesia</p>
                        <a href="https://dexinadvisoryindonesia.com" target="_blank" class="domain">dexinadvisoryindonesia.com</a><br>
                        <small>Business Consulting</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">PT Arunika Seraya Makmur</p>
                        <a href="https://arunikaserayaglobal.com" target="_blank" class="domain">arunikaserayaglobal.com</a><br>
                        <small>Coffee Beans</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">88 Rental Jakarta</p>
                        <a href="https://88rentaljakarta.com" target="_blank" class="domain">88rentaljakarta.com</a><br>
                        <small>Car Rental Service</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Academy Prop Firm</p>
                        <a href="https://academypropfirm.com" target="_blank" class="domain">academypropfirm.com</a><br>
                        <small>Trading Education</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">PT ANEKA SUMBER INTI</p>
                        <a href="https://anekasteelcoil.com" target="_blank" class="domain">anekasteelcoil.com</a> <br>
                        <small>Steel Coil</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Kompas Indonesia</p>
                        <a href="https://kompas-indonesia.com" target="_blank" class="domain">kompas-indonesia.com</a><br>
                        <small>News & Media</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Buku Djaman Baroe</p>
                        <a href="https://bukudjamanbaroe.com" target="_blank" class="domain">bukudjamanbaroe.com</a><br>
                        <small>Book Publishing</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Charcoal Castle</p>
                        <a href="https://charcoalcastle.com" target="_blank" class="domain">charcoalcastle.com</a><br>
                        <small>Manufacturing</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">PT Kausar Yasa Dipta</p>
                        <a href="https://kausaryasadipta.com" target="_blank" class="domain">kausaryasadipta.com</a><br>
                        <small>Construction</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Polindes Laktasi Center</p>
                        <a href="https://polindeslaktasicenter.id" target="_blank" class="domain">polindeslaktasicenter.id</a><br>
                        <small>Healthcare</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Supri Bengkel</p>
                        <a href="https://supribengkel.my.id" target="_blank" class="domain">supribengkel.my.id</a><br>
                        <small>Automotive</small>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Set Course</p>
                        <a href="https://setcourse.my.id" target="_blank" class="domain">setcourse.my.id</a><br>
                        <small>Online Learning</small>
                    </div>
                </div>
            </div>

            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">PT Roka Abadi</p>
                        <a href="https://jasapuingdansampahjakarta.com" target="_blank" class="domain">jasapuingsampahjakarta.com</a><br>
                        <small>Rubble Removal</small>
                    </div>
                </div>
            </div>


            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">PT Agro Raya Timur Group</p>
                        <a href="https://agrorayatimurgroup.com" target="_blank" class="domain">agrorayatimurgroup.com</a><br>
                        <small>Fertilizer Industry</small>
                    </div>
                </div>
            </div>

            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                     <i class="fa-solid fa-print"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Kasho Print</p>
                        <a href="https://kashoprint.com" target="_blank" class="domain">kashoprint.com</a><br>
                        <small>Screen Printing Supplier</small>
                    </div>
                </div>
            </div>


            <div class="portfolio-link-card">
                <div class="portfolio-link-info">
                    <div class="portfolio-link-icon">
                        <i class="fa-solid fa-children"></i>
                    </div>
                    <div class="portfolio-link-content">
                        <p class="pb-0 mb-0" style="font-size: 14px; font-weight:bold;">Wisata Pendidikan</p>
                        <a href="https://wisatapendidikan.com" target="_blank" class="domain">wisatapendidikan.com</a><br>
                        <small>Educational</small>
                    </div>
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
             <h2>Dipercaya Oleh Berbagai Industri</h2>
                <p>Perusahaan dari berbagai sektor telah menaruh kepercayaan mereka pada Wipin untuk memberikan solusi digital berkualitas tinggi.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{asset('assets/portfolio/client-wipin.png')}}" class="img-fluid" alt="Wipin Clients">
            </div>
        </div>
    </div>
</section>

<section id="testimoni">
<div class="container section-dark-color">
<div class="row">
<div class="text-center text-md-start mb-5">
<p class="title-main mb-0 title">Testimoni Google Business</p>
<h2 class="mt-1">
Klien Sangat Puas Dengan<br />Hasil Website
</h2>
</div>
</div>
<div class="row owl-carousel owl-theme">
<div class="card-item  section-dark-color1 item">
<div class="row">
<div class="col-3">
<img src="{{asset('assets/images/avatar1.svg')}}" width="100" height="100" class="avatar" alt="profil testimoni" />
</div>
<div class="col-9 pl-2">
<h3>Aditya</h3>
<small>Pengusaha</small>
</div>
</div>
<div class="row pt-4">
<p>
Tidak pernah kecewa pesan desain di sini, karena hasilnya selalu
di luar ekspektasi, bagusnya kebangetan.
</p>
<img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="ulasan testimoni wipin" />
</div>
</div>
<div class="card-item  section-dark-color1 item">
<div class="row">
<div class="col-3">
<img src="{{asset('assets/images/avatar2.svg')}}" width="100" height="100" class="avatar" alt="profil testimoni" />
</div>
<div class="col-9 pl-2">
<h3>Daffa Darma</h3>
<small>Mahasiswa</small>
</div>
</div>
<div class="row pt-4">
<p>
Terimakasih Wipin, tugas kuliahku jadi. Sempat bingung buatnya gimana, pengerjaannya juga cepat.
</p>
<img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="ulasan testimoni wipin" />
</div>
</div>
<div class="card-item  section-dark-color1 item">
<div class="row">
<div class="col-3">
<img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar" alt="profil testimoni" />
</div>
<div class="col-9 pl-2">
<h3>Salsabila</h3>
<small>Mahasiswa</small>
</div>
</div>
<div class="row pt-4">
<p>
Bisa pilih desain yang aku suka, dan super cepat. Website portofolioku selesai dalam sehari, terimakasih Wipin.
</p>
<img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="ulasan testimoni wipin" />
</div>
</div>
<div class="card-item  section-dark-color1 item">
<div class="row">
<div class="col-3">
<img src="{{asset('assets/images/avatar4.svg')}}" width="100" height="100" class="avatar" alt="profil testimoni" />
</div>
<div class="col-9 pl-2">
<h3>Andre Kurniawan</h3>
<small>Pengusaha</small>
</div>
</div>
<div class="row pt-4">
<p>
Pesan website tidak mengerti apa-apa, jadi konsultasi dulu kemudian dikasih saran yang terbaik.
</p>
<img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="ulasan testimoni wipin" />
</div>
</div>
</div>
<div class="justify-content-center d-flex">
<a href="https://g.co/kgs/PP8cZD" target="_blank" class="btn-main mt-3">Tambah Testimoni</a>
</div>
<img src="{{asset('assets/images/testimoniDesain2.png')}}" class="design1" alt="desain testimoni" />
<img src="{{asset('assets/images/testimoniDesain1.png')}}" class="design2" alt="desain testimoni" />
</div>
</section>

  <section id="faq">
<div class="container">
<img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600" alt="faq wipin" />
<div class="row">
<div class="text-center mb-3">
<p class="title-main title mb-0">FAQ</p>
<h2 class="mt-1">
Pertanyaan yang Sering Diajukan <br> Tentang Jasa Pembuatan Website
</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="accordion accordion-flush row" id="accordionFlushExample">
<div class="col-12 col-md-6">
<div class="accordion-item section-dark-color1">
<h2 class="accordion-header" id="flush-headingOne">
<button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
Bagaimana cara menggunakan jasa Wipin?
</button>
</h2>
<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
<div class="accordion-body">
<p>
Klik <a href="#pricelist">Gunakan Layanan</a> dan klik tombol untuk setiap paket, dan Anda akan diarahkan ke obrolan WA. Selanjutnya, diskusi, pembayaran (DP/pembayaran penuh), pengerjaan, revisi, dan penyelesaian akan dilakukan sesuai kesepakatan.
</p>
</div>
</div>
</div>
<div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
              Bagaimana dengan sistem pembayaran?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Kami menerima pembayaran melalui Paypal, OVO, Dana, ShopeePay, Mandiri, dan BRI. Pembayaran dapat dilakukan dengan dua opsi: <br>
                - Pembayaran penuh <br>
                - Uang muka (DP) 50% dan sisanya dapat dibayarkan saat proyek selesai.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
              Bagaimana jika proyek sudah selesai tapi ada revisi?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Kami memberikan revisi gratis sesuai dengan paket yang dipilih. Jika revisi melebihi batas yang ditentukan, akan ada biaya tambahan per-revisi.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
              Berapa lama waktu pengerjaan proyek?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Pengerjaan dapat diselesaikan secepat 1 hari, tetapi tergantung pada tingkat kesulitan proyek. Biasanya, sebuah proyek selesai dalam 2-4 hari.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading5">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="true" aria-controls="flush-collapse5">
              Teknologi Apa yang Digunakan untuk Pembuatan Website?
            </button>
          </h2>
          <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Untuk Paket Small, Medium, dan Premium, kami menggunakan Wordpress CMS untuk mempercepat proses pembuatan dan memfasilitasi SEO pada setiap halaman website. Untuk pengembangan web kustom untuk mengelola data, kami menggunakan teknologi seperti Laravel, React, Bootstrap, dan Tailwind, menyesuaikan dengan kebutuhan sistem Anda. Anda juga dapat meminta teknologi lain.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading6">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="true" aria-controls="flush-collapse6">
              Apa itu Domain?
            </button>
          </h2>
          <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Domain adalah nama alamat yang digunakan untuk mengakses website Anda di internet, seperti `www.example.com`. Kami menyediakan domain dengan berbagai ekstensi sesuai dengan paket yang dipilih.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading100">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse100" aria-expanded="true" aria-controls="flush-collapse100">
              Apa itu Hosting?
            </button>
          </h2>
          <div id="flush-collapse100" class="accordion-collapse collapse" aria-labelledby="flush-heading100" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Hosting adalah layanan yang menyediakan ruang di server untuk menyimpan file dan data website Anda agar dapat diakses secara online. Kami menawarkan hosting dalam paket kami, dengan atau tanpa akses login cPanel.
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-12 col-md-6">
        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading7">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="true" aria-controls="flush-collapse7">
              Apa itu Email Bisnis?
            </button>
          </h2>
          <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Email bisnis adalah alamat email yang menggunakan domain perusahaan Anda, contohnya, `nama@domainanda.com`. Ini memberikan kesan profesional dan meningkatkan kepercayaan pelanggan.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading8">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="true" aria-controls="flush-collapse8">
              Apa itu Web Responsif?
            </button>
          </h2>
          <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Web responsif adalah desain website yang menyesuaikan tampilan dan tata letaknya agar sesuai dengan berbagai ukuran layar dan perangkat, seperti desktop, tablet, dan ponsel. Ini memastikan pengalaman pengguna yang optimal di semua perangkat.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading9">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="true" aria-controls="flush-collapse9">
              Apa itu Keamanan SSL?
            </button>
          </h2>
          <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                SSL (Secure Sockets Layer) adalah protokol keamanan yang mengenkripsi data antara server dan peramban pengunjung untuk melindungi informasi sensitif. Website Anda akan ditandai dengan ikon gembok di bilah alamat peramban.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading10">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="true" aria-controls="flush-collapse10">
              Apa itu SEO?
            </button>
          </h2>
          <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                SEO (Search Engine Optimization) adalah proses mengoptimalkan website Anda agar muncul di hasil mesin pencari seperti Google. Ini termasuk mengatur kata kunci, konten, dan teknik lainnya untuk meningkatkan visibilitas website Anda.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading11">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="true" aria-controls="flush-collapse11">
              Apa itu Google Analytics?
            </button>
          </h2>
          <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Google Analytics adalah alat analisis web yang menyediakan data tentang pengunjung website Anda, termasuk jumlah pengunjung, durasi kunjungan, dan sumber lalu lintas. Ini membantu Anda memahami perilaku pengunjung dan mengukur kinerja website Anda.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading12">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="true" aria-controls="flush-collapse12">
              Apa itu Desain Mockup?
            </button>
          </h2>
          <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Desain mockup adalah representasi visual dari desain website saat dilihat di ponsel dan desktop. Kami menyediakan desain mockup setelah website selesai, dan Anda dapat memublikasikannya di media sosial sebagai cerita atau postingan untuk menunjukkan bahwa Anda memiliki website menggunakan desain mockup yang kami sediakan.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item section-dark-color1">
          <h2 class="accordion-header" id="flush-heading13">
            <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="true" aria-controls="flush-collapse13">
              Apa itu Google Ads?
            </button>
          </h2>
          <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <p>
                Google Ads adalah platform iklan berbayar dari Google yang memungkinkan Anda menampilkan iklan di hasil pencarian Google dan di website lain. Iklan dapat disesuaikan berdasarkan kata kunci, lokasi, dan demografi untuk menjangkau audiens yang tepat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Call to Action Section -->
<span id="pricelist"></span>
<section id="contact-cta" class="py-5 section-dark-color">
    <div class="container text-center">
        <h2>Siap Memulai Proyek Anda?</h2>
        <p class="mb-4">Hubungi kami hari ini untuk mendiskusikan ide dan kebutuhan Anda. Kami di sini untuk membantu Anda mewujudkan visi Anda.</p>
        <a href="https://wa.me/6285198330157" class="btn-main" target="_blank">Hubungi Kami Sekarang</a>
    </div>
</section>
@endsection

@push('script')
<script>
$(document).ready(function(){

    const projectData = {
        'sipena': {
            title: 'Sipena - Sistem Manajemen Sekolah Digital',
            type: 'Platform Teknologi Pendidikan',
            overview: 'Sipena adalah platform digital komprehensif yang mengintegrasikan seluruh ekosistem sekolah melalui aplikasi seluler dan dasbor web. Sistem ini memungkinkan digitalisasi proses pembelajaran, administrasi sekolah, dan komunikasi antar pemangku kepentingan pendidikan untuk menciptakan lingkungan belajar yang lebih efisien dan modern.',
            features: [
                'Sistem multi-platform (Seluler + Web)',
                'Dasbor berbasis peran pengguna',
                'Media pembelajaran interaktif',
                'Sistem pembayaran digital terintegrasi',
                'Peminjaman dan pengembalian buku otomatis',
                'Portal komunikasi guru-siswa-orang tua',
                'Laporan akademik dan rapor digital',
                'Manajemen jadwal dan absensi',
                'Sistem perizinan siswa online',
                'Koperasi dan kantin digital'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Firebase', 'REST API', 'Flutter'],
            users: [
                'Admin - Manajemen sistem dan pengguna yang komprehensif',
                'Guru - Manajemen kelas, materi pembelajaran, dan penilaian',
                'Siswa - Akses ke materi, pengumpulan tugas, dan melihat nilai',
                'Koperasi Sekolah - Manajemen produk dan transaksi',
                'Kantin - Sistem pemesanan dan pembayaran makanan'
            ],
            demoUrl: null,
            demoNote: 'Sistem Privat - Tersedia untuk klien institusi pendidikan'
        },
        'cpns-tryout': {
            title: 'Tryout CPNS - Platform Pembelajaran & Ujian',
            type: 'Sistem Manajemen Pembelajaran & Ujian Online',
            overview: 'Platform pembelajaran dan ujian online yang dirancang khusus untuk persiapan tes CPNS. Sistem ini menyediakan materi pembelajaran lengkap, bank soal yang komprehensif, dan fitur tryout dengan analisis mendalam untuk membantu para calon mencapai tujuan mereka dalam melewati ujian CPNS.',
            features: [
                'Mesin ujian online adaptif dengan timer',
                'Manajemen bank soal yang komprehensif',
                'Simulasi ujian waktu nyata sesuai standar CPNS',
                'Analisis performa dan rekomendasi belajar',
                'Pelacakan kemajuan belajar individu',
                'Kategorisasi materi berdasarkan topik',
                'Desain responsif untuk semua perangkat',
                'Sistem penilaian otomatis dengan pembahasan',
                'Riwayat pengerjaan yang tersimpan permanen',
                'Rekomendasi video YouTube yang relevan'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Chart.js', 'YouTube API'],
            users: [
                'Admin - Manajemen platform dan pemantauan sistem',
                'Pengguna/Peserta - Akses ke materi pembelajaran dan tryout CPNS'
            ],
            demoUrl: 'https://jenius-cpns.com/',
            demoNote: 'Platform aktif yang melayani ribuan peserta tryout CPNS'
        },
        'merawat-indonesia': {
            title: 'Merawat Indonesia - Platform Donasi Digital',
            type: 'Sistem Manajemen Donasi & Dampak Sosial',
            overview: 'Merawat Indonesia adalah platform donasi digital yang menghubungkan para donatur dengan lembaga-lembaga amal terverifikasi di seluruh Indonesia. Sistem ini dilengkapi dengan fitur penggalangan dana, pembayaran otomatis dan manual, serta integrasi pixel untuk pelacakan yang akurat. Platform ini menjamin transparansi, akuntabilitas, dan penyaluran bantuan yang efisien kepada mereka yang membutuhkan.',
            features: [
                'Sistem kontrol akses multi-peran',
                'Integrasi payment gateway dengan Tripay',
                'Fitur penggalangan dana dengan sistem komisi',
                'Pembayaran otomatis dan manual',
                'Pelacakan donasi dan kampanye secara waktu nyata',
                'Sistem verifikasi untuk lembaga penggalang dana',
                'Laporan pencairan dana yang transparan',
                'Integrasi Facebook Pixel dan TikTok Pixel',
                'Notifikasi email otomatis',
                'Manajemen kampanye dan berita'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Tripay Payment', 'Facebook Pixel', 'TikTok Pixel'],
            users: [
                'Admin - Manajemen platform, verifikasi kampanye, dan pemantauan transaksi',
                'Penggalang Dana - Pembuatan kampanye, pembaruan berita, dan pengajuan pencairan dana',
                'Donatur - Berdonasi pada kampanye dan berpartisipasi dalam program penggalangan dana'
            ],
            demoUrl: 'https://merawatindonesia.com/',
            demoNote: 'Platform aktif yang mengelola donasi untuk berbagai kampanye sosial di Indonesia'
        },
         'aloja': {
            title: 'Aloja - Platform UMKM & Investor',
            type: 'Sistem Fasilitasi Investasi & Pengembangan UMKM',
            overview: 'Aloja adalah platform digital yang memfasilitasi hubungan antara UMKM dan investor untuk pertumbuhan bisnis yang saling menguntungkan. Platform ini menyediakan kelas mentoring, acara pitching, dan sistem pembayaran terintegrasi dengan Midtrans. UMKM dapat mengembangkan bisnisnya melalui bimbingan dan peluang investasi, sementara investor dapat menemukan peluang investasi yang potensial.',
            features: [
                'Sistem registrasi multi-peran (Admin, UMKM Basic, UMKM Exclusive, Investor)',
                'Kelas mentoring online gratis dan berbayar',
                'Acara pitching untuk peluang investasi',
                'Integrasi payment gateway dengan Midtrans',
                'Manajemen profil untuk UMKM',
                'Obrolan langsung antara UMKM Exclusive dan Investor',
                'Analisis dokumen arus kas bisnis',
                'Dasbor pemantauan untuk semua peran',
                'Sistem notifikasi email',
                'Manajemen transaksi pembayaran'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Midtrans Payment', 'Chart.js'],
            users: [
                'Admin - Manajemen kelas mentoring, acara pitching, dan pemantauan semua aktivitas',
                'UMKM Basic - Akses ke kelas mentoring gratis dengan opsi upgrade berbayar',
                'UMKM Exclusive - Akses penuh ke mentoring, pitching gratis, dan komunikasi langsung dengan investor',
                'Investor - Mencari UMKM potensial berdasarkan analisis bisnis dan latar belakang'
            ],
            demoUrl: 'https://aloja.id',
            demoNote: 'Platform aktif yang menghubungkan UMKM dengan investor di Indonesia'
        },
        'esellexpress': {
            title: 'Esellexpress - Platform Reseller & E-commerce',
            type: 'Sistem E-commerce Multi-Peran dengan Dompet Digital',
            overview: 'Esellexpress adalah platform e-commerce inovatif yang memungkinkan sistem reseller, penjual, dan pembeli dalam satu ekosistem terintegrasi. Platform ini dilengkapi dengan dompet digital untuk kemudahan transaksi, sistem notifikasi email, dan manajemen produk yang komprehensif untuk mendukung bisnis online bertingkat.',
            features: [
                'Sistem login multi-peran (Reseller, Penjual, Pembeli)',
                'Dompet digital terintegrasi untuk penarikan dan pengisian',
                'Manajemen produk dan inventaris',
                'Sistem pembayaran dan transaksi otomatis',
                'Toko online yang dapat disesuaikan untuk penjual',
                'Sistem persentase keuntungan otomatis',
                'Manajemen pengiriman dan pelacakan',
                'Dasbor analitik untuk setiap peran',
                'Notifikasi email waktu nyata',
                'Sistem komisi bertingkat'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Chart.js'],
            users: [
                'Reseller - Manajemen pengguna, manajemen produk, pembayaran dompet digital, dan transaksi',
                'Penjual - Membuat toko online sendiri dan menjual produk dengan sistem bagi hasil',
                'Pembeli - Membeli produk dari berbagai toko penjual yang tersedia'
            ],
            demoUrl: 'https://esellexpress.com/',
            demoNote: 'Platform e-commerce aktif dengan sistem reseller terintegrasi'
        },
        'epic': {
            title: 'Epic - Layanan Perizinan Digital Terpercaya',
            type: 'Sistem Manajemen Perizinan Digital',
            overview: 'Epic adalah layanan digital terpercaya untuk mengurus berbagai jenis perizinan dengan sistem yang lebih instan dan efisien. Platform ini tersedia dalam bentuk website dan aplikasi seluler, dilengkapi dengan fitur pelacakan waktu nyata, obrolan langsung dengan petugas, dan kemudahan mengunduh serta mencetak dokumen perizinan.',
            features: [
                'Sistem multi-platform (Website + Aplikasi Seluler)',
                'Koreksi data perizinan online',
                'Pelacakan status perizinan secara waktu nyata',
                'Mengunduh dan mencetak dokumen perizinan',
                'Obrolan langsung dengan petugas terkait',
                'Dasbor berbasis peran pengguna',
                'Sistem notifikasi kemajuan perizinan',
                'Unggah dokumen persyaratan',
                'Riwayat pengajuan perizinan',
                'Sistem verifikasi dan audit dokumen'
            ],
            techStack: ['Laravel', 'jQuery', 'Ajax', 'Bootstrap', 'MySQL', 'Flutter'],
            users: [
                'Admin - Manajemen sistem dan pemantauan secara keseluruhan',
                'Operator - Input dan pemrosesan data perizinan',
                'Verifier - Verifikasi kelengkapan dan kebenaran dokumen',
                'Auditor - Audit dan validasi proses perizinan',
                'Surveyor - Survei lapangan untuk jenis perizinan tertentu',
                'Pemohon - Pengajuan dan pelacakan status perizinan'
            ],
            demoUrl: null,
            demoNote: 'Sistem privat untuk instansi dan lembaga pemerintah terkait perizinan'
        }
    };

    // Modal functionality
    $('.btn-project-detail').on('click', function() {
        const projectKey = $(this).data('project');
        const project = projectData[projectKey];
        
        if (project) {
            showProjectModal(project);
        }
    });

    function showProjectModal(project) {
        const modalContent = `
            <div class="project-header">
                <h2>${project.title}</h2>
                <span class="project-type">${project.type}</span>
            </div>
            <div class="project-body">
                <div class="project-overview">
                    <h3><span class="icon-overview"></span> Project Overview</h3>
                    <p>${project.overview}</p>
                </div>
                
                <div class="project-details-grid">
                    <div class="detail-section">
                        <h4><span class="icon-features"></span> Key Features</h4>
                        <ul>
                            ${project.features.map(feature => `<li>${feature}</li>`).join('')}
                        </ul>
                    </div>
                    
                    <div class="detail-section">
                        <h4><span class="icon-users"></span> User Roles</h4>
                        <ul>
                            ${project.users.map(user => `<li>${user}</li>`).join('')}
                        </ul>
                    </div>
                </div>
                
                <div class="detail-section">
                    <h4><span class="icon-tech"></span> Technology Stack</h4>
                    <div class="tech-stack">
                        ${project.techStack.map(tech => `<span class="tech-item">${tech}</span>`).join('')}
                    </div>
                </div>
                
                ${project.demoUrl ? `
                    <div class="live-demo-section">
                        <h4><span class="icon-demo"></span> Live Demo Available</h4>
                        <p>${project.demoNote}</p>
                        <a href="${project.demoUrl}" target="_blank" class="btn-live-demo">
                            Visit Live Platform →
                        </a>
                    </div>
                ` : `
                    <div class="live-demo-section">
                        <h4><span class="icon-demo"></span> Demo Access</h4>
                        <p>${project.demoNote}</p>
                    </div>
                `}
            </div>
        `;
        
        $('#modal-content-body').html(modalContent);
        $('#project-modal').fadeIn(300);
        $('body').css('overflow', 'hidden');
    }

    // Close modal functionality
    $('.close-project-modal, #project-modal').on('click', function(e) {
        if (e.target === this) {
            $('#project-modal').fadeOut(300);
            $('body').css('overflow', 'auto');
        }
    });

    // Close modal on Escape key
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            $('#project-modal').fadeOut(300);
            $('body').css('overflow', 'auto');
        }
    });
});
</script>
<script>
    $(document).ready(function(){
    // Fix untuk default filter - tampilkan hanya website category saat page load
    function initializePortfolio() {
        // Hide semua items terlebih dahulu
        $('.portfolio-item, .graphic-portfolio-item').hide();
        
        // Show hanya website category items
        $('.portfolio-item[data-category="website"], .graphic-portfolio-item[data-category="website"]').show();
        
        // Pastikan button website active
        $('.filter-btn').removeClass('active');
        $('.filter-btn[data-filter="website"]').addClass('active');
    }
    
    // Jalankan saat document ready
    initializePortfolio();
    
    // Portfolio filtering dengan perbaikan
    $('.filter-btn').on('click', function(){
        var category = $(this).data('filter');
        
        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        
        // Filter items
        $('.portfolio-item, .graphic-portfolio-item').hide();
        $('.portfolio-item[data-category="'+category+'"], .graphic-portfolio-item[data-category="'+category+'"]').show();
    });

    // Rest of your existing code...
    // Image Slider Functionality
    $('.graphic-portfolio-item').each(function() {
        const $slider = $(this);
        const $container = $slider.find('.slider-container');
        const $images = $slider.find('.slide-image');
        const $indicators = $slider.find('.indicator');
        const $prevBtn = $slider.find('.slider-nav.prev');
        const $nextBtn = $slider.find('.slider-nav.next');
        
        let currentIndex = 0;
        const totalImages = $images.length;

        function updateSlider() {
            const translateX = -currentIndex * 100;
            $container.css('transform', `translateX(${translateX}%)`);
            
            $indicators.removeClass('active');
            $indicators.eq(currentIndex).addClass('active');
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalImages;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateSlider();
        }

        // Navigation buttons
        $nextBtn.on('click', function(e) {
            e.stopPropagation();
            nextSlide();
        });

        $prevBtn.on('click', function(e) {
            e.stopPropagation();
            prevSlide();
        });

        // Indicator clicks
        $indicators.on('click', function(e) {
            e.stopPropagation();
            currentIndex = $(this).index();
            updateSlider();
        });

        // Auto-slide (optional)
        setInterval(function() {
            if (!$slider.is(':hover')) {
                nextSlide();
            }
        }, 5000);
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