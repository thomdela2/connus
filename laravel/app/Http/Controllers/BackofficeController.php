<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Faq;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function blogOverview () {

        $blogs = Blog::get();
        // dd($blogs);

        return view('blog-overview', [
            'blogs' => $blogs,
        ]);
    }

    public function blogAdd () {

        return view('blog-edit', [
            'blog' => null,
        ]);
    }

    public function blogEdit (Blog $blog) {

        // dd($blog);

        return view('blog-edit', [
            'blog' => $blog,
        ]);
    }



    public function faqOverview () {

        $faqs = Faq::get();
        // dd($faqs);

        return view('faq-overview', [
            'faqs' => $faqs,
        ]);
    }

    public function faqAdd () {

        return view('faq-edit');
    }

    public function faqEdit ($id) {
        return view('faq-edit', []);
    }

    public function blogSave (Request $r) {

        $r->validate([
            'title' => 'required|max:256',
            'content' => 'required|max:100,'
        ]);

        $data = [
            'title' => $r->title,
            'content' => $r->content,
        ];
        $blog = Blog::create($data);

        return redirect()->route('overviewblogs');
    }

    public function faqSave (Request $r) {

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
