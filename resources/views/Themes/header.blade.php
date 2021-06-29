<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="image">
                    <!--<img src="Admin/images/icon/avatar-01.jpg" alt="John Doe" />-->
                </div>
                <!-- <form class="form-header" action="" method="POST">
                         <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                         <button class="au-btn--submit" type="submit">
                             <i class="zmdi zmdi-search"></i>
                         </button>
                     </form>-->
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="Admin/images/icon/avatar-01.jpg" alt="" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                   <!-- <div class="image">
                                        <a href="#">
                                            <img src="Admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>-->
                                    <!--<div class="content">
                                        <h5 class="name">
                                            <a href="#">john doe</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>-->
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
                                <!-- <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>-->
                                <!-- <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- /.content-header -->
<!-- SidebarSearch Form -->

</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->