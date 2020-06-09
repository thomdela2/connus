<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home () {

        $blogs = Blog::get();
        // dd($blogs);

        return view('blogs.blog', [
            'blogs'=>$blogs,
        ]);
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

        // dd($blog);

        return view('blogs.blog-edit', [
            'blog' => $blog,
        ]);
    }

    public function postSave (Request $r) {

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

}
