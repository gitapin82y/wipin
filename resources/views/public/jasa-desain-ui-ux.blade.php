@extends('layouts.public')

@section('title', 'Jasa Desain UI UX Murah Berkualitas - Wipin')

@section('meta_description', 'Jasa desain ui ux murah berkualitas dengan profesionalitas desainer mampu memenuhi keinginan atau kebutuhan desain ui ux untuk bisnis maupun personal')

@section('meta_keywords', 'wipin, jasa desain ui ux, jasa desain ui ux murah, jasa desain ui ux murah berkualitas')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'id_ID')

@section('meta_og_title', 'Jasa Desain UI UX Murah Berkualitas - Wipin')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/jasa-desain-ui-ux')

@section('meta_og_description', 'Jasa desain ui ux murah berkualitas dengan profesionalitas desainer mampu memenuhi keinginan atau kebutuhan desain ui ux untuk bisnis maupun personal')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Jasa Desain UI UX Murah Berkualitas - Wipin')

@section('meta_twitter_description', 'Jasa desain ui ux murah berkualitas dengan profesionalitas desainer mampu memenuhi keinginan atau kebutuhan desain ui ux untuk bisnis maupun personal')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@push('style')
<style>
  #pricelist .card-item {
    margin: 20px 10px;
  }
  #pricelist .card-item li::before{
    display: none;
  }
</style>
@endpush

@section('content')
<!-- start header -->
<section id="header">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 align-self-center">
        <div class="col-12 main-header pt-2 text-center text-lg-start">
          <h1 class="title">
            Jasa
            <span class="gradient">Desain UI UX</span> Murah Berkualitas
          </h1>
          <p class="mt-4 mb-5">
            Jasa desain ui ux murah berkualitas dengan profesionalitas desainer mampu memenuhi keinginan atau kebutuhan desain ui ux untuk bisnis maupun personal
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
              <p>Desain<br />Completed</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 p-0">
        <img src="{{asset('assets/images/jasa-desain-ui-ux.png')}}" width="811" height="749" class="headerImage" alt="penyedia jasa desain ui ux wipin" />
      </div>
    </div>
  </div>
</section>
<!-- end header -->

<!-- start body -->

<section id="whyUs">
  <div class="container">
    <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
      alt="layanan desain wipin" />
    <div class="row col-12 m-0">
      <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
        <p class="title-main mb-0 title">Benefit Wipin</p>
        <h2 class="mt-1">
          Mengapa Harus Menggunakan<br />Jasa Desain UI UX di Wipin?
        </h2>
        <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
          class="w-100 h-auto pt-0 pt-md-5 pt-lg-0"
          alt="keunggulan menggunakan jasa web murah di wipin" />

      </div>
      <div class="col-md-6 col-12" data-aos="fade-up-left">
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
            Profesionalitas dari para designer kami membuat
            dipercaya oleh pelanggan kami sehingga tidak perlu diragukan
            lagi
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
        <p class="title-main mb-0 title">Harga Jasa</p>
        <h2 class="mt-1">
          Jasa Desain UI UX Harga Kaki Lima<br>
          Kualitas Bintang Lima
        </h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
        <h3>Paket A</h3>
        <p class="fw-bold my-2">Harga Per-halaman</p>
        <p class="mb-0"><span>Rp 35,000</span> | Mobile desain</p>
        <p class="mb-0"><span>Rp 45,000</span> | Web desain</p>
        <ul class="pb-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Prototype</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Request Warna</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Desain Friendly</li>
          <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> Free Mockup</li>
          <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> UX Wireframe</li>
          <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang"> User Flow</li>
        </ul>
        <a href="
        https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Jasa%20Desain%20UI/UX%20Paket%20A
      " class="btn-main mt-5" target="_blank">Pesan Sekarang</a>
      </div>
      <div class="card-item section-dark-color1 col-12 col-md-3" data-aos="fade-up">
        <h3>Paket B</h3>
        <p class="fw-bold my-2">Harga Per-halaman</p>
        <p class="mb-0"><span>Rp 45,000</span> | Mobile desain</p>
        <p class="mb-0"><span>Rp 55,000</span> | Web desain</p>
        <ul class="pb-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Prototype</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Request Warna</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Desain Friendly</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> Free Mockup</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> UX Wireframe</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang"> User Flow</li>
        </ul>
        <a href="
        https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Jasa%20Desain%20UI/UX%20Paket%20B
      " class="btn-main mt-5" target="_blank">Pesan Sekarang</a>
      </div>
    </div>
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
        <img src="{{asset('assets/portfolio/buku-online-app-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux online book app">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/company-profile-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux company profile">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/dashboard-design-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux dashboard">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/music-design-app-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux music mobile app">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/perpustakaan-website-wipin.png')}}" width="600" height="350"
          alt="jasa desain ui ux perpustakaan">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/kuliner-website-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux kuliner">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/travel-website-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux travel">
      </div>
      <div class="card-item  section-dark-color1 item">
        <img src="{{asset('assets/portfolio/web-starbuks-wipin.png')}}" width="600" height="350" alt="jasa desain ui ux starbuks">
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
          Klien Sangat Puas Dengan<br />Hasil Desain
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
            <h3>Yuni</h3>
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
            <h3>Saputra</h3>
            <small>Mahasiswa</small>
          </div>
        </div>
        <div class="row pt-4">
          <p>
            Desain minimalis sesuai dengan keinginan dikasih bonus mockup pula, makasiih keren banget 
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
            <h3>Wulan</h3>
            <small>Mahasiswa</small>
          </div>
        </div>
        <div class="row pt-4">
          <p>
            Buat tugas kuliah desainnya aku suka trus juga cepet banget sehari
            udah jadi desain aku, thanks wipin
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
            <h3>Diana</h3>
            <small>Programmer</small>
          </div>
        </div>
        <div class="row pt-4">
          <p>
            Makasih dah memberikan kualitas terbaik desain website saya buat di development, wipin memang terbaik
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
    <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain h-auto" width="600" height="600"
      alt="faq wipin" />
    <div class="row">
      <div class="text-center mb-3">
        <p class="title-main mb-0 title">FAQ</p>
        <h2 class="mt-1">
          Pertanyaan Umum <br> Mengenai Jasa Desain UI UX
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
                  Klik <a href="#pricelist">Gunakan Jasa</a> dan klik button masing" paket lalu akan diarahkan ke chat wa selanjutnya diskusi, pembayaran ( DP/full payment ), proses, revisi & finishing
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
                Bagaimana jika desain selesai namun ada revisi?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Kami memberikan free revisi sesuai dengan pilihan paket yang diberikan, diluar dari itu ada tambahan biaya per-revisi
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item section-dark-color1">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button section-dark-color1 collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                Berapa lama pengerjaan desain?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Paling cepat 1 hari namun tergantung tingkat kesulitan desain bisa sampai 2-3 hari
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
        <h2 class="modal-title fs-5">Juara 1 Desain Web</h2>
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
        <h2 class="modal-title fs-5">Juara 2 Desain UI UX</h2>
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
        <h2 class="modal-title fs-5">Juara Favorit Web</h2>
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