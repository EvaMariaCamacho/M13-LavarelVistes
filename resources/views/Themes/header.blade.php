 <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                       <div class="typo-headers">
                      <h1 class="pb-2 display-4 text-white">Hotel de Vacaciones</h1>
                    </div>
                    </div>
                    <div class="header__navbar">
                        
                    </div>
                    <div class="header__tool">
                         <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ asset('Admin/images/icon/avatar-01.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Acceso</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                               <div class="account-dropdown__footer">
                                        <ul style="list-style: none">
                                            @guest
                                            <li>
                                                <a class="nav-link" href="{{ route('login') }}">
                                                    <i class="zmdi zmdi-power"></i>Login</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('register') }}">
                                                    <i class="zmdi zmdi-power"></i>Register</a>
                                            </li>
                                            @else
                                            <li>
                                                <a class="nav-link" href="{{ route('dashboard') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->