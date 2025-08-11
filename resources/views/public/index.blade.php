@extends('layouts.public')
 
@section('title', 'Layanan Jasa Desain dan Website - Wipin')
@section('meta_description', 'Jasa desain UI/UX, pembuatan website, dan desain grafis terbaik untuk kebutuhan bisnis Anda.')
@section('meta_keywords', 'layanan desain, jasa pembuatan website, desain logo, branding')
@section('meta_author', 'Tim Wipin')

@section('meta_og_title', 'Layanan Jasa Desain dan Website')
@section('meta_og_description', 'Dapatkan layanan desain terbaik dari tim profesional Wipin.')
@section('meta_url', url('/services'))
@section('meta_image', asset('assets/images/services-banner.png'))

@section('meta_twitter_title', 'Layanan Jasa Desain - Wipin')
@section('meta_twitter_description', 'Solusi desain dan website terbaik untuk bisnis Anda.')
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
              Penyedia Jasa Website dan Desain
              <span class="gradient"> Murah Berkualitas</span>
            </h1>
            <p class="mt-4 mb-5">
              Penyedia jasa pembuatan website, jasa desain ui ux dan jasa desain grafis murah berkualitas mampu memenuhi kebutuhan untuk bisnis maupun personal
            </p>
            <a href="#pricelist" class="btn-main">Gunakan Jasa</a>
            <a href="{{url('/portofolio')}}" class="btn-second section-dark-color1">Lihat Portofolio</a>
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
          <img src="{{asset('assets/images/jasa-website-dan-desain.png')}}" width="811" height="749" class="headerImage"
            alt="wipin penyedia jasa website, desain ui ux dan desain grafis" />
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
          <p class="title-main mb-0 title">Layanan Wipin</p>
          <h2 class="mt-1">
            3 Layanan Wipin Siap <br>Mewujudkan Impian Anda
          </h2>
          <img src="{{asset('assets/images/services.png')}}" width="500" height="500"
            class="w-100 pt-4 pt-md-4 h-auto servicesImage text-center" alt="layanan wipin" />
          <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain1 h-auto w-100"
            width="600" height="600" alt="layanan desain wipin" />
        </div>

        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <a href="jasa-pembuatan-website">
          <div class="card-item section-dark-color1">
            <h3>Pembuatan Website</h3>
            <p>
              Developer yang berpengalaman membuat berbagai desain web dengan sistem terbaik
            </p>
            <p class="title-main fw-light">Selengkapnya</p>
          </div>
          </a>
          <a href="jasa-desain-ui-ux">
            <div class="card-item section-dark-color1">
              <h3>Desain UI UX</h3>
              <p>
                Kami berpengalaman membuat desain UI UX berbasis mobile maupun
                website
              </p>
              <p class="title-main fw-light">Selengkapnya</p>
            </div>
          </a>
          <a href="jasa-desain-grafis">
            <div class="card-item section-dark-color1">
              <h3>Desain Grafis</h3>
              <p>
                Profesionalitas desainer dalam memberikan pelayanan kualitas desain terbaik
              </p>
              <p class="title-main fw-light">Selengkapnya</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="layanan desain wipin" />
      <div class="row col-12 m-0 flex-column-reverse flex-md-row">

        <div class="col-md-6 col-12" data-aos="fade-up-right">
          <div class="card-item section-dark-color1">
            <h3>Gratis Konsultasi</h3>
            <p>
              Jika anda masih bingung tidak perlu sungkan untuk konsultasi dengan kami mengenai
              project anda untuk mencapai tujuan yang terbaik
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Harga Bersahabat</h3>
            <p>
              Tidak perlu khawatir soal harga anda bisa negosiasi dahulu dan
              anda bisa membayar 50% diawal jika belom memiliki cukup anggaran
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Terpercaya</h3>
            <p>
              Profesionalitas dari para developer dan designer kami membuat
              dipercaya oleh pelanggan kami sehingga tidak perlu diragukan
              lagi
            </p>
          </div>
        </div>
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-left">
          <p class="title-main mb-0 title">Benefit Wipin</p>
          <h2 class="mt-1">
            Mengapa Harus Menggunakan<br />Jasa Buat Web dan Desain di Wipin?
          </h2>
          <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0" alt="keunggulan menggunakan jasa web murah di wipin" />

        </div>
      </div>
    </div>
  </section>

  <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Harga Jasa</p>
          <h2 class="mt-1">
            3 Layanan Wipin Dengan Berbagai<br>
            Pilihan Termurah
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="card-item section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>Pembuatan Website</h3>
          <p class="fw-bold">Dimulai dari harga</p>
          <span>Rp 50,000</span>
          <ul>
            <li>Free revisi</li>
            <li>Free hosting</li>
            <li>Free domain</li>
          </ul>
          <a href="jasa-pembuatan-website#pricelist" class="btn-main">Lihat Detail</a>
        </div>
        <div class="card-item  section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>Desain UI UX</h3>
          <p class="fw-bold">Harga per-halaman</p>
          <p class="mb-0"><span>Rp 30,000</span> | Mobile desain</p>
          <p class="mb-0"><span>Rp 45,000</span> | Web desain</p>
          <ul>
            <li>Request warna desain</li>
            <li>Free prototype</li>
            <li>Free mockup</li>
          </ul>
          <a href="jasa-desain-ui-ux#pricelist" class="btn-main">Lihat Detail</a>
        </div>
        <div class="card-item  section-dark-color1 col-12 col-md-4" data-aos="fade-up">
          <h3>Desain Grafis</h3>
          <p class="fw-bold">Dimulai dari harga</p>
          <p class="line-through mb-0">Rp 200,000</p>
          <span>Rp 100,000</span>

          <ul>
            <li>Request warna desain</li>
            <li>High quality desain</li>
            <li>Free mockup</li>
          </ul>
          <a href="jasa-desain-grafis#pricelist" class="btn-main">Lihat Detail</a>
        </div>
      </div>
    </div>
  </section>


  <section id="portfolio">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="portfolio wipin" />
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
          <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" width="600" height="350"
            alt="jasa desain ui ux online book wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350"
            alt="jasa pembuatan web company profile wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350"
            alt="jasa desain ui ux dashboard wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" width="600" height="350"
            alt="jasa desain ui ux music app wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
            alt="jasa desain website perpustakaan wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350"
            alt="jasa desain website kuliner wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350"
            alt="jasa pembuatan website travel wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350"
            alt="jasa desain web starbuks wipin">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/desain-grafis-game-wipin.png')}}" width="600" height="350"
            alt="jasa desain grafis game">
        </div>
        <div class="card-item  section-dark-color1 item">
          <img src="{{asset('assets/portfolio/desain-feed-instagram-wipin.png')}}" width="600" height="350"
            alt="jasa desain feed instagram wipin">
        </div>
      </div>
    </div>
  </section>

  <section id="penghargaan">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="penghargaan background desain" />
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">3 Penghargaan Terbaru</p>
          <h2 class="mt-1">
            Sertifikat yang Berhasil Diraih Wipin<br />
            Pada Tingkat Nasional
          </h2>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara1">
          <img src="{{asset('assets/icons/medal1.svg')}}" width="100" height="50"
            alt="penghargaan juara 1 web design wipin" />
          <h3 class="my-3">Juara 1 Desain Web</h3>
          <p>
            Diadakan oleh universitas teknologi yogyakarta dengan tema lomba "Ragam Nusantara" pada tanggal 5 Juli..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara2">
          <img src="{{asset('assets/icons/medal3.svg')}}" width="100" height="50"
            alt="penghargaan juara desain ui ux wipin" />
          <h3 class="my-3">Juara 2 Desain UI UX</h3>
          <p>
            Diadakan oleh lumintulogic yaitu perusahaan teknologi informasi yang ada pada yogyakarta dengan..
          </p>
        </div>

        <div class="col-md-4 card-item section-dark-color1 col-12" type="button" data-aos="fade-up"
          data-bs-toggle="modal" data-bs-target="#juara4">
          <img src="{{asset('assets/icons/medal2.svg')}}" width="100" height="50"
            alt="penghargaan desain web wipin" />
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
            Klien Sangat Puas Dengan<br />Hasil Project
          </h2>
        </div>
      </div>
      <div class="row owl-carousel owl-theme">
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar1.svg')}}" width="100" height="100" class="avatar"
                alt="profile testimoni" />
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
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar2.svg')}}" width="100" height="100" class="avatar"
                alt="profile testimoni" />
            </div>
            <div class="col-9 pl-2">
              <h3>Daffa Darma</h3>
              <small>Mahasiswa</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Pusing mikirin tugas coding" membantu banget nih buat nyelesain
              tugas program saya.
            </p>
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar3.svg')}}" width="100" height="100" class="avatar"
                alt="profile testimoni" />
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
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="review testimoni wipin" />
          </div>
        </div>
        <div class="card-item  section-dark-color1 item">
          <div class="row">
            <div class="col-3">
              <img src="{{asset('assets/images/avatar4.svg')}}" width="100" height="100" class="avatar"
                alt="profile testimoni" />
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
            <img src="{{asset('assets/icons/stars.svg')}}" width="300" height="100" class="star"
              alt="review testimoni wipin" />
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
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600"
        height="600" alt="faq wipin" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Pertanyaan Umum <br> Client Wipin
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
                  Bagaimana cara menggunakan jasa wipin?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Klik <a href="#pricelist">Gunakan Jasa</a> dan klik button masing" paket lalu akan diarahkan ke chat
                    wa selanjutnya diskusi, pembayaran ( DP/full payment ), proses, revisi & finishing
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                  Bagaimana dengan sistem pembayaran?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Kami menerima pembayaran ovo,dana,shopepay, mandiri dan bri. <br>
                    Pembayaran ada 2 opsi : <br>
                    - Full payment <br>
                    - DP 50% dan kekurangan bisa di transfer ketika project sudah selesai
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
                  Bagaimana jika project selesai namun ada revisi?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Kami memberikan free revisi sesuai dengan pilihan paket yang diberikan, diluar dari itu ada tambahan
                    biaya per-revisi
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item section-dark-color1">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  Berapa lama pengerjaan project?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Paling cepat 1 hari selesai namun tergantung tingkat kesulitan project, tetapi kebanyakan project
                    selesai kisaran 2-4 hari
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
  
    <!-- modal promosi -->
  <div class="modal fade" tabindex="-1" id="modalPromosi">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PROMO HINGGA AKHIR <span id="newMonth" class="modal-title"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
         <img src="{{asset('assets/images/promo-jasa-website-wipin.png')}}" width="100%"
                alt="promo jasa website termurah hanya di wipin" />
                    <a href="https://wipinweb.com/jasa-pembuatan-website#pricelist" class="btn fw-bold px-3 btn-warning mt-4">Dapatkan Promo Sekarang</a>
      </div>
    
    </div>
  </div>
</div>
@endsection

@push('script')
<script>


    $(document).ready(function(){
      
      const month = ["JANUARI","FEBRUARI","MARET","APRIL","MEI","JUNI","JULI","AGUSTUS","SEPTEMBER","OKTOBER","NOVEMBER","DESEMBER"];
  
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
