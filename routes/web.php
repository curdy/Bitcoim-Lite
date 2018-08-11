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

Route::get('bit', function () {
    return view('bitcoin');
});

Route::get('about', 'PagesController@about')->name('mining');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('mining', 'PagesController@mining')->name('mining');
Route::get('faq', 'PagesController@faq')->name('faq');

Route::get('withdraw', 'PagesController@withdraw')->name('withdraw');
Route::get('affiliate', 'PagesController@affiliate')->name('affiliate');
Route::get('wallet', 'PagesController@wallet')->name('wallet');
Route::get('settings', 'PagesController@settings')->name('settings');
Route::get('help', 'PagesController@help')->name('help');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function () {

    $price = BitcoinLite::all();
        return view('UserPanel.index',compact('price'));
});

Route::get('userManagement', function () {
    return view('userPanel.usermanagement');
});

Route::get('/buy-sell', 'PagesController@buysell')->name('buy-sell');

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

Route::post('/payment', 'PagesController@payment')->name('payment');

Route::get('faq', function () {
    return view('pages.FAQ');
});
