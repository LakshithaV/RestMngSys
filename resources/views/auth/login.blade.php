<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/auth/bootstrap.min.css')}}">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" href="{{ asset('css/auth/animate.min.css')}}">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" href="{{ asset('css/auth/light-bootstrap-dashboard.css')}}">


   
    <link rel="stylesheet" href="{{ asset('css/auth/loginStyle.css')}}">

    <title>The Hangout|Employee Login</title>
</head>
<body>
    <div class="login_wrapper">

        <div class="login_holder">

            <form method="post" action="{{ url('login') }}" >
                @csrf
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

                <div>
                    <h4 style="border-bottom: 1px solid #7722ff;">Employee Login | The Hangout</h4>
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" autofocus>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>

                <input type="submit" name="submit" value="Login" class="btn btn-info btn-fill pull-right" style="background: #7722ff; border-color: #020005;" />
			    <div class="clearfix"></div>

            </form>

        </div>
    </div>
    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


