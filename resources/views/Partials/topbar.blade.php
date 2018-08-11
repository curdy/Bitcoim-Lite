        <div class='logo-area'>
            <h1 style="padding-left: 20px; padding-top: 2px">Bitcoin Lite<h1>
        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>

                    <!-- start here -->

                    @guest

                    <!-- `if guests, then hide these -->

                    @else
                    <li class="message-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-accent">0</span>
                        </a>
                        <ul class="dropdown-menu messages animated fadeIn">

                            <li class="list">

                                                                

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li class="notify-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-accent">0</span>
                        </a>
                        <ul class="dropdown-menu notifications animated fadeIn">
                            <li class="total">
                                <span class="small">
                                You have <strong>0</strong> new notifications.
                                <a href="javascript:;" class="pull-right">Mark all as Read</a>
                            </span>
                            </li>
                            <li class="list">

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    

                                </ul>

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endguest
                    <!-- end here -->
                    <li class="hidden-sm hidden-xs searchform">
                        <form action="#" method="post">
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            </div>
                            <input type='submit' value="">
                        </form>
                    </li>
                    
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">

                    @guest
                    <li class="profile">
                            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-3">
                                                        
                                                        <button type="button" class="btn btn-default navbar-btn"
                                                        onclick="location.href='{{ url('login') }}'">Sign in</button>
                                                        <button type="button" class="btn btn-success navbar-btn"
                                                        onclick="location.href='{{ url('register') }}'">Create account</button>
               
                                                    </div>
                            </li>
                    @else

                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="../data/profile/profile.jpg" alt="user-image" class="img-circle img-inline">
                            <span>{{Auth::user()->first_name.' '.Auth::user()->last_name}} <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="account-confirmation.html">
                                    <i class="fa fa-wrench"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="ui-profile.html">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="ui-support.html">
                                    <i class="fa fa-info"></i> Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" act onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                            {{ __('Logout') }}>
                                    <i class="fa fa-lock"></i>Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="chat-toggle-wrapper">
                        <a href="#" data-toggle="chatbar" class="toggle_chat">
                            <i class="fa fa-comments"></i>
                            <span class="badge badge-accent">9</span>
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>

