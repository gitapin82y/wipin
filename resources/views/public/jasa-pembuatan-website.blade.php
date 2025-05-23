@extends('layouts.public')

@section('title', 'Jasa Pembuatan Website Murah Berkualitas - Wipin')

@section('meta_description', 'Jasa pembuatan website murah berkualitas dengan profesionalitas developer mampu memenuhi keinginan atau kebutuhan website untuk bisnis maupun personal')

@section('meta_keywords', 'wipin, jasa pembuatan website,jasa pembuatan website murah,website untuk bisnis')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'id_ID')

@section('meta_og_title', 'Jasa Pembuatan Website Murah Berkualitas - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/jasa-pembuatan-website')

@section('meta_og_description', 'Jasa pembuatan website murah berkualitas dengan profesionalitas developer mampu memenuhi keinginan atau kebutuhan website untuk bisnis maupun personal')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Jasa Pembuatan Website Murah Berkualitas - Wipin')

@section('meta_twitter_description', 'Jasa pembuatan website murah berkualitas dengan profesionalitas developer mampu memenuhi keinginan atau kebutuhan website untuk bisnis maupun personal')

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
              Jasa
              <span class="gradient">Pembuatan Website</span> Murah Berkualitas
            </h1>
            <p class="mt-4 mb-5">
              Jasa pembuatan website murah berkualitas dengan profesionalitas developer mampu memenuhi keinginan atau kebutuhan website untuk bisnis maupun personal
            </p>
            <a href="#pricelist" class="btn-main">Gunakan Jasa</a>
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

