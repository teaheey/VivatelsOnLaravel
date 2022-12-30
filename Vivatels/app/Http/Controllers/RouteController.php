<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function galleryPage(){
        return view ('gallery');
    }

    public function aboutPage(){
        return view ('about');
    }

    public function servicePage(){
        return view ('service');
    }

    public function contactPage(){
        return view ('contact');
    }
}
