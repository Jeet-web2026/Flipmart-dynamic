<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipmart</title>
    <link rel="shortcut icon" href="images/brand.svg" type="image/x-icon">

    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font cdn (main) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- google font (second) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- jquery ui css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/themes/base/jquery-ui.min.css"
        integrity="sha512-TFee0335YRJoyiqz8hA8KV3P0tXa5CpRBSoM0Wnkn7JoJx1kaq1yXL/rb8YFpWXkMOjRcv5txv+C6UluttluCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css link -->
    <link rel="stylesheet" href="styling/landing-page.css">

    <!-- swiper js css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- slick css cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- slick css main cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- top nav start -->
    <section id="top-nav">
        <div class="container-fluid px-lg-5 px-2">
            <div class="card border-0 bg-transparent">
                <div class="card-body pb-1 px-0">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-lg-start text-center">
                            <p class="text-light mb-0 font-500">The best online E-commerce store in West Bengal</p>
                        </div>
                        <div
                            class="col-md-6 d-flex justify-content-lg-end justify-content-center mt-3 mt-lg-0 align-items-center">
                            <p class="mb-0 font-500"><a href="top-nav-pages/location-update.php"
                                    class="text-capitalize no-decoration text-light btn shadow-none border-0"><i
                                        class="bi bi-geo-alt me-2"></i>update location</a></p>
                            <div class="dropdown">
                                <button class="btn text-capitalize text-light shadow-none border-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    language<i class="bi bi-translate ms-2"></i>
                                </button>
                                <ul class="dropdown-menu border-0"
                                    style="border-radius: 0px; background-color: bisque !important;">
                                    <li><a class="dropdown-item text-dark" href="top-nav-pages/english-switch.php">English</a></li>
                                    <li><a class="dropdown-item text-dark" href="top-nav-pages/hindi-switch.php">Hindi</a></li>
                                    <li><a class="dropdown-item text-dark" href="top-nav-pages/bengali-switch.php">Bengali</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top nav end -->

    <!-- mid nav start -->
    <section id="mid-nav">
        <div class="container-fluid px-lg-5 px-2">
            <div class="d-lg-flex justify-content-between align-items-center">
                <a href="" class="text-light fs-1 no-decoration montserrat-font font-500">Flip<span
                        style="color: #ffd400;">Mart</span><i class="fa-brands fa-opencart ms-2 text-warning"></i></a>
                <form class="input-group w-50 mb-lg-0 mb-2" action="search/search-result.php" method="POST">
                    <input type="text" class="form-control shadow-none border-0" style="border-radius: 0px;"
                        placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <button type="submit" class="input-group-text bg-dark shadow-none border-0"
                        style="border-radius: 0px;" id="basic-addon2"><i class="bi bi-search text-light"></i></button>
                </form>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="dropdown">
                        <button class="btn text-capitalize text-light shadow-none border-0" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-3"></i>Login<i class="bi bi-chevron-down ms-2"></i>
                        </button>
                        <ul class="dropdown-menu border-0"
                            style="border-radius: 0px; background-color: bisque !important;">
                            <li><a class="dropdown-item text-dark" href="mid-nav-pages/login/admin-login.php">Admin Login</a></li>
                            <li><a class="dropdown-item text-dark" href="mid-nav-pages/login/user-login.php">User Login</a></li>
                        </ul>
                    </div>
                    <p class="mb-0 font-500"><a href="mid-nav-pages/user-cart-wishlist/user-cart.php"" type=" button"
                            class="text-capitalize no-decoration text-light btn shadow-none position-relative border-0"><i
                                class="bi bi-cart-plus me-2"></i>my cart<span
                                class="position-absolute d-none d-lg-inline top-0 start-100 translate-middle badge rounded-circle px-2 pt-2 pb-1"
                                style="background-color: #51463E;"><span>1</span></span></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- mid nav end -->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg pb-0">
        <div class="container-fluid mx-lg-5 bg-dark">
            <button class="navbar-toggler mx-lg-0 mx-auto text-light border-0 shadow-none" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-plus py-2 fs-1" style="color: #fff;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link text-light text-uppercase" href="/Flipmart/">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/fashion-all.php">Fashion</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/mens-all.php">Men</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/women-all.php">Women</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/kids-all.php">Kids</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/accessories-all.php">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light text-uppercase" href="navigation-pages/blogs.php">Blogs</a>
                    </li>
                </ul>
                <ul class="mb-lg-0 ps-0">
                    <li class="nav-item">
                        <a class="nav-link text-light text-uppercase" href="tel:+919163715179"><i
                                class="bi bi-telephone me-2 fs-5"></i>call us +91
                            9163715179</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->