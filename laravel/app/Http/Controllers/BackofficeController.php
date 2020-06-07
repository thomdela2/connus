<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function blogOverview () {
        return view('blog-overview');
    }

    public function blogEdit () {
        return view('blog-edit');
    }

    public function faqOverview () {
        return view('faq-overview');
    }

    public function faqEdit () {
        return view('faq-edit');
    }

}
