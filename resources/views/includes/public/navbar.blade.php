<!-- start navbar -->
<nav class="navbar navbar-expand-lg w-100">
    <div class="container-fluid container">
        <a href="{{ $lang === 'en' ? route('home.en') : route('home.id') }}" class="d-flex text-decoration-none">
            <img src="{{ asset('assets/images/logo.svg') }}" width="300" height="200" class="logo w-35 h-auto"
                alt="Wipin Logo - {{ $lang === 'en' ? 'Affordable Website and Design Services' : 'Jasa Website dan Desain Murah' }}" />&nbsp;
            <h2 class="mt-2 title b d-flex">Wipin</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('assets/icons/menuBarLight.svg') }}" width="60" height="60"
                class="menuBar h-auto w-100" alt="menu wipin" />
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav mt-4 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-3 {{ $page === 'home' ? 'active' : '' }}" href="{{ $lang === 'en' ? route('home.en') : route('home.id') }}">
                        {{ __('general.home') }}
                    </a>
                </li>
                
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle ps-0" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            {{ __('general.services') }}
                        </button>
                        <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton">
                            <div class="row">
                                <div class="col-6">
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'website-development') : route('show.id', 'jasa-pembuatan-website') }}">
                                        {{ __('general.website_development') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'ui-ux-design') : route('show.id', 'jasa-desain-ui-ux') }}">
                                        {{ __('general.ui_ux_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'graphic-design') : route('show.id', 'jasa-desain-grafis') }}">
                                        {{ __('general.graphic_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'logo-design') : route('show.id', 'jasa-desain-logo') }}">
                                        {{ __('general.logo_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'banner-design') : route('show.id', 'jasa-desain-banner') }}">
                                        {{ __('general.banner_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'packaging-design') : route('show.id', 'jasa-desain-kemasan') }}">
                                        {{ __('general.packaging_design') }}
                                    </a></li>
                                </div>
                                <div class="col-6">
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'poster-design') : route('show.id', 'jasa-desain-poster') }}">
                                        {{ __('general.poster_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'tshirt-design') : route('show.id', 'jasa-desain-kaos') }}">
                                        {{ __('general.tshirt_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'brochure-design') : route('show.id', 'jasa-desain-brosur') }}">
                                        {{ __('general.brochure_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'certificate-design') : route('show.id', 'jasa-desain-sertifikat') }}">
                                        {{ __('general.certificate_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'instagram-feed-design') : route('show.id', 'jasa-desain-feed-ig') }}">
                                        {{ __('general.instagram_feed_design') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ $lang === 'en' ? route('show.en', 'envelope-design') : route('show.id', 'jasa-desain-amplop') }}">
                                        {{ __('general.envelope_design') }}
                                    </a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="#pricelist">
                        {{ __('general.pricing') }}
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ $lang === 'en' ? route('show.en', 'portfolio') : route('show.id', 'portfolio') }}">
                        {{ __('general.portfolio') }}
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni">
                        {{ __('general.testimonials') }}
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ $lang === 'en' ? route('show.en', 'blog') : route('show.id', 'blog') }}">
                        {{ __('general.blog') }}
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="https://linktr.ee/wipintech" target="_blank">
                        {{ __('general.contact_us') }}
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