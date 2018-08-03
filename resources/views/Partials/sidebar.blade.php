<div class="page-sidebar fixedscroll">
            
        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">


            <ul class='wraplist'>
                <li class='menusection'>Main</li>
                <li class="">
                    <a href="{{ url('dashboard')}}">
                        <i class="fa fa-th-large"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                @can('userMan',Auth::user())
                <li class="">
                        <a href="{{ url('userManagement')}}"onclick="location.href='{{ url('userManagement')}}'">
                            <i class="fa fa-th-large"></i>
                            <span class="title">User Management</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ url('liteprice')}}"onclick="location.href='{{ url('liteprice')}}'">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Bitcoin Lite Price</span>
                        </a>
                    </li>
                    @endcan


                    @can('client',Auth::user())
                <li class="">
                    <a href="{{ url('buy-sell')}}">
                        <i class="img">
                            <img src="../data/icons/coins.png" style="width:16px" alt="">
                        </i>
                        <span class="title">Buy & Sell Bitcoin LITE</span>
                    </a>
                </li>
                @endcan
                <li class="">
                    <a href="payment-gateways.html">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Payment Gateways</span>
                    </a>
                </li>
                <li class="">
                    <a href="affailite-program.html">
                        <i class="fa fa-crosshairs"></i>
                        <span class="title">Affailiate Program</span>
                    </a>
                </li>
                <li class="">
                    <a href="my-wallet.html">
                        <i class="img"><img src="../data/icons/wallet-o.png" style="width:16px" alt=""></i>
                        <span class="title">My Wallet</span>
                    </a>
                </li>

                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-gear"></i>
                        <span class="title">Settings</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="settings.html">General Settings</a>
                        </li>
                        <li>
                            <a class="" href="account-confirmation.html">Account Confirmation</a>
                        </li>
                    </ul>
                </li>
                
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-question-circle"></i>
                        <span class="title">Support</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="ui-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a class="" href="ui-support.html">Help center</a>
                        </li>
                    </ul>
                </li>
               
            </ul>

        </div>
        <!-- MAIN MENU - END -->

    </div>