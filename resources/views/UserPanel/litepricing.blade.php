@extends('layouts.inapp')
@section('content')
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Bitcoin LITE Price Management</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-dashboard.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="form-elements.html">Bitcoin LITE Price Management</a>
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
                            <div class="r4_counter db_box">
                                    @foreach ($price as $price)
                                    <a href="{{'/liteprice/'.$price->id.'/edit'}}" >
                                <div class="icon-after cc LTC-alt"></div>
                                <i class='pull-left cc LTC-alt icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5"> {{$price ->rate_btc}} BTC</h3>
                                    
                                    <span>LITE price in BTC</span>
                                
                                </div>
                            </a>
                                @endforeach 
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
                    <h2 class="title pull-left">Pricing</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-9 col-xs-10">

                            <form action="/liteprice/1" method="put">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="form-label" >Rate</label>
                                    <input type="number" step="any" class="form-control" name="rate_btc" id="rate_btc" placeholder="Enter price in BTC">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" >Buy rate: in Percentage</label>
                                    <input type="number" class="form-control" name="buy_rate_btc" id="buy_rate_btc" placeholder="Enter buy rate">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" >Sell rate: in Percentage:</label>
                                    <input type="number" class="form-control" name="sell_rate_btc" id="sell_rate_btc" placeholder="Enter sell rate">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </section>
        </div>
        </div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
</section>
@endsection