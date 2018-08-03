<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Open About Page
    public function about(){
        return view('pages.about');
    }

    // Open Contact Page
    public function contact(){
        return view('pages.contact');
    }

    // Open Mining Page
    public function mining(){
        return view('pages.mining');
    } 
}
