<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hangout</title>

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.min.css')}}">
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/animate.min.css')}}">
    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/light-bootstrap-dashboard.css')}}">
    <!--     Fonts and icons     -->
	<link rel="stylesheet" href="{{ asset('css/dashboard/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
    <div class="wrapper">
        <!-- Side Bar-->
        <div class="sidebar" data-color="#000">
            @include('dashboard/sideWrapper')

        <!-- Main Panel -->
        <div class="main-panel">
            
            @include('dashboard/mainPanel')
        
       <!-- Reservations -->
        <div class="content" id="rest">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Reservation List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                
                                <table class='table table-hover'>
                                    <thead>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>No of Guests</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Seating Type</th>
                                        <th>Occasion</th>
                                        <th>Request</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record)
                                        <tr>
                                            <td>{{ $record->firstName }}</td>
                                            <td>{{ $record->lastName }}</td>
                                            <td>{{ $record->people }}</td>
                                            <td>{{ $record->email }}</td>
                                            <td>{{ $record->phone }}</td>
                                            <td>{{ $record->date }}</td>
                                            <td>{{ $record->time }}</td>
                                            <td>{{ $record->seatingType }}</td>
                                            <td>{{ $record->occasion }}</td>
                                            <td>{{ $record->request }}</td>
                                            <td>{{ $record->action }}</td>
                                            <td><a href="{{ url('Done', $record->id) }}"><button class="btn btn-fill" style="background: #09f119; color: #020005; font-size: 10px; padding: 5px 5px;">Done</button></a>
                                                <a href="{{ url('Confirm', $record->id) }}"><button class="btn btn-fill" style="background: #f6ee06; color: #020005; font-size: 10px; padding: 5px 5px;">Confirm</button></a>
                                                <a href="{{ url('Cancelled', $record->id) }}"><button class="btn btn-fill" style="background: #e90a0a; color: #020005; font-size: 10px; padding: 5px 5px;">Cancel</button></a>
                                            </td>
                                        </tr>
                                        @endforeach
        
                                    </tbody>
                                </table>
        
                            </div>
                        </div>
                    </div>                    
        
                </div>
            </div>
        </div>



    </div>
</body>
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

</html>



