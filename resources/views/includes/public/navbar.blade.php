 <!-- start navbar -->
 <nav class="navbar navbar-expand-lg w-100">
    <div class="container-fluid container">
      <a href="/" class="d-flex text-decoration-none">
        <img src="{{asset('assets/images/logo.svg')}}" width="300" height="200" class="logo w-35 h-auto"
        alt="Logo Wipin - Jasa Website dan Desain Murah" />&nbsp;
        <h2 class="mt-2 title b d-flex">Wipin</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{asset('assets/icons/menuBarLight.svg')}}" width="60" height="60"
          class="menuBar h-auto w-100" alt="menu wipin" />
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav mt-4 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link me-3 active" href="{{ $lang === 'en' ? route('show.en', ['page' => 'home']) : route('home') }}">
                    {{ $lang === 'en' ? 'Home' : 'Beranda' }}
                </a>
            </li>
            
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn dropdown-toggle ps-0" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                        {{ $lang === 'en' ? 'Services' : 'Layanan' }}
                    </button>
                    <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton">
                        <div class="row">
                            <div class="col-6">
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-pembuatan-website') : route('show.id', 'jasa-pembuatan-website') }}">
                                    {{ $lang === 'en' ? 'Website Development' : 'Pembuatan Website' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-ui-ux') : route('show.id', 'jasa-desain-ui-ux') }}">
                                    {{ $lang === 'en' ? 'UI/UX Design' : 'Desain UI/UX' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-grafis') : route('show.id', 'jasa-desain-grafis') }}">
                                    {{ $lang === 'en' ? 'Graphic Design' : 'Desain Grafis' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-logo') : route('show.id', 'jasa-desain-logo') }}">
                                    {{ $lang === 'en' ? 'Logo Design' : 'Desain Logo' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-banner') : route('show.id', 'jasa-desain-banner') }}">
                                    {{ $lang === 'en' ? 'Banner Design' : 'Desain Banner' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-kemasan') : route('show.id', 'jasa-desain-kemasan') }}">
                                    {{ $lang === 'en' ? 'Packaging Design' : 'Desain Kemasan' }}
                                </a></li>
                            </div>
                            <div class="col-6">
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-poster') : route('show.id', 'jasa-desain-poster') }}">
                                    {{ $lang === 'en' ? 'Poster Design' : 'Desain Poster' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-kaos') : route('show.id', 'jasa-desain-kaos') }}">
                                    {{ $lang === 'en' ? 'T-Shirt Design' : 'Desain Kaos' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-brosur') : route('show.id', 'jasa-desain-brosur') }}">
                                    {{ $lang === 'en' ? 'Brochure Design' : 'Desain Brosur' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-sertifikat') : route('show.id', 'jasa-desain-sertifikat') }}">
                                    {{ $lang === 'en' ? 'Certificate Design' : 'Desain Sertifikat' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-feed-ig') : route('show.id', 'jasa-desain-feed-ig') }}">
                                    {{ $lang === 'en' ? 'Instagram Feed Design' : 'Desain Feed IG' }}
                                </a></li>
                                <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'jasa-desain-amplop') : route('show.id', 'jasa-desain-amplop') }}">
                                    {{ $lang === 'en' ? 'Envelope Design' : 'Desain Amplop' }}
                                </a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="#pricelist">
                    {{ $lang === 'en' ? 'Pricing' : 'Harga' }}
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{ $lang === 'en' ? route('show.en', 'portfolio') : route('show.id', 'portfolio') }}">
                    {{ $lang === 'en' ? 'Portfolio' : 'Portofolio' }}
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="#testimoni">
                    {{ $lang === 'en' ? 'Testimonials' : 'Testimoni' }}
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{ $lang === 'en' ? route('show.en', 'blog') : route('show.id', 'blog') }}">
                    {{ $lang === 'en' ? 'Blog' : 'Artikel' }}
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="https://linktr.ee/wipintech" target="_blank">
                    {{ $lang === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                </a>
            </li>
        </ul>
        
        
        <div>
          <input type="checkbox" aria-label="checkbox dark mode" class="checkbox section-dark-color1" id="checkbox">
          <label for="checkbox" class="label mb-4 mb-lg-0">
            <i class='fas fa-sun'></i>
            <i class="fas fa-moon"></i>
            <div class='ball'>
          </label>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navbar -->