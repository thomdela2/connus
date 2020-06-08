<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function home() {

        $faqs = Faq::get();

        return view('faq', [
            'faqs'=>$faqs,
        ]);
    }

}
