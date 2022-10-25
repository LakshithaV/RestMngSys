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

                   
                    <form method="post" action="{{route('employee.store')}}">
                @csrf
                <!-- Validation Error -->
                @if ($errors->any())
                <div class='error'>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
                @endif

                <!-- Authentication Error -->
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
                <div>
                    <h4 style="border-bottom: 1px solid #7722ff;">
                        Creating a new Employee</h4>
                </div>

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstName" class="form-control" placeholder="Enter first name" autofocus>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastName" class="form-control" placeholder="Enter last name" autofocus>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter the email">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter the password">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number" autofocus>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter the address">
                </div>
                
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" placeholder="">
                </div>


                <input type="submit" name="submit" value="" class="btn btn-info btn-fill pull-right" style="background: #7722ff; border-color: #020005;" />
			    <div class="clearfix"></div>

                

            </form>



















                </div>
            </div>
        </div>
    </div>
</body>
</html>