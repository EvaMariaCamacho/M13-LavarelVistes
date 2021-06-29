<!DOCTYPE html>
<html lang="en">

@include('Themes.head')

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            @include('Themes.header_movile')
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('Themes.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        @yield('content')
        <div class="page-container">
            <!-- HEADER DESKTOP-->
        @include('Themes.header')
            
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
        @yield('content')
           
        <!-- END PAGE CONTAINER-->

    </div>

    @include('Themes.footer')

</body>

</html>
<!-- end document-->