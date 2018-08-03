<?php

namespace App\Http\Controllers;

use App\BitcoinLite;
use Illuminate\Http\Request;

class litePriceController extends Controller
{
    public function index(){
        
        $name = BitcoinLite::all();
        return view('UserPanel.litepricing')->with('name',$name);
    }
}
