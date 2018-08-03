

<?php

use Illuminate\Support\Facades\Input;
    $lite_amount = Input::get('lite_amount');

    if($lite_amount == 0){
        
        ?>
            <style type="text/css">#buy{display:block;}#bit{display:none;}
            </style>

        <?php
        }
      else{
        ?>
        <style type="text/css">
            #buy{display:none;}#bit{
            display:block;}
    
        </style>
        <?php
    
    }

    if ($lite_amount==0)
    {

    } else{

    /**
 * @category    Example1 - Pay-Per-Product (single crypto currency in payment box)
 * @package     GoUrl Cryptocurrency Payment API 
 * copyright 	(c) 2014-2018 Delta Consultants
 * @crypto      Supported Cryptocoins -	Bitcoin, BitcoinCash, Litecoin, Dash, Dogecoin, Speedcoin, Reddcoin, Potcoin, Feathercoin, Vertcoin, Peercoin, MonetaryUnit, UniversalCurrency
 * @website     https://gourl.io/bitcoin-payment-gateway-api.html#p1
 * @live_demo   https://gourl.io/lib/examples/pay-per-product.php
 */ 
	/********************** NOTE - 2018 YEAR *******************************************************************************/ 
	/*****                                                                                                             *****/ 
	/*****     This is iFrame Bitcoin Payment Box Example (2014 - 2017)                                                *****/ 
	/*****                                                                                                             *****/ 
	/*****     Available - new 2018 version; mobile friendly JSON payment box (own logo, white label product)          *****/
	/*****     New Demo with generation php payment box code - https://gourl.io/lib/examples/example_customize_box.php *****/
	/*****         White Theme - https://gourl.io/lib/examples/example_customize_box.php?theme=black                   *****/
	/*****         Black Theme - https://gourl.io/lib/examples/example_customize_box.php?theme=default     		   *****/
	/*****         Your Own Logo - https://gourl.io/lib/examples/example_customize_box.php?theme=default&logo=custom   *****/
	/*****                                                                                                             *****/ 
	/***********************************************************************************************************************/
	
	
	/**** CONFIGURATION VARIABLES ****/ 
	
	$userID 		= "";				// place your registered userID or md5(userID) here (user1, user7, uo43DC, etc).
    // you don't need to use userID for unregistered website visitors
    // if userID is empty, system will autogenerate userID and save in cookies
$userFormat		= "COOKIE";			// save userID in cookies (or you can use IPADDRESS, SESSION)
$orderID 		= "invoice000383";	// invoice number - 000383
$amountUSD		= $lite_amount;				// invoice amount - 2.21 USD
$period			= "NOEXPIRY";		// one time payment, not expiry
$def_language	= "en";				// default Payment Box Language
$public_key		= "32668AAVy4PhBitcoin77BTCPUBw8LJQEd4kwMY0UOsCXTSUUU"; // from gourl.io
$private_key	= "32668AAVy4PhBitcoin77BTCPRVierDZGPqnOoqmCi0Ch5vZwM";// from gourl.io
// IMPORTANT: Please read description of options here - https://gourl.io/api-php.html#options  

// *** For convert Euro/GBP/etc. to USD/Bitcoin, use function convert_currency_live() with Google Finance
// *** examples: convert_currency_live("EUR", "BTC", 22.37) - convert 22.37 Euro to Bitcoin
// *** convert_currency_live("EUR", "USD", 22.37) - convert 22.37 Euro to USD
/********************************/




/** PAYMENT BOX **/
$options = array(
"public_key"  => $public_key, 	// your public key from gourl.io
"private_key" => $private_key, 	// your private key from gourl.io
"webdev_key"  => "", 		// optional, gourl affiliate key
"orderID"     => $orderID, 		// order id or product name
"userID"      => $userID, 		// unique identifier for every user
"userFormat"  => $userFormat, 	// save userID in COOKIE, IPADDRESS or SESSION
"amount"   	  => 0,				// product price in coins OR in USD below
"amountUSD"   => $amountUSD,	// we use product price in USD
"period"      => $period, 		// payment valid period
"language"	  => $def_language  // text on EN - english, FR - french, etc
);
// Initialise Payment Class
$box = new Cryptobox ($options);

// coin name
$coinName = $box->coin_name(); 

// Successful Cryptocoin Payment received
if ($box->is_paid()) 
{
if (!$box->is_confirmed()) {
$message =  "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Awaiting transaction/payment confirmation";
}											
else 
{ // payment confirmed (6+ confirmations)
// one time action
if (!$box->is_processed())
{
// One time action after payment has been made/confirmed
// !!For update db records, please use function cryptobox_new_payment()!!

$message = "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Payment Confirmed. <br>(User will see this message one time after payment has been made)"; 

// Set Payment Status to Processed
$box->set_status_processed();  
}
else $message = "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Payment Confirmed. <br>(User will see this message during ".$period." period after payment has been made)"; // General message
}
}
else $message = "This invoice has not been paid yet";


// Optional - Language selection list for payment box (html code)
$languages_list = display_language_box($def_language);
// ...
// Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
// for send confirmation email, update database, update user membership, etc.
// You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
// ...
}

