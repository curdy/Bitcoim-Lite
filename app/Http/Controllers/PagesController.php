<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    // Open About Page
    public function about(){
        return view('pages/about');
    }

    // Open Contact Page
    public function contact(){
        return view('pages.contact');
    }

    // Open Mining Page
    public function mining(){
        return view('pages/mining');
    } 

    // Open Faq Page
    public function faq(){
        return view('pages/faq');
    }

    // Open withdrawal Page
    public function withdraw(){
        return view('UserPanel/withdraw');
    }

    // Open walletPage
    public function wallet(){
        return view('UserPanel/wallet');
    }
    // Open settings Page
    public function settings(){
        return view('UserPanel/settings');
    }

    // Open affiliate Page
    public function affiliate(){
        return view('UserPanel/affiliate');
    }

    // Open help Page
    public function help(){
        return view('pages/help');
    }

    public function buysell(){
        return view('UserPanel/buy-sell');
    }

    public function payment(){
    $litecount = Input::get("liteamount");

    $liteamount = 32 * $litecount;
    return view('UserPanel/test', compact('liteamount'));
    }

}
