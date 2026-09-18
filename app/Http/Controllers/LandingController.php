<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ClientLogo;
use App\Models\SiteSetting;
use App\Models\Solution;
use App\Models\Testimonial;

class LandingController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::published()->ordered()->get();
        $clientLogos = ClientLogo::published()->ordered()->get();
        $solutions = Solution::published()->ordered()->get();
        $articles = Article::published()->latestFirst()->take(3)->get();

        $contactEmail = SiteSetting::get('contact_email', 'hello@konsit.id');
        $contactPhone = SiteSetting::get('contact_phone', '+62 812-0000-0000');

        return view('landing', compact(
            'testimonials',
            'clientLogos',
            'solutions',
            'articles',
            'contactEmail',
            'contactPhone',
        ));
    }
}