?>

@extends('layouts.inapp')
@section('content')
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row">

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Buy & Sell</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>
    
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box nobox marginBottom0">
                <div class="content-body">
                    <div class="row">
                       <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="../data/icons/sell-icon-lg.png" alt="">
                                </div>
                                <i class='pull-left ico-icon icon-md icon-primary mt-20'>
                                    <img src="../data/icons/sell-icon-so.png" class="ico-icon-o" alt="">
                                    <img src="../data/icons/sell-icon-sw.png" class="ico-icon-w" alt="">
                                </i>
                                <div class="stats" style="padding: 0 20px;border-left: 1px solid #eeebeb;">
                                    <h3 class="mb-5">Selling</h3>
                                    <span>Confiremed coins</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="../data/icons/buy-icon-lg.png" alt="">
                                </div>
                                <i class='pull-left ico-icon icon-md icon-primary mt-20'>
                                    <img src="../data/icons/buy-icon-so.png" class="ico-icon-o" alt="">
                                    <img src="../data/icons/buy-icon-sw.png" class="ico-icon-w" alt="">
                                </i>
                                <div class="stats" style="padding: 0 20px;border-left: 1px solid #eeebeb;">
                                    <h3 class="mb-5">Buying</h3>
                                    <span>Confiremed coins</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="../data/icons/exchange-icon-lg.png" alt="">
                                </div>
                                <i class='pull-left ico-icon icon-md icon-primary mt-20'>
                                    <img src="../data/icons/exchange-icon-so.png" class="ico-icon-o" alt="">
                                    <img src="../data/icons/exchange-icon-sw.png" class="ico-icon-w" alt="">
                                </i>
                                <div class="stats" style="padding: 0 20px;border-left: 1px solid #eeebeb;">
                                    <h3 class="mb-5">Exchange</h3>
                                    <span>Pending coins</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- End .row -->
                </div>
            </section>
        </div>



        <div class="col-lg-6" id="buy">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Buy Cryptocurrency</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="transfer-wraper">
                                <div class="form-group no-mb">
                                    <label class="form-label">Select the cryptocurrency</label>
                                    <span class="desc">minimum value "0.001 BTC"</span>

                                    <div class="input-group mb-10">
                                        <span class="input-group-addon"></span>
                                        
                                        <div class="input-group-btn"  style="width:100%">
                                            <button type="button" class="btn btn-red dropdown-toggle" style="width:100%;text-align:left" data-toggle="dropdown" aria-expanded="true">
                                                <i class="cc BTC mr-5"></i>Bitcoin <span class="caret" style="position: absolute;right: 10px;top: 14px;"></span>
                                            </button>
                                        </div>

                                    </div>

                                    <label class="form-label">Choose payment method</label>
                                    <span class="desc">minimum value "0.001 BTC"</span>
                                    <form method="POST" action="{{url('test')}}">
                                        {{ csrf_field() }}
                                    <label class="form-label">Exchange operation</label>
                                    <span class="desc">you can cancel this exchange easily</span>
                                    
                                    <div class="col-lg-5 no-pl">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Exchange amount" aria-describedby="basic-addon2"
                                            oninput="myFunction(this.value)" name="liteamount">
                                            <span class="input-group-addon" id="basic-addon1">Lite</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="exchange-img-wrapper">
                                            <img src="../data/icons/exchange-arrows.png" class="mt-5 center-block" style="width:25px" alt=""></div>
                                        </div>
                                    <div class="col-lg-5 no-pr">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Equivalent amount" aria-describedby="basic-addon2"
                                            oninput="" id="put2">
                                            <span class="input-group-addon" id="basic-addon2">BTC</span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%"
                                    >Buy Cryptocurrency</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="clearfix"></div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
</section>
@endsection