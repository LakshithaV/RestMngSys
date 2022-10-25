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

                                </br>

                                @if($message = Session::get('error'))
                                <div class='error'>
                                    <strong> {{$message}} </strong>
                                </div>
                                @endif

                                @if($message = Session::get('success'))
                                    <div class="success">
                                        <strong> {{$message}} </strong>
                                    </div>
                                @endif
                                <br>
                                <a class="btn btn-secondary" href="{{route('employee.create')}}"> Create New Employee</a>
                                
                                <div class="content table-responsive table-full-width">
                                
                                    <table class='table table-hover'>
                                        <thead>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Actions</th>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($employees as $emp)
                                        <tr>
                                            <td>{{ $emp->firstName }}</td>
                                            <td>{{ $emp->lastName }}</td>
                                            
                                            <td>{{ $emp->email }}</td>
                                            <td>{{ $emp->phone }}</td>
                                            <td>{{ $emp->address }}</td>
                                            <td>{{ $emp->gender }}</td>
                                            <td>{{ $emp->role }}</td>
                                            <td>{{ $emp->salary }}</td>
                                            <td>
                                                <form action="{{route('employee.destroy',$emp->id)}}" method="POST">
   
                                                    <a class="btn btn-info" href="{{route('employee.show',$emp->id)}}">Show</a>

                                                    <a class="btn btn-primary" href="{{route('employee.edit',$emp->id)}}">Edit</a>

                                                    @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

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
    </div>
</body>
</html>