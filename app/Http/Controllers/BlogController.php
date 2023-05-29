<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog_grid()
    {
        return view('blogs.blog-grid');
    }
}
