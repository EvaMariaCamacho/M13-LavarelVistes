 <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <div class="header__logo">
                       <div class="typo-headers">
                      <h1 class="pb-2 display-4 text-white">Hotel de Vacaciones</h1>
                    </div>
                    </div>
                </div>
            </div>
           
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="Admin/images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">Entrar</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="account-dropdown__footer">
                                        <ul>
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
        <!-- END HEADER MOBILE -->