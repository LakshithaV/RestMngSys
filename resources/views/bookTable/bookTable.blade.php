<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/bookTable/bootstrap.min.css')}}">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" href="{{ asset('css/bookTable/animate.min.css')}}">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" href="{{ asset('css/bookTable/light-bootstrap-dashboard.css')}}">


   
    <link rel="stylesheet" href="{{ asset('css/bookTable/reservationStyle.css')}}">

    <title>The Hangout|Table Reservation</title>
</head>
<body>
    <div class="bookTable_wrapper">

        <div class="bookTable_holder">

            <form method="post" action="{{ route('book_tables.store') }}" >
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
                        Reservation | The Hangout</h4>
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
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number" autofocus>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label>Number of People</label>
                    <select name="people" class="form-control">
                        <option value="1">1 people</option><option value="2">2 people</option><option value="3">3 people</option><option value="4">4 people</option><option value="5">5 people</option><option value="6">6 people</option><option value="7">7 people</option><option value="8">8 people</option><option value="9">9 people</option><option value="10">10 people</option><option value="11">11 people</option><option value="12">12 people</option><option value="13">13 people</option><option value="14">14 people</option><option value="15">15 people</option>
                    </select>
                </div>
                
                <div class="form-inline">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Enter Date">
                
                    <label>Time</label>
                    <select name="time" class="form-control">
                        <option value="15.00">3.00 pm</option><option value="15.30">3.30 pm</option><option value="16.00">4.00 pm</option><option value="16.30">4.30 pm</option><option value="17.00">5.00 pm</option><option value="17.30">5.30 pm</option><option value="18.00">6.00 pm</option><option value="18.30">6.30 pm</option><option value="19.00">7.00 pm</option><option value="19.30">7.30 pm</option><option value="20.00">8.00 pm</option><option value="20.30">8.30 pm</option><option value="21.00">9.00 pm</option><option value="21.30">9.30 pm</option><option value="22.00">10.00 pm</option><option value="22.30">10.30 pm</option><option value="23.00">11.00 pm</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Seating Type</label>
                    <select name="seatingType" class="form-control">
                        <option value="Standard">Standard</option><option value="Outdoor">Outdoor</option><option value="High top">High top</option><option value="Counter">Counter</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Occasion</label>
                    <select name="occasion" class="form-control">
                        <option value="" disabled selected>Select an occation (optional)</option><option value="Birthday">Birthday</option><option value="Anniversary">Anniversary</option><option value="Date">Date</option><option value="Special Occasion">Special Occasion</option><option value="Business Meal">Business Meal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Special Request</label>
                    <input type="text" name="request" class="form-control" placeholder="Any special request (optional)">
                </div>

                <input type="hidden" name="action" value="Pending">

                <p>* We may contact you about this
                    reservation, so please ensure your email
                    and phone number are up to date.</p>

                <input type="submit" name="submit" value="Confirm Reservation" class="btn btn-info btn-fill pull-right" style="background: #7722ff; border-color: #020005;" />
			    <div class="clearfix"></div>

                

            </form>

        </div>
    </div>
    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


