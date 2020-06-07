<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function home() {
        return view('faq');
    }

    public function edit () {
        return view('faq-edit');
    }

}
