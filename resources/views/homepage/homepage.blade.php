<!doctype html>
<html lang="en">

<head>
    <title>The Hangout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/homepage/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-icon mr-4">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center 
                                justify-content-center  text-decoration-none">
                                    <i class="fab fa-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center
                                justify-content-center text-decoration-none ">
                                    <i class="fab fa-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center
                                justify-content-center  text-decoration-none">
                                    <i class="fab fa-twitter"></i></a>
                            </p>
                        </div>
                        <div class="reg">
                            <a href="{{ url('emplogin') }}" class="text-decoration-none">Log In</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Nav-->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color" id="main-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">The Hangout</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav ml-auto links">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#hero" class="nav-link">Book Table</a>
                        </li>
                        <li class="nav-item">
                            <a href="#variety" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#menu" class="nav-link">Menu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End of Nav-->
    </section>
    <!---Hero Section-->
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h1 class="font-weight-bold">The Hangout</h1>
            </div>
            <div class="actions">
                <a href="{{ route('book_tables.index') }}" class="btn-get-started bg-warning text-decoration-none">Book Table Now</a>
            </div>
        </div>
    </section>
    <!---End of Hero Section-->

   <!--Variety----->
   <section id="variety" class="variety pt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex align-items-stretch ">
                <div class="card">
                    <div class="card-img">
                        <img src="../../images/FrontImage.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            The Hangout
                        </h5>
                        <p class="card-text">
                            Bejeweled as one of the finest hotel located in Kurunegala, we welcome you to The Hangout in Kurunegala. With easy access for your shopping, entertainment and business needs, we will ensure your stay is perfect and your experiences are complete.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
   </section>

   <<!--Food Menu-->
   <div class="container" id="menu">
    <div class=" row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center">
            <h2 class="font-weight-bold text-color glow">
                Explore our menu
            </h2>
        </div>
    </div>
    <div class="food-menu-card">
        <div class="media-body align-self-center g-pl-10">
            <div class="d-flex justify-content-between mb10">
                <h3>All our dishes are prepared by high profile culinary teams with worldwide experience and with a very unique and eye catching interior and décor. you are sure to enjoy your sophisticated evening.</h3>
                <div class="align-self-center">
                    <a href="../../images/Main Menu.pdf"><img src="../../images/menu.jpg"></a>
                </div>
            </div>
        </div>
   </div>
   </div>
   
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © The Hangout 2022</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#" target="new"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#" target="new"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="$" target="new"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>