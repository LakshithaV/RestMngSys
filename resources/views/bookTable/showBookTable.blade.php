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

            <h3>The Hangout|Table Reservation</h3>
            @if($message = Session::get('success'))
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-calendar"></i></span>{{$message['date']}}</li>
                    <li><span class="fa-li"><i class="fa-solid fa-clock"></i></i></span>{{$message['time']}} PM</li>
                    <li><span class="fa-li"><i class="fa-solid fa-person"></i></i></span>{{$message['people']}} People ({{$message['seatingType']}})</li>
                </ul>
                <p><b>Important dining information</b><br>
                    We have a 20 minute grace period. Please
                    call us if you are running later than 20
                    minutes after your reservation time.
                    </p>

                <p><b>A note from the restaurant</b><br>
                    Thank you for choosing The Hangout. The dress code will be
                    Smart Casual. Should your plans change,
                    please let us know. We look forward to
                    serving you.</p>
            @endif
        </div>
    </div>
    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d9092a4876.js" crossorigin="anonymous"></script>

</body>
</html>


