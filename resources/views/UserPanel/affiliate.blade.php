@extends('layouts.app')
@section('content')
<!-- START CONTENT -->
<div id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Affiliate Program</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">
                    <section class="box over-h">
                        <header class="panel_header">
                            <h2 class="title pull-left">Affiliate Members and Earning</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">    
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="div"> <canvas id="line-chartjs" height="200" width="600"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">
                    <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">The best Affiliate System</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="text-center no-mt no-mb">
                                            <div class="text-left">
                                                <h4 class="bold"> Select type of Affilite Bouns</h4> 
                                                <h4><small>By enablng this option you will recieve your affilite bouns directly paid out in BTC</small></h4>
                                            </div>
                                            <div class="col-xs-12 no-pl no-pr">
                                                <div class="col-xs-1 no-pl no-pr">
                                                    <div style="position:relative;padding: 7px 0 0;">
                                                        <input tabindex="3" type="checkbox" id="flat-checkbox-1" class="skin-flat-red" checked>
                                                    </div>
                                                </div>
                                                <div class="col-xs-11 no-pl" style="position:relative;padding: 0;">
                                                    <h4 class="icheck-label text-left form-label"><small><strong>HASHPOWER BOUNS</strong> Deactive / active</small></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 no-pl no-pr">
                                                <div class="col-xs-1 no-pl no-pr">
                                                    <div style="position:relative;padding: 7px 0 0;">
                                                        <input tabindex="3" type="checkbox" id="flat-checkbox-2" class="skin-flat-red">
                                                    </div>
                                                </div>
                                                <div class="col-xs-11 no-pl" style="position:relative;padding: 0;">
                                                    <h4 class="icheck-label text-left form-label"><small><strong>HASHPOWER BOUNS</strong> Deactive / active</small></h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 no-pl no-pr">
                                                <div class="col-xs-1 no-pl no-pr">
                                                    <div style="position:relative;padding: 7px 0 0;">
                                                        <input tabindex="3" type="checkbox" id="flat-checkbox-3" class="skin-flat-red">
                                                    </div>
                                                </div>
                                                <div class="col-xs-11 no-pl" style="position:relative;padding: 0;">
                                                    <h4 class="icheck-label text-left no-mb form-label"><small><strong>HASHPOWER BOUNS</strong> Deactive / active</small></h4>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="text-left mt-20">
                                                <h5 class="bold no-mb">What is the Affilite Bouns payment system?</h5> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <img src="../data/dashelements/affiliate-img.png" alt="" class="aff-img img-responsive">
                                    </div>
                                   
                                </div>
                            </div>
                    </section>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-8">
                    <section class="box has-border-left-3">
                        <header class="panel_header">
                            <h2 class="title pull-left">FAQ</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="bold no-mt">BitcoinLite Affilite Program</h4>
                                    <h4><small>Welcome to our affiliate program, Read our affiliate program terms and conditions <a href="#" class="color-primary">here</a></small></h4>
                                    <h5 class="mt-20 bold mb-20">Your Affiliate Link is</h5>
                                    <div class="form-group has-focus">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-white" id="field-12" value="https://www.BitcoinLite.com/?affiliate-id=172462989">
                                            <a href="#" class="input-group-addon"  data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                                        </div>
                                    </div>
                                    <!-- Bootstrap FAQ - START -->
                                    <div class="panel-group no-mb faq-panels" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How do I use my affiliate link ?</a>
                                        </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How does the affiliate link work ?</a>
                                            </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How bif are the reward ?</a>
                                        </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">What do you mean by a "Affiliate Ranking System" ?</a>
                                        </h4>
                                            </div>
                                            <div id="collapseSix" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
                                        </h4>
                                            </div>
                                            <div id="collapseEight" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">How do I rank up? Can I move down in rank?</a>
                                        </h4>
                                            </div>
                                            <div id="collapseNine" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bs faq end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4">
                    <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Affilite Bouns Stage</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="tile-progress bg-accent" style="margin-left:15px;margin-right:15px">
                                        <div class="content">
                                            <h4><i class="fa fa-clock-o icon-sm"></i>Next Bouns Stage</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                                            </div>
                                            <span>5% increase</span>
                                        </div>
                                    </div>

                                    <div class="tile-progress bg-accent" style="margin-left:15px;margin-right:15px">
                                        <div class="content">
                                            <h4><i class="fa fa-flask icon-sm"></i> This Stage Complete</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 79%"></div>
                                            </div>
                                            <span>79% complete</span>
                                        </div>
                                    </div>

                                    <div class="tile-progress bg-accent no-mb" style="margin-left:15px;margin-right:15px">
                                        <div class="content">
                                            <h4><i class="fa fa-dollar icon-sm"></i> Total Referral Earning</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 79%"></div>
                                            </div>
                                            <span>4,739 USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">
                    <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Affilite Ranking System</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="bold no-mt">Your Affilite Rank</h4>
                                        <h4 class="mb-10"><small>Gain free promotion upgrade with each ascending affiliate rank, your rank is <strong>(1) starter</strong> accumulated <strong>55$ in sales!</strong> Your next rank will unlock with 100$ in successful referrals.<a href="#" class="color-primary">here</a></small></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="reward-box">
                                            <span class="rank-span center-block badge badge-lg badge-primary f-s-14"><i class="fa fa-star complete color-white"></i>Your Rank</span>
                                            <img src="../data/icons/level1.png" class="center-block mt-20" style="max-width:120px" alt="">
                                            <h4 class="bold text-center mt-20">2.5% bouns</h4>
                                            <hr>
                                            <p><small>you will now gain <strong>2.5% </strong>bouns haspower with every new sale</small></p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="reward-box">
                                            <span class="rank-span center-block badge badge-lg f-s-14"><i class="fa fa-mail-forward complete color-white"></i>next Rank</span>
                                            <img src="../data/icons/level2.png" class="next center-block mt-20" alt="">
                                            <h4 class="bold text-center mt-20">3.5% bouns</h4>
                                            <hr>
                                            <p><small>you will now gain <strong>3.5% </strong>bouns haspower with every new sale</small></p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="reward-box">
                                            
                                            <img src="../data/icons/level3.png" class="next center-block mt-20" alt="">
                                            <h4 class="bold text-center mt-20">4.5% bouns</h4>
                                            <hr>
                                            <p><small>you will now gain <strong>5.5% </strong>bouns haspower with every new sale</small></p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="reward-box">
                                            
                                            <img src="../data/icons/level4.png" class="next center-block mt-20" alt="">
                                            <h4 class="bold text-center mt-20">5.5% bouns</h4>
                                            <hr>
                                            <p><small>you will now gain <strong>5.5% </strong>bouns haspower with every new sale</small></p>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                    </section>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4">
                    <section class="box has-border-left-3">
                        <header class="panel_header">
                            <h2 class="title pull-left">Top Affiliate Earners</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="trader-buy golden">
                                        <h6 class="angle-round">Nighy Strotman<span class="number">2,892,638 $</span></h6>
                                        <div class="progress progress-cls">
                                          <div class="progress-bar has-gradient-to-right-bottom" style="width:79.27% !important;">760.565 $</div>
                                        </div>
                                    </div>

                                    <div class="trader-buy golden">
                                        <h6 class="angle-round">Jack Nelison<span class="number">1,984,342 $</span></h6>
                                        <div class="progress progress-cls">
                                          <div class="progress-bar has-gradient-to-right-bottom" style="width:75.27% !important;">623.583 $</div>
                                        </div>
                                    </div>

                                    <div class="trader-buy golden">
                                        <h6 class="angle-round">Johan Charter<span class="number">1,745,070 $</span></h6>
                                        <div class="progress progress-cls">
                                          <div class="progress-bar has-gradient-to-right-bottom" style="width:69.27% !important;">500.739 $</div>
                                        </div>
                                    </div>

                                    <div class="trader-buy silver">
                                        <h6 class="angle-round">Mark Strotman<span class="number">1,200,000 $</span></h6>
                                        <div class="progress progress-cls">
                                          <div class="progress-bar has-gradient-to-right-bottom" style="width:65.27% !important;">360.739 $</div>
                                        </div>
                                    </div>

                                    <div class="trader-buy silver">
                                        <h6 class="angle-round">Nighy Strotman<span class="number">1,000,000 $</span></h6>
                                        <div class="progress progress-cls">
                                          <div class="progress-bar has-gradient-to-right-bottom" style="width:61.27% !important;">245.739 $</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="col-lg-8">
                    <section class="box has-border-left-3">
                        <header class="panel_header">
                            <h2 class="title pull-left">Affiliate Hits</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Affililate ID</th>
                                                    <th data-priority="1">Register Time</th>
                                                    <th data-priority="2">Referral Bouns</th>
                                                    <th data-priority="3">Status</th>
                                                    
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o complete"></i>BitcoinLite.com/?r=126515</th>
                                                    <td>17.24AM</td>
                                                    <td>10.56$</td>
                                                    <td><span class="status-complete">complete</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o pending"></i>BitcoinLite.com/?r=123675</th>
                                                    <td>18.14AM</td>
                                                    <td>23.56$</td>
                                                    <td><span class="status-pending">pending</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o pending"></i>BitcoinLite.com/?r=786515</th>
                                                    <td>20.25AM</td>
                                                    <td>10.56$</td>
                                                    <td><span class="status-pending">pending</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o cancelled"></i>BitcoinLite.com/?r=903eu9</th>
                                                    <td>21.24AM</td>
                                                    <td>101.56$</td>
                                                    <td><span class="status-cancelled">cancelled</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o complete"></i>BitcoinLite.com/?r=0208r4</th>
                                                    <td>21.50AM</td>
                                                    <td>10.56$</td>
                                                    <td><span class="status-complete">complete</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o complete"></i>BitcoinLite.com/?r=628893</th>
                                                    <td>21.59PM</td>
                                                    <td>293.56$</td>
                                                    <td><span class="status-complete">complete</span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o cancelled"></i>BitcoinLite.com/?r=569839</th>
                                                    <td>22.11PM</td>
                                                    <td>28.99$</td>
                                                    <td><span class="status-cancelled">cancelled</span></td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr>
                                                    <th><i class="fa fa-dot-circle-o pending"></i>BitcoinLite.com/?r=178848</th>
                                                    <td>22.34PM</td>
                                                    <td>78.34$</td>
                                                    <td><span class="status-pending">pending</span></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="clearfix"></div>


                


                <!-- MAIN CONTENT AREA ENDS -->
            </section>
        </div>
        <!-- END CONTENT -->
@endsection