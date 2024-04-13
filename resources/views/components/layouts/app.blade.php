<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? '3d-Cakes' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('front')}}/assets/img/favicon.png" rel="icon">
    <link href="{{url('front')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{--
    <link href="{{url('front')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('front')}}/css/header.css">
    <link rel="stylesheet" href="{{url('front')}}/css/product.css">
    <link rel="stylesheet" href="{{url('front')}}/css/footer.css">
    <link rel="stylesheet" href="{{url('front')}}/css/slider.css">
    <link rel="stylesheet" href="{{url('front')}}/css/body.css">

    <!-- Template Main CSS File -->
    <link href="{{url('front')}}/assets/css/style.css" rel="stylesheet">


    @livewireStyles
</head>

<body>


    <!-- ======= Top Bar ======= -->
    <div class="page-header">
        <div class="container width_Global">
            <div class="row align-items-center pt-5 my-4">
                <div class="col text-center text-sm-center text-md-start text-lg-start">
                    <div class=""><img class="img-fluid" src="{{url('front')}}/image/web-logo1.png" alt=""></div>
                </div>
                <div class="col d-none d-md-flex d-lg-flex justify-content-end">
                    <div class="text-end">
                        <div class="row justify-content-end d-none d-md-flex d-lg-flex">
                            <div class="col-auto">
                                <h6 class=""><b>Edinburgh:</b> 0131 337 9990</h6>
                            </div>
                            <div class="col-auto">
                                <h6 class=""><b>Glasgow:</b> 0141 378 0027</h6>
                            </div>
                        </div>
                        <div class="">
                            <ul class="text-uppercase d-none d-md-flex d-lg-flex justify-content-end">
                                <li class="pe-3"><a class="text-decoration-none black" href="/">My Account</a></li>
                                <li class="pe-3"><a class="text-decoration-none black" href="/">My Wishlist</a></li>
                                <li class=""><a class="text-decoration-none black" href="/">Log In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-md-none d-lg-none mt-5 px-5">
                <div class="col-6 p-0 text-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary rounded-0 bg-black dropdown-toggle w-100 menu-btn"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="menu-icon" src="{{url('front')}}/image/menu(1).png" alt="">
                        </button>
                        <ul class="dropdown-menu slider w-75 p-0">
                            <li><a class="dropdown-item" href="#">MY ACCOUNT</a></li>
                            <li><a class="dropdown-item" href="#">MY WISHLIST</a></li>
                            <li><a class="dropdown-item" href="#">LOG IN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 p-0">
                    <div class="dropdown">
                        <button class="btn btn-secondary rounded-0 bg-black dropdown-toggle w-100" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><img class="menu-icon1 p-1 "
                                src="{{url('front')}}/image/cart.png" alt=""></button>

                        <ul class="dropdown-menu  p-0">
                            <li class="px-3 py-1"><a class="dropdown-item p-0" href="#">You have no items in your</a>
                            </li>
                            <li class="px-3 py-1"><a class="dropdown-item p-0" href="#">shopping cart.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4 d-lg-none d-md-none">
        <input type="text" class="form-control rounded-0" placeholder="Search entire store here..."
            aria-label="Username" aria-describedby="basic-addon1">
    </div>

    {{-- <-- navbar start --> --}}
        <div class="nav-bar-header">
            <nav class="navbar navbar-expand-lg container width_Global align-items-center">
                <div class="container-fluid">
                    <button class="navbar-toggler text-white align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>MENU
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center pb-2">
                            <li class="nav-item p-2 px-xl-3 px-2">
                                <a class="nav-link active color text-decoration-none" aria-current="page"
                                    href="/">Home</a>
                            </li>
                            <li class="nav-item p-2 px-2">
                                <a class="color text-decoration-none">Wedding Cakes</a>
                            </li>
                            <li class="nav-item p-2 px-2">
                                <a class="color text-decoration-none" href="{{route('contactus')}}">Birthday & Party
                                    Cakes</a>
                            </li>
                            <ul class="nav navbar-nav p-2 px-2">
                                <li class="dropdown">
                                    <a class="text-decoration-none color" href="#" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">Voucher Redemption<span class="caret"></span></a>
                                    <ul class="dropdown-menu down">
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Classic
                                                Wedding Cake Voucher</a>
                                        </li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Choice
                                                Of 16 Wedding Cake
                                                Voucher</a></li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Platinum
                                                Wedding Cake Voucher</a>
                                        </li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Style
                                                Yourself Wedding Cake with
                                                a
                                                voucher</a></li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Order
                                                Petite Celebration Or
                                                Wedding Cake
                                                With A Voucher</a></li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Order
                                                Cupcakes For Collection
                                                With A
                                                Voucher</a></li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Order
                                                Gourmet Layer Cake With A
                                                Voucher</a></li>
                                        <li class="px-3 py-3"><a class="text-decoration-none black-colour"
                                                href="#">Order A
                                                Drip Cake With A
                                                Voucher</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav p-2 px-2">
                                <li class="dropdown">
                                    <a class="text-decoration-none color" href="#" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">About Us<span class="caret"></span></a>
                                    <ul class="dropdown-menu down">
                                        <li class="px-3 py-1"><a class="text-decoration-none black-colour"
                                                href="#">World of
                                                3D Cakes</a></li>
                                        <li class="px-3 py-1"><a class="text-decoration-none black-colour"
                                                href="#">Achievements & Awards</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="navbar-dropdown p-2 px-2"> <a class="color text-decoration-none" href="#">Contact
                                    Us</a> </li>


                        </ul>
                        <ul>
                            <li class="search-input ps-4" id="search-input">
                                <input class="w-100" type="text" placeholder="Search entire store here...">
                            </li>
                        </ul>
                        <ul class="d-flex">
                            <li class="search_button">
                            <li id="search-button">
                            <li class="search-toggle p-2 px-3" id="search-icon"></li>
                            </li>
                            <li class="cart_mini_right p-2 ps-3"> (0)
                            <li class="right_arrow p-2 px-3"></li>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Header -->


        {{ $slot }}

        <!-- ======= Footer ======= -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row  py-5">
                        <div class="col-xl-3">
                            <h5 class="mb-3 fw-normal text-black">3D Cakes Edinburgh</h5>
                            <p class="mb-0 footer-color"><span class="fw-bold">Address :<br></span>20 Roseburn
                                Terrace,<br>Edinburgh,<br>EH12 6AW</p>
                            <p class="mb-0 footer-color"><span class="fw-bold">Tel :</span>0131 337 9990</p>
                            <p class="mb-0 footer-color"><span class="fw-bold">Email :</span>enquiries@3d-cakes.co.uk
                            </p>
                        </div>
                        <div class="col-xl-3">
                            <h5 class="mb-xl-3  mt-3 mt-xl-0 fw-normal text-black">3D Cakes Milngavie</h5>
                            <p class="mb-0 footer-color"><span class="fw-bold">Address :<br></span>38 Station
                                Road,<br>Milngavie<br>G62 8AB</p>
                            <p class="mb-0 footer-color"><span class="fw-bold">Tel :</span>0141 378 0027</p>
                            <p class="mb-0 footer-color"><span class="fw-bold">Email :</span>glasgow@3d-cakes.co.uk</p>
                        </div>
                        <div class="col-xl-2 lh-lg footer-hover">
                            <h5 class="mb-xl-3 mb-1 fw-normal text-black mt-xl-0 mt-2">About Us</h5>
                            <div class="d-none d-xl-inline d-lg-none d-md-none d-sm-none">
                                <a class="text-decoration-none black-colour" href="#">World of 3D Cakes</a><br>
                                <a class="text-decoration-none black-colour" href="#">Achievements & Awards</a><br>
                                <a class="text-decoration-none black-colour" href="#">Work With Us</a><br>
                            </div>
                            <div class="pt-xl-2">
                                <a class="" href=""><img src="{{url('front')}}/image/facebook.png"
                                        style="width: 30px;"></a>
                                <a class="ms-2 ms-md-1" href=""><img src="{{url('front')}}/image/twitter.png"
                                        style="width: 30px;"></a>
                                <a class="ms-2 ms-md-1" href=""><img src="{{url('front')}}/image/google-plus.png"
                                        style="width: 30px;"></a>
                            </div>
                        </div>
                        <div class="col-xl-2 lh-lg footer-hover">
                            <h5 class="mb-xl-3 mb-0 fw-normal text-black mt-xl-0 mt-3">Customer Care</h5>
                            <div class="d-none d-xl-inline d-lg-none d-md-none">
                                <a class="text-decoration-none black-colour text-uppercase " href="#">Contact Us</a><br>
                                <a class="text-decoration-none black-colour text-uppercase " href="#">Delivery
                                    Information</a><br>
                                <a class="text-decoration-none black-colour text-uppercase " href="#">Allergy
                                    Advice</a><br>
                                <a class="text-decoration-none black-colour text-uppercase" href="#">Terms &
                                    Conditions</a><br>
                                <a class="text-decoration-none black-colour text-uppercase " href="#">Privacy
                                    Policy</a><br>
                                <a class="text-decoration-none black-colour text-uppercase " href="#">Leave Us
                                    Feedback</a><br>
                            </div>
                        </div>
                        <div class="col-xl-2 lh-lg footer-hover">
                            <div class="d-none d-xl-inline d-lg-none d-md-nonee">
                                <h6 class="mb-3 fw-normal text-black">More from 3D Cakes</h6>
                                <a class="text-decoration-none black-colour text-uppercase" href="#">Class
                                    Bookings</a><br>
                                <a class="text-decoration-none black-colour text-uppercase" href="#">Online
                                    Tutorials</a><br>
                                <a class="text-decoration-none black-colour text-uppercase" href="#">3D 24 Hour
                                    Deals</a><br>
                            </div>
                            <div class="accordion accordion-flush d-xl-none" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fs-5 mt-2 py-1 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            More from 3D Cakes
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><a class="text-decoration-none black-colour"
                                                href="#">Class
                                                Bookings</a><br>
                                            <a class="text-decoration-none black-colour" href="#">Online
                                                Tutorials</a><br>
                                            <a class="text-decoration-none black-colour" href="#">3D 24 Hour
                                                Deals</a><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="text-center">
                        <div class="">
                            <h2 class="text-black">Subscribe FREE to 3D Cakes Special Offers</h2>
                            <p class="mt-3 footer-color">Receive discount codes, view our latest designs and find out
                                about
                                special offers</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 ps-xl-5">
                            <input class="form-control " type="Email" placeholder="Email Address">
                        </div>
                        <div class="col-xl-4"> <button
                                class="btn btn-dark text-white px-5 mt-3 mt-sm-3 mt-md-3 mt-xl-0 w-100">Subscribe</button>
                        </div>
                    </div>

                </div>
                <div class="container pt-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-4 p-0">
                            <hr class="float-end" width="90%">
                        </div>
                        <div class="col-auto"><span class="mt-5 span">© 3D Cakes. All Rights Reserved.</span></div>
                        <div class="col-4 p-0">
                            <hr class="mb-3" width="90%">
                        </div>
                    </div>
                </div>
                <div class="text-center pb-3"><img class="mt-3 mb-1 img-fluid"
                        src="{{url('front')}}/image/payment-icons.png" alt=""></div>
            </div>
        </footer>
        <!-- End Footer -->


        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{url('front')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{url('front')}}/assets/vendor/aos/aos.js"></script>
        <script src="{{url('front')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('front')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{url('front')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{url('front')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{url('front')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="{{url('front')}}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{url('front')}}/assets/js/main.js"></script>

        <script defer src="{{url('front')}}/js/script.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        @livewireScripts

</body>

</html>