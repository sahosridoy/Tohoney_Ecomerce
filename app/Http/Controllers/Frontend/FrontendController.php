<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
       return view('frontend.index');
    }


    // About Page

    public function about(){
       return view('frontend.about');
    }


    // Contact Page

    public function contact(){
       return view('frontend.contact');
    }
}
