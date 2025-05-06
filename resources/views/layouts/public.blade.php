<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-site-verification" content="YSJjLq87p2I90wSsLDRP491NPvORHb3rlDb6nSSMDcs" />

    <title>@yield('title', 'Penyedia Jasa Website dan Desain Murah Berkualitas - Wipin')</title>

    <meta name="description" content="@yield('meta_description', 'Penyedia jasa pembuatan website, jasa desain UI/UX, dan jasa desain grafis murah berkualitas mampu memenuhi kebutuhan untuk bisnis maupun personal')" />
    <meta name="keywords" content="@yield('meta_keywords', 'wipin, jasa website, jasa desain ui ux, jasa desain grafis, jasa pembuatan website')" />
    <link rel="canonical" href="@yield('meta_canonical', 'https://wipinweb.com')" />
    <meta name="robots" content="@yield('meta_robots', 'index,follow')" />
    <meta name="author" content="@yield('meta_author', 'Apin')" />
    
    <meta image="@yield('meta_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('meta_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="@yield('meta_og_title', 'Penyedia Jasa Website dan Desain Murah Berkualitas - Wipin')" />
    <meta property="og:site_name" content="@yield('meta_site_name', 'Wipin')" />
    <meta property="og:url" content="@yield('meta_url', url('/'))" />
    <meta property="og:description" content="@yield('meta_og_description', 'Penyedia jasa pembuatan website, jasa desain UI/UX, dan jasa desain grafis murah berkualitas mampu memenuhi kebutuhan untuk bisnis maupun personal')" />
    
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@WipinTeknologi" />
    <meta name="twitter:title" content="@yield('meta_twitter_title', 'Penyedia Jasa Website dan Desain Murah Berkualitas - Wipin')" />
    <meta name="twitter:description" content="@yield('meta_twitter_description', 'Penyedia jasa pembuatan website, jasa desain UI/UX, dan jasa desain grafis murah berkualitas mampu memenuhi kebutuhan untuk bisnis maupun personal')" />
    <meta name="twitter:image" content="@yield('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-dan-joki-tugas-it-murah-wipin.png'))" />
    
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-T5BM2RM');
    </script>
    
  @include('includes.public.style')
  @stack('style')
</head>

<body class="dark-theme" oncontextmenu="return false">

  @include('includes.public.navbar')

  <!-- start body -->
  @yield('content')
  <!-- end body -->

  <div class="language-switcher">
    @if ($lang === 'en')
        <a href="{{ route('show.id', ['page' => $page]) }}" class="lang-btn">
            <img src="{{ asset('images/indonesia-flag.png') }}" alt="ID">
        </a>
    @else
        <a href="{{ route('show.en', ['page' => $page]) }}" class="lang-btn">
            <img src="{{ asset('images/english-flag.png') }}" alt="EN">
        </a>
    @endif
</div>


  <a href="https://wa.me/6285198330157" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
    085198330157
  </a>

  @include('includes.public.footer')

  @include('includes.public.script')
  @include('sweetalert::alert')
  @stack('script')
</body>

</html>