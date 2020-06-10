<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function influencers () {
        return view('influencer');
    }

    public function brands () {
        return view('brand');
    }

    public function brand_ads () {
        return view('Brandadvertisement');
    }

    public function influencer_ads () {
        return view('influencerAdvertisement');
    }

    public function faq() {

        $faqs = Faq::get();

        return view('faqs.faq', [
            'faqs'=>$faqs,
        ]);
    }

    public function blogs () {

        $blogs = Blog::get();

        return view('blogs.blog', [
            'blogs'=>$blogs,
        ]);
    }
}
