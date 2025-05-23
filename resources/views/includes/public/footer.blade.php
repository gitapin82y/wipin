<!-- start footer -->
<footer class="section-dark-color1">
  <div class="container">
    <div class="row justify-content-around flex-column-reverse flex-md-row">
      <div class="col-12 col-md-3 text-center pt-1 pt-md-3 pt-lg-2">
        <img src="{{ asset('assets/images/logo.svg') }}" width="300" height="200" class="w-50 h-auto"
          alt="logo wipin" />
      </div>
      <div class="col-md-5 col-12 pt-3 text-center pb-2">
        <p>Copyright 2025 Built With Wipin</p>
        @if ($lang === 'en')
          <p><small>Available in: <a href="{{ route('language.switch', ['lang' => 'id', 'page' => $page ?? 'home']) }}">Bahasa Indonesia</a></small></p>
        @else
          <p><small>Tersedia dalam: <a href="{{ route('language.switch', ['lang' => 'en', 'page' => $page ?? 'home']) }}">English</a></small></p>
        @endif
      </div>
      <div class="col-lg-3 col-md-4 col-8 mx-auto py-2">
        <div class="d-flex justify-content-around sosmed">
          <a href="https://www.tiktok.com/@wipintech" target="_blank" rel="noopener noreferrer"><img
              src="{{ asset('assets/icons/tiktok.svg') }}" width="40" height="40" alt="tiktok wipin" /></a>
          <a href="https://www.instagram.com/wipintech/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/icons/instagram.svg') }}"
              width="40" height="40" alt="{{ $lang === 'en' ? 'wipin instagram social media' : 'sosial media instagram wipin' }}" /></a>
          <a href="https://dribbble.com/uixapin" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/icons/dribbble.svg') }}" width="40"
              height="40" alt="dribble wipin" /></a>
          <a href="https://api.whatsapp.com/send?phone=6285198330157" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/icons/whatsapp.svg') }}"
              width="40" height="40" alt="{{ $lang === 'en' ? 'wipin whatsapp contact' : 'kontak whatsapp wipin' }}" /></a>
        </div>
      </div>
    </div>
  </div>
</footer>