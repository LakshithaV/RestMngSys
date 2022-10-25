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
                

                    <div class="content" id="rest">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name : </strong>
                                            {{$employee->firstName}} 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Last Name : </strong>
                                            {{$employee->lastName}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Email : </strong>
                                            {{$employee->email}} 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Phone : </strong>
                                            {{$employee->phone}} 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Address : </strong>
                                            {{$employee->address}} 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Gender : </strong>
                                            {{$employee->gender}} 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Role : </strong>
                                            {{$employee->role}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Salary : </strong>
                                            {{$employee->salary}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Password : </strong>
                                            {{$employee->password}}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <a href="{{route('employee.index')}}" Type="button">Back</a>
                                    </div>

                


                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
    </div>
</body>
</html>