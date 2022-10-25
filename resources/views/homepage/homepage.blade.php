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
                            <a href="#" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Meals</a>
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

    <!--Product Section-->
    <section class="product-section bg-img py-3">
        <div class="container">
            <div class=" row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center">

                </div>
            </div>
            <!--End of title-->
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F3534789.jpg&w=380&h=380&c=sc&poi=face&q=85);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Kottu</span>
                            <h2 class="text-white">Chicken</h2>
                            <span class="price">LKR 330.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(http://orsimages.unileversolutions.com/ORS_Images/Knorr_en-LK/chicken-fried_43_1.1.146_326X580.Jpeg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Friderice</span>
                            <h2 class="text-white">Egg</h2>
                            <span class="price">LKR 230.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://harischandramills.com/wp-content/uploads/2018/06/2-2.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">

                            <span class="category font-weight-bold">Pittu</span>
                            <h2 class="text-white">Veg</h2>
                            <span class="price">LKR 130.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://www.vibrantplate.com/wp-content/uploads/2018/12/Curry-chicken-rice-05-480x480.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Rice and curry</a></span>
                            <h2 class="text-white">Chicken</h2>
                            <span class="price">LKR 340.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://m.buro247.my/images/Buro-Best-Thosai-in-Klang-Valley_CR.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Thosai</span>
                            <h2 class="text-white">Veg</h2>
                            <span class="price">LKR 130.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://harischandramills.com/wp-content/uploads/2018/06/3-2.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">String hoppers</span>
                            <h2 class="text-white">Veg</h2>
                            <span class="price">LKR 80.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://www.spoonforkbacon.com/wp-content/uploads/2021/03/best-pasta-recipes-roundup.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Lorem Ipsum</span>
                            <h2 class="text-white">Specification</h2>
                            <span class="price">$30.00</span>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3 d-flex">
                    <div class="product glow">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(https://kapilabakers.com/images/shorteat/shorteats-800x800.jpg);">
                            <div class="icons">
                                <p class="icon-block d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </p>
                            </div>

                        </div>
                        <div class="text text-center">
                            <span class="category font-weight-bold">Lorem Ipsum</span>
                            <h2 class="text-white">Specification</h2>
                            <span class="price">$30.00</span>
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="#" class="btn btn-prod d-block">
                        View all products
                        <i class="fas fa-carrot"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End of Product Section-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>