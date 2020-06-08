<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home () {

        $blogs = Blog::get();
        // dd($blogs);

        return view('blog', [
            'blogs'=>$blogs,
        ]);
    }

}
