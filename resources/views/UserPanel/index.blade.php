@extends('layouts.inapp')
@section('content')
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Dashboard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index-dashboard.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                
                                <li class="active">
                                    <strong>Dashboard</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <section class="box nobox marginBottom0">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box has-gradient-to-right-bottom">
                                        <div class="icon-after cc BTC-alt"></div>
                                        <i class='pull-left cc BTC-alt icon-md icon-white mt-10'></i>
                                        <div class="stats">
                                            <h3 class="color-white mb-5">{{Auth::user()->bitcoin_ballance}} BTC</h3>
                                            <span>Wallet BTC balance</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after cc DASH-alt"></div>
                                        <i class='pull-left cc DASH-alt icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <h3 class="mb-5">{{Auth::user()->lite_ballance}} LITE</h3>
                                            <span>Wallet LITE balance</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after cc LTC-alt"></div>
                                        <i class='pull-left cc LTC-alt icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <h3 class="mb-5">@foreach ($price as $price){{$price ->rate_btc}} @endforeach BTC</h3>
                                            <span>Bitcoin LITE to BTC</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End .row -->
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Realtime Statistics, Prices and Marketcap</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                
                                <div class="main-top-nav-margin">
                                    <!-- START Magen plugin DOM -->
                                    <div id="realtimepricing-plugin" class=""></div>
                                    <!-- END Magen plugin DOM -->
                                </div>
        
                                </div>
                            </div>
                            <!-- End .row -->

                        </div>
                    </section>
                </div>
                
                <div class="clearfix"></div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
@endsection