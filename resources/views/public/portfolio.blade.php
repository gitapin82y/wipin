@extends('layouts.public')

@section('title', 'Portfolio Website dan Desain Wipin')

@section('meta_description', 'Anda dapat melihat berbagai proyek yang telah kami selesaikan dari berbagai industri. Wipin bangga dengan hasil setiap proyek yang membantu kebutuhan client, dan berkomitmen untuk memberikan hasil terbaik yang sesuai dengan kebutuhan dan visi anda')

@section('meta_keywords', 'wipin, portfolio website, portfolio wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'id_ID')

@section('meta_og_title', 'Portfolio Website dan Desain Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/jasa-pembuatan-website')

@section('meta_og_description', 'Anda dapat melihat berbagai proyek yang telah kami selesaikan dari berbagai industri. Wipin bangga dengan hasil setiap proyek yang membantu kebutuhan client, dan berkomitmen untuk memberikan hasil terbaik yang sesuai dengan kebutuhan dan visi anda')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Portfolio Website dan Desain Wipin')

@section('meta_twitter_description', 'Anda dapat melihat berbagai proyek yang telah kami selesaikan dari berbagai industri. Wipin bangga dengan hasil setiap proyek yang membantu kebutuhan client, dan berkomitmen untuk memberikan hasil terbaik yang sesuai dengan kebutuhan dan visi anda')

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
    .preview-link{
      color: #ffa24d;
      text-decoration: none;
      font-weight: bold;
    }
    #whyUs .card-item {
    margin: 10px 10px;
    width: 20rem !important;
    max-width: 100%;
    }
    #whyUs img{
      border-radius: 8px;
      margin-bottom: 20px !important;
      margin-top: 10px;
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
              <span class="gradient">Portfolio</span> Website dan Desain Wipin
            </h1>
            <p class="mt-4 mb-5">
              Anda dapat melihat berbagai proyek yang telah kami selesaikan dari berbagai industri. Wipin bangga dengan hasil setiap proyek yang membantu kebutuhan client, dan berkomitmen untuk memberikan hasil terbaik yang sesuai dengan kebutuhan dan visi anda.
            </p>
            <a href="#projectClient" class="btn-main">Lihat Portfolio</a>
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

  <!-- start body -->
  <section id="whyUs">
    <div class="container" id="projectClient">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="layanan desain wipin" />
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-up">
          <p class="title-main title mb-0">Proyek Terbaru</p>
          <h2 class="mt-1">
            Tiga Website yang Baru Saja Kami Selesaikan  
          </h2>
        </div>
        </div>
        <div class="row justify-content-around">
          <div class="card-item col-12 col-md-4 mt-4 pb-4 section-dark-color1" data-aos="fade-up">
              <a href="https://catuinterglobal.com" class="preview-link" target="_blank">
                <img src="{{asset('assets/portfolio/catu-inter-global.png')}}" alt="portfolio 1 wipin" class="img-fluid mb-2">
                Lihat Hasil &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 pb-4 section-dark-color1" data-aos="fade-up">
              <a href="https://gemilangindokarya.com" class="preview-link" target="_blank">
            <img src="{{asset('assets/portfolio/gemilang-indo-karya.png')}}" alt="portfolio 2 wipin" class="img-fluid mb-2">
                Lihat Hasil &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 pb-4 section-dark-color1" data-aos="fade-up">
             <a href="https://indonesiamedicalcenter.com" class="preview-link" target="_blank">
            <img src="{{asset('assets/portfolio/indonesia-medical-center.png')}}" alt="portfolio 3 wipin" class="img-fluid mb-2">
            Lihat Hasil &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
      </div>
    </div>
  </section>


  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="layanan desain wipin" />
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-up">
          <p class="title-main title mb-0">Portfolio Wipin</p>
          <h2 class="mt-1">
            Beberapa Proyek dari Ratusan Website yang Telah Wipin <br> Kerjakan di Berbagai Industri.
        </h2>
        </div>
        </div>
        <div class="row justify-content-around">
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Bisnis Mobil</h3>
            <img src="{{asset('assets/portfolio/website-bisnis-kios-toyota.png')}}" alt="Web Bisnis Mobil" class="img-fluid mb-2">
            <p>
              Web bisnis mobil toyota dengan penerapan SEO Friendly yang mampu menaikan penjualan.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Artikel Travel</h3>
            <img src="{{asset('assets/portfolio/website-artikel-travel.png')}}" alt="Web Artikel Travel" class="img-fluid mb-2">
            <p>
              Website traveling yang menarik customer melalui artikel tentang destinasi dan tips perjalanan.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Landing Page</h3>
            <img src="{{asset('assets/portfolio/website-landing-page-jasa-sedot-wc.png')}}" alt="Web Landing Page" class="img-fluid mb-2">
          <p>
              Halaman informasi bisnis dengan 1 halaman yang diringkas untuk menonjolkan produk atau layanan.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Produk</h3>
            <img src="{{asset('assets/portfolio/web-produk-neo-furniture.png')}}" alt="Web Produk Furniture" class="img-fluid mb-2">
            <p>
              Platform penjualan untuk menjelajahi produk furniture dengan sistem order melalui WhatsApp.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Personal</h3>
            <img src="{{asset('assets/portfolio/website-personal-build-by-wipin.png')}}" alt="Web Personal" class="img-fluid mb-2">
          <p>
              Website pribadi freelance fullstack developer yang menampilkan portfolio dan keterampilan.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Bisnis Property</h3>
            <img src="{{asset('assets/portfolio/Web-Property-Bisnis.png')}}" alt="Web Bisnis Property" class="img-fluid mb-2">
            <p>
              Platform untuk informasi properti dijual, dengan tautan WhatsApp untuk menghubungi tim sales.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Sekolah</h3>
            <img src="{{asset('assets/portfolio/web-sekolah.png')}}" alt="Web Sekolah" class="img-fluid mb-2">
            <p>
              Website sekolah dengan informasi kurikulum, kegiatan, dan fitur pendaftaran online.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Ecommerce</h3>
            <img src="{{asset('assets/portfolio/Web-Ecommerce.png')}}" alt="Web Ecommerce" class="img-fluid mb-2">
            <p>
              Situs e-commerce yang meningkatkan pengalaman belanja dengan tampilan menarik dan sistem pembayaran otomatis.
          </p>
          </div>
          <div class="card-item col-12 col-md-4 mt-4 section-dark-color1" data-aos="fade-up">
            <h3>Web Costum</h3>
            <img src="{{asset('assets/portfolio/webcostum.png')}}" alt="Web Costum" class="img-fluid mb-2">
            <p>
              Tingkatkan efisiensi bisnis anda dengan aplikasi berbasis website, mulai dari pengelolaan data, keuangan, manajemen inventori hingga monitoring karyawan.
            </p>
          </div>
      </div>
    </div>
  </section>


  <section id="portfolio">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
        alt="portfolio wipin" />
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main title mb-0">Portfolio Lainnya</p>
          <h2 class="mt-1">
            Hasil Berbagai Website dan Desain Wipin
          </h2>
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

  <section id="client-wipin">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main title mb-0">Klien Wipin</p>
          <h2 class="mt-1">
            Berbagai Industri Telah Menaruh Kepercayaan kepada Wipin
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="justify-content-center d-flex mb-5">
          <img src="{{asset('assets/portfolio/client-wipin.png')}}" class="w-100" alt="client wipin">
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
<!-- Tambahkan JavaScript jika diperlukan -->
@endpush
