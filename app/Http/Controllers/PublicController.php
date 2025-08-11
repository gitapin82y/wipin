<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class PublicController extends Controller
{
    // Make these properties public so they can be accessed from views
    public $pageMapping = [
        'id' => [
            'jasa-pembuatan-website' => 'website-development',
            'jasa-desain-ui-ux' => 'ui-ux-design',
            'jasa-desain-grafis' => 'graphic-design',
            'jasa-desain-logo' => 'logo-design',
            'jasa-desain-banner' => 'banner-design',
            'jasa-desain-brosur' => 'brochure-design',
            'jasa-desain-feed-ig' => 'instagram-feed-design',
            'jasa-desain-amplop' => 'envelope-design',
            'jasa-desain-kaos' => 'tshirt-design',
            'jasa-desain-kemasan' => 'packaging-design',
            'jasa-desain-poster' => 'poster-design',
            'jasa-desain-sertifikat' => 'certificate-design',
            'portofolio' => 'portfolio',
            'blog' => 'blog'
        ],
        'en' => [
            'website-development' => 'jasa-pembuatan-website',
            'ui-ux-design' => 'jasa-desain-ui-ux',
            'graphic-design' => 'jasa-desain-grafis',
            'logo-design' => 'jasa-desain-logo',
            'banner-design' => 'jasa-desain-banner',
            'brochure-design' => 'jasa-desain-brosur',
            'instagram-feed-design' => 'jasa-desain-feed-ig',
            'envelope-design' => 'jasa-desain-amplop',
            'tshirt-design' => 'jasa-desain-kaos',
            'packaging-design' => 'jasa-desain-kemasan',
            'poster-design' => 'jasa-desain-poster',
            'certificate-design' => 'jasa-desain-sertifikat',
            'portfolio' => 'portofolio',
            'blog' => 'blog'
        ]
    ];

    public $allowedPages = [
        'id' => [
            'jasa-pembuatan-website',
            'jasa-desain-ui-ux',
            'jasa-desain-grafis',
            'jasa-desain-logo',
            'jasa-desain-banner',
            'jasa-desain-brosur',
            'jasa-desain-feed-ig',
            'jasa-desain-amplop',
            'jasa-desain-kaos',
            'jasa-desain-kemasan',
            'jasa-desain-poster',
            'jasa-desain-sertifikat',
            'portofolio',
            'blog'
        ],
        'en' => [
            'website-development',
            'ui-ux-design',
            'graphic-design',
            'logo-design',
            'banner-design',
            'brochure-design',
            'instagram-feed-design',
            'envelope-design',
            'tshirt-design',
            'packaging-design',
            'poster-design',
            'certificate-design',
            'portfolio',
            'blog'
        ]
    ];

    public function index(): View
    {
        $lang = request()->is('en') ? 'en' : 'id';
        App::setLocale($lang);
        
        $page = 'home';
        return view('public.' . ($lang === 'en' ? 'en.' : '') . 'index', compact('lang', 'page'));
    }

    public function show($page = 'home'): View
    {
        $isEnglish = request()->is('en/*') || request()->is('en');
        $lang = $isEnglish ? 'en' : 'id';
        App::setLocale($lang);

        // Handle homepage specially
        if ($page === 'home' || $page === '') {
            return view('public.' . ($lang === 'en' ? 'en.' : '') . 'index', compact('lang', 'page'));
        }

        // Check if the page is allowed
        if (!in_array($page, $this->allowedPages[$lang])) {
            abort(404);
        }

        // Determine the blade file name
        $bladeName = $page;
          

        // Determine folder Blade based on language
        $folder = ($lang === 'en') ? 'public.en' : 'public';
        
        return view("$folder.$bladeName", compact('lang', 'page'));
    }

    public function switchLanguage($lang, $page = 'home')
    {
        if ($page === 'home' || $page === '') {
            if ($lang === 'en') {
                return redirect()->route('home.en');
            } else {
                return redirect()->route('home.id');
            }
        }
        
        // Map the page to the correct language equivalent
        $targetPage = $page;
        
        if ($lang === 'en' && in_array($page, $this->allowedPages['id'])) {
            // Convert from ID to EN
            $targetPage = array_search($page, $this->pageMapping['en']);
        } else if ($lang === 'id' && in_array($page, $this->allowedPages['en'])) {
            // Convert from EN to ID
            $targetPage = $this->pageMapping['en'][$page];
        }
        
        if ($lang === 'en') {
            return redirect()->route('show.en', ['page' => $targetPage]);
        } else {
            return redirect()->route('show.id', ['page' => $targetPage]);
        }
    }
}