<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class IndexController extends Controller
{
    public function __construct()
    {
        // App::setlocale('en');
    }

    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function products()
    {
        return view('products');
    }

    public function ourJourney()
    {
        return view('our-journey');
    }

    public function companyProfile()
    {
        return view('company-profile');
    }

    public function missionAndvission()
    {
        return view('mission-and-vission');
    }

    public function corporateVideo()
    {
        return view('corporate-video');
    }

    public function quality()
    {
        return view('quality');
    }

    public function career()
    {
        return view('career');
    }
}
