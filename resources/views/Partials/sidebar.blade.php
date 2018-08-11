<div class="page-sidebar fixedscroll">
            
        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">


            <ul class='wraplist'>
            
                <li class='menusection'>Main</li>

                @guest
                <li class="">
                    <a href="{{ url('/')}}">
                        <i class="fa fa-home"></i>
                        <span class="title">Home</span>
                    </a>
                </li>
                
                <li class="">
                    <a href="{{ url('mining')}}">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <span class="title">Minging</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('about')}}">
                        <i class="glyphicon glyphicon-info-sign"></i>
                        <span class="title">About Bitcoin Lite</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('affiliate')}}">
                        <i class="fa fa-crosshairs"></i>
                        <span class="title">Affailiate Program</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span class="title">Account</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{ url('login')}}">Sign in</a>
                        </li>
                        <li>
                            <a class="" href="{{ url('register')}}">Sign up</a>
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
                            <a class="" href="{{ url('faq')}}">FAQ</a>
                        </li>
                        <li>
                            <a class="" href="{{ url('help')}}">Help center</a>
                        </li>
                    </ul>
                </li>
                @else

                <li class="">
                    <a href="{{ url('dashboard')}}">
                        <i class="fa fa-th-large"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                @can('userMan',Auth::user())
                <li class="">
                        <a href="{{ url('userManagement')}}"onclick="location.href='{{ url('userManagement')}}'">
                            <i class="fa fa-user"></i>
                            <span class="title">User Management</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ url('liteprice')}}"onclick="location.href='{{ url('liteprice')}}'">
                            <i class="fa fa-usd"></i>
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
                
                <li class="">
                    <a href="{{url('withdraw')}}">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Withdraw</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('affiliate')}}">
                        <i class="fa fa-crosshairs"></i>
                        <span class="title">Affailiate Program</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('mining')}}">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <span class="title">Minging</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('wallet')}}">
                        <i class="img"><img src="../data/icons/wallet-o.png" style="width:16px" alt=""></i>
                        <span class="title">My Wallet</span>
                    </a>
                </li>
                @endcan
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-gear"></i>
                        <span class="title">Settings</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{ url('settings')}}">General Settings</a>
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
                            <a class="" href="{{ url('faq')}}">FAQ</a>
                        </li>
                        <li>
                            <a class="" href="{{ url('help')}}">Help center</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ url('about')}}">
                        <i class="glyphicon glyphicon-info-sign"></i>
                        <span class="title">About Bitcoin Lite</span>
                    </a>
                </li>
               @endguest
            </ul>

        </div>
        <!-- MAIN MENU - END -->

    </div>