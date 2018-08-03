<?php

namespace App\Http\Controllers;

use App\BitcoinLite;
use Illuminate\Http\Request;

class SetPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = BitcoinLite::all();
        return view('UserPanel.litepricing',compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $BitcoinLite = new BitcoinLite;
        $BitcoinLite -> name = 'Bitcoin Lite';
        $BitcoinLite -> rate_btc = $request -> rate_btc;
        $BitcoinLite -> buy_rate_btc = $request -> buy_rate_btc;
        $BitcoinLite -> sell_rate_btc = $request -> sell_rate_btc;
        $BitcoinLite -> save(); 

        return view('liteprice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = BitcoinLite::find($id);
        return view('UserPanel.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $BitcoinLite = BitcoinLite::find($id);
        $BitcoinLite -> name = 'Bitcoin Lite';
        $BitcoinLite -> rate_btc = $request -> rate_btc;
        $BitcoinLite -> buy_rate_btc = $request -> buy_rate_btc;
        $BitcoinLite -> sell_rate_btc = $request -> sell_rate_btc;
        $BitcoinLite -> save(); 

        return view('liteprice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