<section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="layanan desain wipin" />
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-up">
          <p class="title-main title mb-0">Benefit Wipin</p>
          <h2 class="mt-1">
            Mengapa Harus Mengunakan<br />Jasa Pembuatan Website di Wipin?
          </h2>
        </div>
        </div>
        <div class="row justify-content-around">
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Gratis Konsultasi</h3>
            <p>
              Jika anda masih bingung tidak perlu sungkan untuk konsultasi dengan kami mengenai
              project anda untuk mencapai tujuan yang terbaik
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Harga Bersahabat</h3>
            <p>
              Tidak perlu khawatir soal harga anda bisa negosiasi dahulu dan
              anda bisa membayar 50% diawal jika belom memiliki cukup anggaran
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Terpercaya</h3>
            <p>
              Wipin telah mendapat ratusan review bintang 5/5 di Google Bisnis
              dan ratusan portfolio yang dapat anda lihat.
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Lebih Cepat</h3>
            <p>
              Loading website yang baik tidak lebih dari 2 detik, wipin mampu mengoptimalkan performa website
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Gratis Domain</h3>
            <p>
              Anda bisa request nama domain dan tidak perlu lebih dari 100k hanya untuk membeli domain
            </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Gratis Hosting</h3>
            <p>
              Anda tidak perlu mengeluarkan budget lebih dari 500k hanya untuk membeli hosting sendiri, kami memberikan free hosting 
            </p>
          </div>
      </div>
    </div>
  </section>

    <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Harga Jasa Website</p>
          <h2 class="my-2">
            Jasa Pembuatan Website Termurah
          </h2>
          <p class="mt-3">
            Sesuaikan paket harga jasa pembuatan website dibawah ini dengan budget dan kebutuhan anda. <br> Anda juga dapat konsultasi kepada admin wipin secara gratis untuk penawaran dan solusi yang tepat. <a href="https://api.whatsapp.com/send?phone=6285198330157" class="title-main" target="_blank">Konsultasi Sekarang</a>
            </p>   
            
            <p class="mt-3">
              Paket Small, Medium, Premium dibuat menggunakan teknologi CMS wordpress, dengan masa aktif website minimum 1 tahun.
            </p>        

        </div>
      </div>
      <div class="row justify-content-around">
        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3" data-aos="fade-up">
          <h3>Paket Small</h3>
          <p class="fw-light">Cocok untuk keperluan website pribadi, portfolio, landing page</p>
          <p class="fw-bold m-0">Harga Paket</p>
          <p><span>Rp 50.000 </span><small>/Bulan</small></p>
          <ul class="p-0">
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 1 Halaman <small class="fw-light">(tambah? 100k perhalaman)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> Free Iklan Google Ads</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Revisi 5x</li>
                        <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Optimasi Speed <small class="fw-light">(high perform)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> Free Desain Mockup</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Hosting <small class="fw-light">(tanpa akses login cpanel)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> Email Bisnis <small class="fw-light">(nama@domain.com)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Responsive Web <small class="fw-light">(tampilan sudah menyesuaikan device)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> Fitur Blog <small class="fw-light">(Free 4 Artikel)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Integrasi <small class="fw-light">(whatsapp, google maps)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> SEO Friendly</li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> Google Analytics <small class="fw-light">(analisa visitor web)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Garansi Selamanya</li>
          </ul>
          <p class="fw-light mt-4 desc">Masa aktif minimum 1 tahun, perpanjang hanya 400k pertahun</p>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Pembuatan%20Web%20Paket%20Small
        " class="btn-main btn-bottom" target="_blank">Cek Harga/Tahun</a>
        </div>

        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3" data-aos="fade-up">
          <h3>Paket Medium</h3>
          <p class="fw-light">Cocok untuk keperluan bisnis menengah seperti web promosi, web umkm</p>
          <p class="fw-bold m-0 text-warning">Diskon 20%</p>
          <p class="line-through mb-0">Rp 100.000 <small>/Bulan</small></p>
          <p><span>Rp 80.000 </span><small>/Bulan</small></p>
          <ul class="p-0">
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 4 Halaman <small class="fw-light">(tambah? 100k perhalaman)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> Free Iklan Google Ads</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Revisi 10x</li>
                         <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Optimasi Speed <small class="fw-light blink text-warning">(2x lebih cepat)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> Free Desain Mockup</li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Hosting <small class="fw-light">(tanpa akses login cpanel)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="silang"> Free 1 Email Bisnis <small class="fw-light blink text-warning">(nama@domain.com)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Responsive Web <small class="fw-light">(tampilan sudah menyesuaikan device)</small></li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="centang"> Fitur Blog <small class="fw-light">(Free 4 Artikel)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Integrasi <small class="fw-light">(whatsapp, google maps, form email)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> SEO Friendly</li>
            <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> Google Analytics <small class="fw-light">(analisa visitor web)</small></li>
            <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Garansi Selamanya</li>
          </ul>
          <p class="fw-light mt-4 desc">Masa aktif minimum 1 tahun, perpanjang hanya 400k pertahun</p>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Pembuatan%20Web%20Paket%20Medium
        " class="btn-main btn-bottom" target="_blank">Cek Harga/Tahun</a>
        </div>

        <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3"  data-aos="fade-up">
          <h3>Paket Premium</h3>
          <p class="fw-light">Cocok untuk keperluan bisnis profesional,
            e-commerce, company profile, portal berita</p>
            <p class="fw-bold m-0 text-warning">Diskon 32% 
              <small class="blink text-warning">( TERLARIS )</small>
            </p>
            <p class="line-through mb-0">Rp 220.000 <small>/Bulan</small></p>
            <p><span>Rp 150.000 </span><small>/Bulan</small></p>
            <ul class="p-0">
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 8 Halaman <small class="fw-light">(tambah? 100k perhalaman)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Iklan Google Ads</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Revisi 99x</li>
                           <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Optimasi Speed <small class="fw-light blink text-warning">(10x lebih cepat)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Desain Mockup</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Hosting <small class="fw-light blink text-warning">(akses login cpanel)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 5 Email Bisnis <small class="fw-light blink text-warning">(nama@domain.com)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Responsive Web <small class="fw-light">(tampilan sudah menyesuaikan device)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Blog <small class="fw-light blink text-warning">(Free 4 Artikel)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> SEO Friendly</li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Integrasi <small class="fw-light">(whatsapp, google maps, form email, translate bahasa)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Google Analytics <small class="fw-light">(analisa visitor web)</small></li>
              <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Garansi Selamanya</li>
            </ul>
            <p class="fw-light mt-4 desc">Masa aktif minimum 1 tahun, perpanjang hanya 400k pertahun</p>
            <a href="
            https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Pembuatan%20Web%20Paket%20Premium
          " class="btn-main btn-bottom" target="_blank">Cek Harga/Tahun</a>
          </div>
     
          <div class="card-item show-popup section-dark-color1 col-12 col-md-6 col-lg-3"  data-aos="fade-up">
            <h3>Paket Business</h3>
            <p class="fw-light">Cocok untuk website dengan fitur tingkat lanjut dengan menu website lebih banyak</p>
              <p class="fw-bold m-0">Harga Paket</p>
              <p><span>Rp 250.000 </span><small>/Bulan</small></p>
              <ul class="p-0">
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 14 Halaman <small class="fw-light">(tambah? 100k perhalaman)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Iklan Google Ads</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Revisi 99x</li>
                             <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Optimasi Speed <small class="fw-light blink text-warning">(10x lebih cepat)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Desain Mockup</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Domain <small class="fw-light">(.com, .sch.id, .ac.id, .web.id, .shop)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Hosting <small class="fw-light blink text-warning">(akses login cpanel)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free 5 Email Bisnis <small class="fw-light blink text-warning">(nama@domain.com)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Responsive Web <small class="fw-light">(tampilan sudah menyesuaikan device)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Blog <small class="fw-light blink text-warning">(Free 8 Artikel)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> SEO Friendly</li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Fitur Integrasi <small class="fw-light">(whatsapp, google maps, form email, translate bahasa, live chat)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Google Analytics <small class="fw-light">(analisa visitor web)</small></li>
                <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Garansi Selamanya</li>
              </ul>
              <p class="fw-light mt-4 desc">Masa aktif minimum 1 tahun, perpanjang hanya 400k pertahun</p>
              <a href="
              https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Pembuatan%20Web%20Paket%20Business
            " class="btn-main btn-bottom" target="_blank">Cek Harga/Tahun</a>
            </div>    
      </div>
        <p class="mt-3 text-center">
          Jika Terdapat beberapa kata yang tidak anda pahami
          <a href="#faq" class="title-main">FAQ</a> Dapat membantu anda
      </p>  
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="portfolio wipin" />
       <div class="row mb-5">
        <div class="col-md-8 col-12">
          <div class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left">
            <p class="title-main mb-0 title">Portfolio</p>
            <h2 class="mt-1">
              Hasil Proyek Wipin dari Berbagai Industri
            </h2>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="justify-content-md-end justify-content-center d-flex">
            <a href="/portfolio" class="btn-main mt-3">Lihat Semua</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center px-3 px-md-0">
      <div class="owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350" alt="jasa pembuatan website company profile">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350" alt="jasa desain website dashboard">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
            alt="jasa pembuatan website perpustakaan">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350" alt="jasa pembuatan website kuliner">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350" alt="jasa pembuatan website travel">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350" alt="jasa desain web starbuks">
        </div>
      </div>
    </div>
  </section>

  <section id="penghargaan">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="penghargaan background desain" />
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main title mb-0">3 Penghargaan Terbaru</p>
          <h2 class="mt-1">
            Sertifikat yang Berhasil Diraih Wipin<br />
            Pada Tingkat Nasional
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara1">
          <img src="{{asset('assets/icons/medal1.svg')}}" width="100" height="50" alt="penghargaan juara 1 web design wipin" />
          <h3 class="my-3">Juara 1 Desain Web</h3>
          <p>
            Diadakan oleh universitas teknologi yogyakarta dengan tema lomba "Ragam Nusantara" pada tanggal 5 Juli..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara2">
          <img src="{{asset('assets/icons/medal3.svg')}}" width="100" height="50" alt="penghargaan juara desain ui ux wipin" />
          <h3 class="my-3">Juara 2 Desain UI UX</h3>
          <p>
            Diadakan oleh lumintulogic yaitu perusahaan teknologi informasi yang ada pada yogyakarta dengan..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara4">
          <img src="{{asset('assets/icons/medal2.svg')}}" width="100" height="50" alt="penghargaan desain web wipin" />
          <h3 class="my-3">Juara Favorit Web</h3>
          <p>
            Diadakan oleh Politeknik Negeri Bali dalam kegiatan INTECH FEST (information and Technology..
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="testimoni">
    <div class="container section-dark-color">
      <div class="row">
        <div class="text-center text-md-start mb-5">
          <p class="title-main mb-0 title">Testimoni Google Bisnis</p>
          <h2 class="mt-1">
            Klien Sangat Puas Dengan<br />Hasil Website
          </h2>
        </div>
      </div>
      <div class="row owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar1.svg')}}" width="100" height="100" class="avatar" alt="profile testimoni" />
            </div>
            <div class="col-9 pl-2">
              <h3>Aditya</h3>
              <small>Pengusaha</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Ga pernah kecewa pesen desain disini, karena hasilnya selalu di
              luar ekspektasi bagus parah.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar2.svg')}}" width="100" height="100" class="avatar" alt="profile testimoni" />
            </div>
            <div class="col-9 pl-2">
              <h3>Daffa Darma</h3>
              <small>Mahasiswa</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Makasih wipin tugas kuliah saya jadi kelar bingung cara buatnya prosesnya cepat juga
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar" alt="profile testimoni" />
            </div>
            <div class="col-9 pl-2">
              <h3>Salsabila</h3>
              <small>Mahasiswa</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Bisa milih desain yang aku suka trus juga cepet banget sehari
              udah jadi web portfolio aku, thanks wipin
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar4.svg')}}" width="100" height="100" class="avatar" alt="profile testimoni" />
            </div>
            <div class="col-9 pl-2">
              <h3>Andre Kurniawan</h3>
              <small>Pengusaha</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Pesen buat website karena gangerti apa-apa jadi konsul dulu
              terus dikasih saran terbaik
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star" alt="review testimoni wipin" />
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
            Pertanyaan Umum <br> Mengenai Jasa Pembuatan Website
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="accordion accordion-flush row" id="accordionFlushExample">
          <div class="col-12 col-md-6">
            <!-- Pertanyaan Umum -->
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  Bagaimana cara menggunakan jasa wipin?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Klik <a href="#pricelist">Gunakan Jasa</a> dan klik button masing-masing paket lalu akan diarahkan ke chat WA. Selanjutnya, diskusi, pembayaran (DP/full payment), proses, revisi, dan finishing akan dilakukan sesuai dengan kesepakatan.
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
                    - Full payment <br>
                    - DP 50% dan kekurangan dapat dibayar ketika proyek sudah selesai.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                  Bagaimana jika project selesai namun ada revisi?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Kami memberikan revisi gratis sesuai dengan paket yang dipilih. Jika revisi melebihi batas yang ditentukan, akan ada tambahan biaya per-revisi.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  Berapa lama pengerjaan project?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Pengerjaan bisa selesai dalam waktu secepat 1 hari, namun bergantung pada tingkat kesulitan proyek. Biasanya, proyek selesai dalam waktu 2-4 hari.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="true" aria-controls="flush-collapse5">
                  Apa Teknologi Pembuatan Website Yang Dipakai?
                </button>
              </h2>
              <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Pada Paket Small, Medium, Premium kami menggunakan CMS wordpress agar proses pembuatan cepat dan mempermudah SEO di tiap halaman website, jika web custom untuk kebutuhan mengelola data kami menggunakan teknologi laravel, react, bootstrap, tailwind menyesuaikan dengan kebutuhan sistem anda juga bisa request teknologi lain. 
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
                    Domain adalah nama alamat yang digunakan untuk mengakses website Anda di internet, seperti `www.contoh.com`. Kami menyediakan domain dengan berbagai ekstensi sesuai paket yang dipilih.
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
                    Hosting adalah layanan yang menyediakan ruang di server untuk menyimpan file dan data website Anda agar dapat diakses secara online. Kami menawarkan hosting dalam paket, dengan atau tanpa akses login ke cPanel.
                  </p>
                </div>
              </div>
            </div>
  
          </div>
  
          <div class="col-12 col-md-6">
            <!-- Penjelasan Istilah -->
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading7">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="true" aria-controls="flush-collapse7">
                  Apa itu Email Bisnis?
                </button>
              </h2>
              <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Email bisnis adalah alamat email yang menggunakan domain perusahaan Anda, misalnya `nama@domainanda.com`. Ini memberikan kesan profesional dan meningkatkan kepercayaan pelanggan.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading8">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="true" aria-controls="flush-collapse8">
                  Apa itu Responsive Web?
                </button>
              </h2>
              <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Responsive web adalah desain website yang menyesuaikan tampilan dan layoutnya agar sesuai dengan berbagai ukuran layar dan perangkat, seperti desktop, tablet, dan ponsel. Ini memastikan pengalaman pengguna yang optimal di semua perangkat.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-heading9">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="true" aria-controls="flush-collapse9">
                  Apa itu SSL Security?
                </button>
              </h2>
              <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    SSL (Secure Sockets Layer) adalah protokol keamanan yang mengenkripsi data antara server dan browser pengunjung untuk melindungi informasi sensitif. Website Anda akan ditandai dengan ikon gembok di bilah alamat browser.
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
                    SEO (Search Engine Optimization) adalah proses mengoptimalkan website Anda agar muncul di hasil pencarian mesin pencari seperti Google. Ini mencakup pengaturan kata kunci, konten, dan teknik lain untuk meningkatkan visibilitas website Anda.
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
                    Google Analytics adalah alat analisis web yang menyediakan data tentang pengunjung website Anda, termasuk jumlah pengunjung, durasi kunjungan, dan sumber lalu lintas. Ini membantu Anda memahami perilaku pengunjung dan mengukur kinerja website.
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
                    Desain mockup adalah gambaran desain website ketika dibuka di handphone dan desktop, desain mockup kami berikan ketika website sudah jadi, anda bisa mempublish di media sosial berupa story atau posting bahwa telah memiliki website menggunakan desain mockup yang kita berikan. 
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
                    Google Ads adalah platform periklanan berbayar dari Google yang memungkinkan Anda untuk menampilkan iklan di hasil pencarian Google dan di situs web lain. Iklan dapat disesuaikan berdasarkan kata kunci, lokasi, dan demografi untuk menjangkau audiens yang tepat.
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
          <h3 class="modal-title fs-5">Juara 1 Desain Web</h3>
          <button type="button" aria-label="close modal" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Diadakan oleh universitas teknologi yogyakarta dengan tema lomba "Ragam Nusantara" pada tanggal 5 Juli
            sampai 26 Juli dan diumumkan pada tanggal 30 Juli 2021 kami berhasil meraih juara 1 tingkat nasional.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="juara2" tabindex="-1" aria-labelledby="juara2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">Juara 2 Desain UI UX</h3>
          <button type="button" class="btn-close" aria-label="close modal" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Diadakan oleh lumintulogic yaitu perusahaan teknologi informasi yang ada pada yogyakarta dengan tema
            redesign UI/UX web company profile lumintulogic yang dimana lomba tersebut dimulai pada tanggal 6 Januari
            sampai 20 Januari dan pada tanggal 23 Januari 2022 kami diumumkan sebagai juara 2 di tingkat nasional.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="juara4" tabindex="-1" aria-labelledby="juara4" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content section-dark-color1">
        <div class="modal-header">
          <h3 class="modal-title fs-5">Juara Favorit Web</h3>
          <button type="button" class="btn-close" aria-label="close modal" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Diadakan oleh Politeknik Negeri Bali dalam kegiatan INTECH FEST (information and Technology Festival) 2020
            dengan tema "Information and Technology can Support Future Life" dan kami berhasil mendapatkan Juara Favorit
            Web Design Competition di tingkat nasional.</p>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script>
    $('.show-popup a').click(function(e) {
  e.preventDefault();

  // Ambil nama paket dan harga per bulan
  var paketName = $(this).parent().find('h3').text();
  var priceElement = $(this).parent().find('span');
  var priceString = priceElement.text().replace('.', '').replace('Rp ', '');
  var pricePerMonth = parseFloat(priceString);

  // Hitung total biaya per tahun
  var totalCost = pricePerMonth * 12;

  Swal.fire({
    html: `<strong>${paketName}</strong><br>
           Harga per bulan: Rp ${pricePerMonth.toLocaleString('id-ID')}<br>
           Total biaya (12 bulan): Rp ${totalCost.toLocaleString('id-ID')}`,
    icon: 'success',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Lanjutkan ke WhatsApp',
    cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Lanjutkan ke link WhatsApp jika dikonfirmasi
          window.location.href = $(this).attr('href');
        }
      });
    });
  </script>
@endpush
