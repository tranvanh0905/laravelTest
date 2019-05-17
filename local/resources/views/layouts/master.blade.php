<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{ asset('css/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('css/theme.css')}}" rel="stylesheet" media="all">
    <title>
        @section('title')
        @show
    </title>
</head>
<body class="animaition">
    <div class="page-wrapper">
    @include('layouts.header')
    @include('layouts.nav')
    @yield('content')
    </div>
</body>
    <script src="{!! asset('js/vendor/jquery-3.2.1.min.js')!!}"></script>
    <!-- Bootstrap JS-->
    <script src="{!! asset('js/vendor/bootstrap-4.1/popper.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/bootstrap-4.1/bootstrap.min.js')!!}"></script>
    <!-- Vendor JS       -->
    <script src="{!! asset('js/vendor/slick/slick.min.js')!!}">
    </script>
    <script src="{!! asset('js/vendor/wow/wow.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/animsition/animsition.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}">
    </script>
    <script src="{!! asset('js/vendor/counter-up/jquery.waypoints.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/counter-up/jquery.counterup.min.js')!!}">
    </script>
    <script src="{!! asset('js/vendor/circle-progress/circle-progress.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/perfect-scrollbar/perfect-scrollbar.js')!!}"></script>
    <script src="{!! asset('js/vendor/chartjs/Chart.bundle.min.js')!!}"></script>
    <script src="{!! asset('js/vendor/select2/select2.min.js')!!}"></script>
</html>