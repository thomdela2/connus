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


    public function getIndex () {

        $faqs = Faq::get();
        // dd($faqs);

        return view('faq-overview', [
            'faqs' => $faqs,
        ]);
    }

    public function getCreate () {

        return view('faq-edit');
    }

    public function getEdit ($id) {
        return view('faq-edit', []);
    }

    public function postSave (Request $r) {

        $r->validate([
            'question' => 'required|max:600',
            'answer' => 'required|max:600,'
        ]);

        $data = [
            'question' => $r->question,
            'answer' => $r->answer,
        ];
        $faq = Faq::create($data);

        return redirect()->route('overviewfaq');
    }

}
