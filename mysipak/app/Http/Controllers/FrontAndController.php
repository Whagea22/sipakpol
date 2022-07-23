<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontAndController extends Controller
{
    function index(){
        return view('frontand/index');
    }

    public function about()
    {
        return view('frontand/about');
    }

    public function pages()
    {
        return view('frontand/pages');
    }

    public function gallery()
    {
        return view('frontand/gallery');
    }

    public function news()
    {
        return view('frontand/news');
    }

    public function course()
    {
        return view('frontand/course');
    }

    public function contact()
    {
        return view('frontand/contact');
    }
}