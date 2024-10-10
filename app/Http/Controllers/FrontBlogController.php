<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
     public function  frontblog(){

        $pagename='blog';
        $blog = Blog::paginate(9);
return view('frontend.blog', compact('blog','pagename'));
    }
}
