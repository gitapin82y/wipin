@extends('layouts.public')

@section('title', 'Jasa Desain Kemasan Murah Berkualitas')

@section('meta_description', 'Jasa desain kemasan murah berkualitas mampu memenuhi keinginan atau kebutuhan desain kemasan untuk bisnis maupun personal')

@section('meta_keywords', 'jasa desain kemasan, jasa desain kemasan murah, jasa desain kemasan murah berkualitas, desain kemasan untuk bisnis, wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'id_ID')

@section('meta_og_title', 'Jasa Desain Kemasan Murah Berkualitas')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/jasa-desain-kemasan')

@section('meta_og_description', 'Jasa desain kemasan murah berkualitas mampu memenuhi keinginan atau kebutuhan desain kemasan untuk bisnis maupun personal')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Jasa Desain Kemasan Murah Berkualitas')

@section('meta_twitter_description', 'Jasa desain kemasan murah berkualitas mampu memenuhi keinginan atau kebutuhan desain kemasan untuk bisnis maupun personal')

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
              Jasa Desain
              <span class="gradient">Kemasan</span> Murah Berkualitas
            </h1>
            <p class="mt-4 mb-5">
              Jasa desain kemasan murah berkualitas mampu memenuhi keinginan atau kebutuhan desain kemasan untuk bisnis maupun personal
            </p>
            <a href="#pricelist" class="btn-main">Lihat Paket Desain</a>
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
          <img src="{{asset('assets/images/desain-grafis-detail.png')}}" width="811" height="749" class="headerImage" alt="jasa Desain Kemasan" />
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- start body -->

  <section id="pricelist" class="section-dark-color">
    <div class="container">
      <div class="row">
        <div class="text-center mb-4">
          <p class="title-main mb-0 title">Harga Jasa</p>
          <h2 class="mt-1">
            Jasa Desain Kemasan Harga Kaki Lima<br>
            Kualitas Bintang Lima
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="card-item section-dark-color1 col-12 col-md-5" data-aos="fade-up">
          <h3 class="f-28 mb-2">Paket A</h3>
          <p class="fw-bold mb-0">Dimulai dari</p>
          <p><span>Rp 200,000</span></p>
          <ul class="p-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Desain 1 Pilihan</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Revisi 2x <small class="fw-light">(1 minor & 1 major)</small></li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">1-2 Hari</li>
          <li><img src="{{asset('assets/icons/cross.svg')}}" class="me-2" alt="silang">File Master CDR/AI</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Export JPG / PNG</li>
          </ul>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Jasa%20Desain%20Kemasan%20Paket%20A
        " class="btn-main mt-4" target="_blank">Pesan Sekarang</a>
        </div>
        <div class="card-item section-dark-color1 col-12 col-md-5" data-aos="fade-up">
          <h3 class="f-28 mb-2">Paket B</h3>
          <p class="fw-bold mb-0">Dimulai dari</p>
          <p><span>Rp 400,000</span></p>
          <ul class="p-0">
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Desain 2 Pilihan</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Revisi 3x <small class="fw-light">(2 minor & 1 major)</small></li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">1-2 Hari</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">File Master CDR/AI</li>
          <li><img src="{{asset('assets/icons/tick.svg')}}" class="me-2" alt="centang">Export JPG / PNG</li>
          </ul>
          <a href="
          https://api.whatsapp.com/send?phone=6285198330157&text=Halo%20Admin%20Saya%20Mau%20Order%20Jasa%20Desain%20Kemasan%20Paket%20B
        " class="btn-main mt-4" target="_blank">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </section>


  <section id="whyUs">
    <div class="container">
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain1 h-auto" width="600" height="600"
        alt="layanan desain wipin" />
      <div class="row col-12 m-0">
        <div class="col-md-6 col-12 mt-4 text-center text-md-start" data-aos="fade-up-right">
          <p class="title-main mb-0 title">Proses Desain</p>
          <h2 class="mt-1">
            Desain Kemasan Proses<br /> Cepat Kualitas Premium
          </h2>
          <img src="{{asset('assets/images/whyUs.png')}}" width="500" height="500"
            class="w-100 h-auto pt-0 pt-md-5 pt-lg-0"
            alt="keunggulan menggunakan jasa web murah di wipin" />

        </div>
        <div class="col-md-6 col-12" data-aos="fade-up-left">
          <div class="card-item section-dark-color1">
            <h3>Desain Konsultasi</h3>
            <p>
              Konsultasi mengenai kebutuhan kemasan dan keinginan desain anda
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Pembayaran</h3>
            <p>
              Kemasan akan kami proses setelah pembayaran selesai ada 2 metode pembayaran DP 30% atau full payment 
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Desain Proses</h3>
            <p>
              Desain kemasan anda akan kami proses sesuai dengan konsep desain
            </p>
          </div>
          <div class="card-item section-dark-color1">
            <h3>Final Desain</h3>
            <p>
              Anda dapat melakukan permintaan revisi desain sesuai dengan batas revisi paket desain yang anda pilih
            </p>
          </div>
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
            Klien Sangat Puas Dengan<br />Hasil Desain Kemasan
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
              Bisa milih desain yang aku suka trus juga cepet banget sehari
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
              <small>Pengusaha</small>
            </div>
          </div>
          <div class="row pt-4">
            <p>
              Makasih dah memberikan kualitas terbaik desain buat usaha saya, wipin memang terbaik
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
      <img src="{{asset('assets/images/backgroundDesain.png')}}" class="backgroundDesain2 h-auto" width="600" height="600"
        alt="faq wipin" />
      <div class="row">
        <div class="text-center mb-3">
          <p class="title-main mb-0 title">FAQ</p>
          <h2 class="mt-1">
            Pertanyaan Umum <br> Mengenai Jasa Desain Kemasan
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
@endsection

@push('script')
<!-- Tambahkan JavaScript jika diperlukan -->
@endpush
