<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function influencers () {
        return view('home');
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

}
