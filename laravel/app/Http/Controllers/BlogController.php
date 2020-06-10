<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex () {

        $blogs = Blog::get();

        return view('blogs.blog-overview', [
            'blogs' => $blogs,
        ]);
    }

    public function getCreate () {

        return view('blogs.blog-edit', [
            'blog' => null,
        ]);
    }

    public function getEdit (Blog $blog) {

        return view('blogs.blog-edit', [
            'blog' => $blog,
        ]);
    }

    public function getDeleted (Blog $blog) {
        $blog->delete();
        return redirect()->route('overviewblogs');
    }

    public function postSave (Request $r) {

        $validationRules = [
            'title' => 'required|max:256',
            'content' => 'required|max:1000,'
        ];

        if($r->id) {
            // Klant updaten
            $validationRules['title'] = 'required|max:256' . $r->id;
            $validationRules['content'] = 'required|max:1000' . $r->id;

        } else {
            // Nieuwe klant
            $validationRules['title'] = 'required|max:256';
            $validationRules['content'] = 'required|max:1000';
        }

        $r->validate($validationRules);

        $data = [
            'title' => $r->title,
            'content' => $r->content,
        ];

        if($r->id) {
            // Klant updaten
            $blog = Blog::where('id', $r->id)->first();
            $blog->update($data);

        } else {
            // Nieuwe klant
            $blog = Blog::create($data);
        }

        return redirect()->route('overviewblogs');
    }

}
