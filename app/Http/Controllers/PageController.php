<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function services() {
        return view('services');
    }

    public function faq() {
        return view('faq');
    }

    public function policies() {
        return view('policies');
    }

    public function portfolio() {
        return view('portfolio');
    }

    
    public function contact() {
        return view('contact-form');
    }

    public function sent() {
        return view('sent-correctly');
    }
}
