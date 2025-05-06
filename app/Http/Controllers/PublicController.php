<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function index(): View
    {
        return view('public.index');
    }

    public function show($page = 'home'): View
{
    $isEnglish = request()->is('en/*');
    $lang = $isEnglish ? 'en' : 'id';

    $allowedPages = [
        'jasa-desain-amplop',
        'jasa-desain-banner',
        'jasa-desain-brosur',
        'jasa-desain-feed-ig',
        'jasa-desain-grafis',
        'jasa-desain-kaos',
        'jasa-desain-kemasan',
        'jasa-desain-logo',
        'jasa-desain-poster',
        'jasa-desain-sertifikat',
        'jasa-desain-ui-ux',
        'jasa-pembuatan-website',
        'portfolio',
        'blog'
    ];

    if (!in_array($page, $allowedPages)) {
        abort(404);
    }

    // Tentukan folder Blade berdasarkan bahasa
    $folder = ($lang === 'en') ? 'public.en' : 'public';

    return view("$folder.$page", compact('lang', 'page'));
}

}
