<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function getIndex () {

        $faqs = Faq::get();

        return view('faqs.faq-overview', [
            'faqs' => $faqs,
        ]);
    }

    public function getCreate () {

        return view('faqs.faq-edit', [
            'faq' => null,
        ]);
    }

    public function getEdit (Faq $faq) {

        return view('faqs.faq-edit', [
            'faq' => $faq,
        ]);
    }

    public function getDeleted (Faq $faq) {

        $faq->delete();
        return redirect()->route('overviewfaq');
    }

    public function postSave (Request $r) {

        $validationRules = [
            'question' => 'required|max:600',
            'answer' => 'required|max:600,'
        ];

        if($r->id) {
            $validationRules['question'] = 'required|max:600' . $r->id;
            $validationRules['answer'] = 'required|max:600' . $r->id;
        } else {
            $validationRules['question'] = 'required|max:600';
            $validationRules['answer'] = 'required|max:600';
        }

        $r->validate($validationRules);

        $data = [
            'question' => $r->question,
            'answer' => $r->answer,
        ];

        if($r->id) {
            $faq = Faq::where('id', $r->id)->first();
            $faq->update($data);
        } else {
            $faq = Faq::create($data);
        }

        return redirect()->route('overviewfaq');
    }

}
