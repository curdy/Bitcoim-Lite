<?php

use Illuminate\Support\Facades\Input;
use App\BitcoinLite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('mining', 'PagesController@mining');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function () {

    $price = BitcoinLite::all();
        return view('UserPanel.index',compact('price'));
});

Route::get('userManagement', function () {
    return view('userPanel.usermanagement');
});

Route::get('buy-sell', function () {
    return view('userPanel.buy-sell');
});

Route::get('liteprice', function () {
    return view('userPanel.litepricing');
});

Route::resource('liteprice', 'SetPriceController');
/*
Route::get('test', function () {
    return view('userPanel.test');
});
*/

Route::get('order', function () {

    $lite_amount = Input::get('lite_amount');

    return view('userPanel.test',compact('lite_price'));

});

Route::post('test', function()
{
    
    $litecount = Input::get("liteamount");

    $liteamount = 92 * $litecount;
    return view('userPanel.test', compact('liteamount'));
    
});

Route::get('faq', function () {
    return view('pages.FAQ');
});
