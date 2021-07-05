<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('Admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('Admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/slick/slick.css" rel="stylesheet') }}" media="all">
    <link href="{{ asset('Admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('Admin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">

@section('template_title')
    {{ $clientes->name ?? 'Show Cliente' }}
@endsection

@include('Themes.header')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cliente.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $clientes->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apelllido:</strong>
                            {{ $clientes->apelllido }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $clientes->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $clientes->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $cliente->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div> 
 
 <!-- Jquery JS-->
    <script src="{{ asset('Admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('Admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('Admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('Admin/js/main.js')}}"></script>
