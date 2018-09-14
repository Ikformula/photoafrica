<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.photoafrica.home');
    }

    public function contactPage()
    {
        return view('frontend.photoafrica.contact');
    }

    public function aboutPage()
    {
        return view('frontend.photoafrica.about');
    }
}
