@extends('layouts.public')

@section('title', 'Affordable Quality Envelope Design Services - Wipin')

@section('meta_description', 'Professional envelope design services at affordable prices. Our designs can meet all your business or personal envelope design needs and requirements.')

@section('meta_keywords', 'envelope design services, affordable envelope design, quality envelope design, business envelope design, wipin')

@section('meta_author', 'Apin')

@section('meta_og_type', 'website')

@section('meta_og_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@section('meta_og_locale', 'en_US')

@section('meta_og_title', 'Affordable Quality Envelope Design Services')

@section('meta_og_site_name', 'Wipin')

@section('meta_og_url', 'https://wipinweb.com/en/envelope-design')

@section('meta_og_description', 'Professional envelope design services at affordable prices. Our designs can meet all your business or personal envelope design needs and requirements.')

@section('meta_twitter_card', 'summary')

@section('meta_twitter_site', '@WipinTeknologi')

@section('meta_twitter_title', 'Affordable Quality Envelope Design Services')

@section('meta_twitter_description', 'Professional envelope design services at affordable prices. Our designs can meet all your business or personal envelope design needs and requirements.')

@section('meta_twitter_image', asset('assets/images/jasa-pembuatan-web-desain-ui-ux-desain-grafis.png'))

@push('style')
<!-- Add CSS if needed -->
@endpush

@section('content')
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="col-12 main-header pt-2 text-center text-lg-start">
                    <h1 class="title">
                        Professional Envelope Design
                        <span class="gradient">at Affordable Prices</span>
                    </h1>
                    <p class="mt-4 mb-5">
                        Our envelope design services provide creative and professional solutions for your business correspondence. Stand out with custom envelope designs that enhance your brand identity.
                    </p>
                    <a href="#pricelist" class="btn-main">{{ __('general.use_service') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('assets/images/envelope-design.png') }}" width="811" height="749" class="headerImage"
                    alt="Wipin envelope design services" />
            </div>
        </div>
    </div>
</section>

<!-- Add more content sections as needed -->
@endsection

@push('script')
<!-- Add JavaScript if needed -->
@endpush