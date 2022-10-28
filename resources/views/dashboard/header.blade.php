<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hangout</title>

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/bootstrap.min.css')}}">
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/animate.min.css')}}">
    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/light-bootstrap-dashboard.css')}}">
    <!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    @livewireStyles

</head>
<body>
    <div class="wrapper">
        <!-- Side Bar-->
        <div class="sidebar" data-color="#000">
            @include('dashboard/sideWrapper')

        <!-- Main Panel -->
        <div class="main-panel">
            
            @include('dashboard/mainPanel')

            @yield('content')
        </div>
       
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--   Core JS Files   -->
<script type="text/javascript" src="/js/dashboard/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap.min.js"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script type="text/javascript" src="/js/dashboard/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script type="text/javascript" src="/js/dashboard/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script type="text/javascript" src="/js/dashboard/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script type="text/javascript" src="/js/dashboard/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script type="text/javascript" src="/js/dashboard/demo.js"></script>

@livewireScripts

</html>