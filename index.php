<?php
require('header/navbar.php');
?>

<!-- body start -->
<main id="main-body">
    <div class="container-fluid px-lg-5 px-0 py-lg-4">
        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="col-md-3">
                <nav class="navbar navbar-expand-lg bg-transparent py-0 h-100">
                    <div class="container-fluid px-0 flex-column bg-white h-100">
                        <button class="navbar-toggler border-0 shadow-none py-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#categories" aria-controls="categories"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="text-uppercase fw-bold" id="cat-egories"
                                style="color: #f6720e;">CATEGORIES</span><i class="fa-solid fa-chart-simple ms-3"
                                style="color: #f6720e;"></i>
                        </button>
                        <div class="w-100" id="categories">
                            <ul class="navbar-nav mb-lg-0 flex-column w-100 h-100 border-0" id="jqueryui-menu">
                                <li class="nav-item px-2 py-1" style="background-color: #f6720e;">
                                    <a class="nav-link text-uppercase text-light fw-bold fs-5 shadow-none border-0"
                                        href="javascript:void(0)">Categories</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">New Arrivals</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">Best Sellers</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                        href="#">Clothing</a>
                                    <ul class="px-2">
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Mens
                                                Clothes</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Womens
                                                Clothes</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Kids
                                                Clothes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                        href="#">Footwear</a>
                                    <ul class="px-2">
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Mens
                                                Footwear</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Womens
                                                Footwear</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Kids
                                                Footwear</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                        href="#">Accessories</a>
                                    <ul class="px-2">
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Mens
                                                Accessories</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Womens
                                                Accessories</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Kids
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">Activewear & Athleisure</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                        href="#">Seasonal
                                        Collections</a>
                                    <ul class="px-2">
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Mens
                                                Collections</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Womens
                                                Collections</a></li>
                                        <li><a class="nav-link shadow-none border-0 d-flex justify-content-between"
                                                href="#">Kids
                                                Collections</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">Sustainable & Eco-Friendly</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">Plus Size & Extended Sizes</a>
                                </li>
                                <li class="nav-item px-2 py-1">
                                    <a class="nav-link shadow-none border-0" href="#">Sale & Clearance</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-6 px-lg-4">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/couple-winter-cloths-studio_1303-5887.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-1">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/close-up-flannel-shirt-detail_23-2149575383.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-2">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/portrait-happy-gay-couple-spending-time-together-hugging-street_58466-11434.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-3">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/premium-photo/baby-clothes-accessories-wooden-background_392895-107802.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/male-holiday-objects_23-2147635502.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-5">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/retro-camera-watch-bowtie-glasses_144627-12256.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-6">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/premium-photo/interior-decor-mockup-with-chinese-ginger-jars-corals_154979-205.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-7">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/free-photo/still-life-teenager-s-desk_23-2149371274.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-8">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://img.freepik.com/premium-photo/3d-render-happy-durga-puja-diwali-minimalist-modern-mockup-smartphones-presentation-display-products-advertising-design_460848-5164.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                alt="img-9">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0">
                    <div class="card-body p-0">
                        <div class="swiper Advertisement">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent">
                                        <img
                                            src="https://img.freepik.com/premium-photo/indian-couple-with-shopping-bags-gift-boxes-standing-isolated-white-background_466689-40850.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid" />
                                        <div class="card-body">
                                            <h5 class="card-title">Flat 50% of on latest products</h5>
                                            <p class="card-text my-1">Hurry up!</p>
                                            <p class="card-text">Grab right now</p>
                                            <a href="#" class="btn shadow-none border-0 text-light"
                                                style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                                    class="fa-solid fa-basket-shopping ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent">
                                        <img
                                            src="https://img.freepik.com/free-photo/girl-sunglasses-posing-with-shopping-bags_23-2147825644.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid" />
                                        <div class="card-body">
                                            <h5 class="card-title">Exiting offers</h5>
                                            <p class="card-text my-1">Hurry up!</p>
                                            <p class="card-text">Grab right now</p>
                                            <a href="#" class="btn shadow-none border-0 text-light"
                                                style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                                    class="fa-solid fa-basket-shopping ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent">
                                        <img
                                            src="https://img.freepik.com/free-photo/little-fashionista-colored-background-mom-s-shoes_169016-3672.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid" />
                                        <div class="card-body">
                                            <h5 class="card-title">Latest discounts on every products</h5>
                                            <p class="card-text my-1">Hurry up!</p>
                                            <p class="card-text">Grab right now</p>
                                            <a href="#" class="btn shadow-none border-0 text-light"
                                                style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                                    class="fa-solid fa-basket-shopping ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent">
                                        <img
                                            src="https://img.freepik.com/premium-photo/perfume-spray-glass-bottle-beautiful-light-elegant-backgroundselective-focus-3d-illustration_67092-1584.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid" />
                                        <div class="card-body">
                                            <h5 class="card-title">20% discount on every product</h5>
                                            <p class="card-text my-1">Hurry up!</p>
                                            <p class="card-text">Grab right now</p>
                                            <a href="#" class="btn shadow-none border-0 text-light"
                                                style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                                    class="fa-solid fa-basket-shopping ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- body end -->

<!-- content section start -->
<section id="content">
    <div class="container-fluid px-lg-5 pb-lg-4 px-0 mt-3 mt-lg-0">
        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="col-md-3 mb-3 mb-lg-0">
                <div class="card border-0" style="border-radius: 0px;">
                    <h5 class="text-light text-uppercase py-2 ps-3 fw-bold mb-0" style="background-color: #f6720e;">
                        New
                        Arrivals</h5>
                    <img src="https://img.freepik.com/premium-photo/group-best-friend-shopping-big-mall_530697-99722.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="latest-img" alt="latest-img">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <a href="" class="px-2 py-1 text-light fs-5 me-2 shadow"
                                style="background-color: #f6720e;"><i class="bi bi-cart-plus text-light"></i></a>
                            <a href="" class="px-2 py-1 text-light fs-5 me-2 shadow"><i
                                    class="fa-solid fa-eye text-dark"></i></a>
                            <a href="" class="px-2 py-1 text-light fs-5 shadow"><i
                                    class="fa-solid fa-plus text-dark"></i></a>
                        </div>
                        <h5 class="card-title text-capitalize fw-bold">70% discount on latest arrivals</h5>
                        <p class="card-text text-capitalize font-500 mb-0">grab right now!</p>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <i class="bi bi-star-fill me-1" style="color: #f6720e;"></i>
                            <i class="bi bi-star-fill me-1" style="color: #f6720e;"></i>
                            <i class="bi bi-star-fill me-1" style="color: #f6720e;"></i>
                            <i class="bi bi-star-fill me-1" style="color: #f6720e;"></i>
                            <i class="bi bi-star-half" style="color: #f6720e;"></i>
                        </div>
                        <p class="mb-0 mt-2 font-500">₹550/- only</p>
                        <p class="mb-0 mt-2 font-500 text-capitalize">offers end in</p>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <p class="fs-5 font-500 shadow px-2">23</p>
                            <p class="fs-5 font-500 shadow px-2">:</p>
                            <p class="fs-5 font-500 shadow px-2">50</p>
                            <p class="fs-5 font-500 shadow px-2">:</p>
                            <p class="fs-5 font-500 shadow px-2">29</p>
                            <p class="fs-5 font-500 shadow px-2">:</p>
                            <p class="fs-5 font-500 shadow px-2">15</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-0">
                            <p class="font-500 px-2">Hrs</p>
                            <p class="font-500">:</p>
                            <p class="font-500 px-2">min</p>
                            <p class="font-500">:</p>
                            <p class="font-500 px-2">sec</p>
                            <p class="font-500">:</p>
                            <p class="font-500 px-2">msec</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ps-lg-4">
                <div class="row responsive-slickSlider" style="--bs-gutter-x: 0rem;">
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/young-man-model-posing-street_1303-14448.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">men's</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-vector/hand-drawn-fashion-shop-pattern-background_23-2150849923.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">Gents Wear</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/purchase-sale-discount-fashion-style_53876-15282.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">trending fashion</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/man-with-hat-head-shopping-bags_23-2148316510.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">top brands</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/neighborhood-lifestyle-friends_23-2149746724.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">casuals</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/full-shot-kids-posing-together_23-2149853383.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">kids wear</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-lg-4 mt-3 categories-items-list" style="border-left: 4px solid #f6720e;">
                    <div class="card border-0">
                        <div class="card-body w-100 py-2">
                            <div class="row" style="--bs-gutter-x: 0rem;">
                                <div class="col-md-6 text-start">
                                    <div class="d-flex justify-content-start aligh-items-center">
                                        <button href=""
                                            class="text-uppercase no-decoration me-2 font-500 btn border-0">featured</button>
                                        <button href=""
                                            class="text-uppercase no-decoration me-2 font-500 btn border-0">latest</button>
                                        <button href=""
                                            class="text-uppercase no-decoration font-500 btn border-0">trending</button>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row responsive-slickSlider-withcategories" style="--bs-gutter-x: 0rem;">
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/young-man-model-posing-street_1303-14448.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize mb-2">men's</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-vector/hand-drawn-fashion-shop-pattern-background_23-2150849923.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize">Gents Wear</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/purchase-sale-discount-fashion-style_53876-15282.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize">trending fashion</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/man-with-hat-head-shopping-bags_23-2148316510.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize">top brands</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/neighborhood-lifestyle-friends_23-2149746724.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize">casuals</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-tranparent pt-4">
                            <img src="https://img.freepik.com/free-photo/full-shot-kids-posing-together_23-2149853383.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="category-images">
                            <div class="card-body w-100">
                                <h5 class="card-title text-capitalize">kids wear</h5>
                                <p class="mb-2 mt-2 font-500 text-capitalize">Starts from ₹550/-</p>
                                <div
                                    class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                    <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                    <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                        style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                        class="fa-solid fa-basket-shopping ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content section end -->

<!-- amazing products section start -->
<section id="amezing-products">
    <div class="container-fluid px-lg-5 px-0 pb-3">
        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="col-md-3">
                <div class="card h-100 border-0">
                    <div class="card-body p-0">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <a class="nav-link text-uppercase text-light fw-bold fs-5 shadow-none border-0 py-2 ps-3"
                                    href="javascript:void(0)" style="background-color: #f6720e;">Our services</a>
                                <div class="d-flex justify-content-start align-items-center ps-3 pt-2">
                                    <div>
                                        <img src="https://img.freepik.com/premium-vector/food-delivery-design-vector-illustration-eps10-graphic_24908-10887.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                            alt="free-delivery" class="free-delivery">
                                    </div>
                                    <div class="ps-3">
                                        <a class="nav-link text-capitalize text-dark fw-bold shadow-none border-0 mb-0"
                                            href="">free delivery</a>
                                        <a class="mb-0 nav-link text-capitalize" href="">free delivery after
                                            ₹500/-</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-start align-items-center ps-3 pt-2">
                                    <div>
                                        <img src="https://img.freepik.com/free-vector/hours-service-everyday-concept-label_1017-30336.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                            alt="free-delivery" class="free-delivery">
                                    </div>
                                    <div class="ps-3">
                                        <a class="nav-link text-capitalize text-dark fw-bold shadow-none border-0 mb-0"
                                            href="">24/7 support</a>
                                        <a class="mb-0 nav-link text-capitalize" href="">24/7 live support</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-start align-items-center ps-3 pt-2">
                                    <div>
                                        <img src="https://img.freepik.com/free-vector/elegant-gift-voucher-pack_23-2147530676.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                            alt="free-delivery" class="free-delivery">
                                    </div>
                                    <div class="ps-3">
                                        <a class="nav-link text-capitalize text-dark fw-bold shadow-none border-0 mb-0"
                                            href="">special gift card</a>
                                        <a class="mb-0 nav-link text-capitalize" href="">Exiting gift voucher and
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ps-lg-4">
                <div class="row" style="--bs-gutter-x: 0rem;">
                    <div class="col-md-6 pe-lg-3 fade-amezing-products">
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/front-view-young-pretty-female-holding-sale-writing-black-wall-color-shopping-beauty-fashion-photo-emotion_140725-108765.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/t-shirt-cyber-monday-sale-with-label-cards_23-2148670048.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/arrangement-black-friday-elements-with-copy-space_23-2148665532.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/pretty-women-with-sale-writing_23-2147786866.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fade-amezing-products">
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/young-fashion-woman-with-shopping-bags-through-torn-paper-hole-wall_140725-105063.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/sale-concept-with-shopping-carts_23-2148313071.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/colourful-shopping-packets_23-2147948109.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="https://img.freepik.com/free-photo/sale-concept-coffee-with-copy-space_23-2148313020.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                    alt="amazing-products">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- amazing products section end -->

<!-- special-products start -->
<section id="special-products">
    <div class="container-fluid px-lg-5 px-0">
        <div class="row pb-3" style="--bs-gutter-x: 0rem;">
            <div class="col-md-3">
                <a class="nav-link text-uppercase text-light fw-bold fs-5 shadow-none border-0 py-2 ps-3"
                    href="javascript:void(0)" style="background-color: #f6720e;">testimonials</a>
                <div class="row single-item-slick" style="--bs-gutter-x: 0rem;">
                    <div class="col">
                        <div class="card border-0 pb-1" style="height: 598px;">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-quote-left fs-1 opacity-25"></i>
                                <h5 class="card-title text text-capitalize font-500 my-3" style="color: #f6720e;"><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star-half-stroke"></i></h5>
                                <p class="card-text">Flipmart offers a seamless and intuitive shopping experience,
                                    making it
                                    easy to browse, select, and purchase products from a wide range of categories.
                                    The
                                    user
                                    interface is clean and well-organized, with clear navigation and filters that
                                    help
                                    narrow down choices quickly. Checkout is smooth, and payment options are varied,
                                    including credit/debit cards, digital wallets, and sometimes even installment
                                    plans.
                                    Delivery tracking is integrated, allowing customers to stay updated on their
                                    orders
                                    in
                                    real time. Customer support is responsive, and the return process is
                                    straightforward.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-855.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                            alt="user-image">
                                    </div>
                                    <div>
                                        <h5 class="text-capitalize font-500 mb-0">lyan yara</h5>
                                        <p class="text-capitalize font-500 mb-0">california</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 pb-1" style="height: 598px;">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-quote-left fs-1 opacity-25"></i>
                                <h5 class="card-title text text-capitalize font-500 my-3" style="color: #f6720e;"><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star-half-stroke"></i></h5>
                                <p class="card-text">Overall, Flipmart is a reliable and user-friendly e-commerce
                                    app perfect for both casual shoppers and avid online buyers. It’s a solid choice
                                    for those looking for convenience, variety, and efficiency in their online
                                    shopping experience.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-855.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                            alt="user-image">
                                    </div>
                                    <div>
                                        <h5 class="text-capitalize font-500 mb-0">lyan yara</h5>
                                        <p class="text-capitalize font-500 mb-0">california</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ps-lg-4">
                <div class="card border-0">
                    <div class="card-body" style="border-left: 4px solid #f6720e;">
                        <p class="card-text text-uppercase font-500 mb-0">Special products</p>
                    </div>
                </div>
                <div class="row special-products-items" style="--bs-gutter-x: 0rem;">
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/premium-photo/happy-smiling-handsome-couple-man-woman-with-discount-30-off-sign-colorful-shopping-bags_97712-1355.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's & women's</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/portrait-screaming-girl-holding-shopping-bags_329181-7347.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/pair-man-woman-wearing-glasses-carried-lots-paper-bags-shopping_1150-27741.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">latest trends</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/young-couple-near-colorful-shopping-bags_23-2148303860.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">exciting offers</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/front-view-little-cute-boy-red-t-shirt-jeans-posing_179666-1405.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">kid's</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/amazing-cute-little-girl-with-long-brunette-hair-walking-with-white-packages-isolated-pink-background-little-happiness-expressing-true-positive-emotions-camera-place-text_197531-25295.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">girl's</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/happy-girl-with-gloves-many-nets_23-2148333187.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">kids's winter wear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/premium-photo/smiling-american-kid-with-shoes-kids-shoes-store_265223-11546.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">kids's footwear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/laughing-friends-shoe-shop_23-2147669896.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">girl's footwear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/front-view-friends-sitting-talking_23-2148225620.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">trending</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/stylish-casual-african-american-man-jeans-jacket-black-beret-clothes-store-trying-new-footwear_627829-13415.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's footwear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/full-length-shot-bearded-man-suit-glasses-standing-wardrobe-looking-away_171337-19302.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's formal</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/free-photo/client-suit-boutique-with-shopping-bags_7502-4397.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's wear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/premium-photo/young-handsome-man-choosing-shoes-shop_926199-4015115.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's casual</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/premium-photo/man-standing-shoe-store-looking-shoes-shelves-with-his-back-camera-he-is-wearing-suit_197463-12650.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's footwear</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card px-2 justify-content-center border-0 d-flex align-items-center py-3">
                            <img src="https://img.freepik.com/premium-photo/man-choosing-shoes-store_1048944-3057863.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top shadow" alt="category-images">
                            <h5 class="card-title text-capitalize mt-3 mb-1">men's chappal</h5>
                            <div class="d-flex justify-content-center align-items-center mb-1"
                                style="color: #f6720e;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-0 font-500 text-capitalize">Starts from ₹550/-</p>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="d-flex justify-content-center bg-transparent align-items-center my-3 featuring-functions">
                                        <button href="" class="px-2 py-1 me-2 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-eye"></i></button>
                                        <button href="" class="px-2 py-1 btn border-0 shadow-none"
                                            style="border-radius: 0px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <a href="#" class="btn shadow-none border-0 text-light px-4 fs-5"
                                        style="background-color: #f6720e; border-radius: 0px;">Order Now <i
                                            class="fa-solid fa-basket-shopping ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- special-products end -->

<!-- reviews start -->
<section id="reviews">
    <div class="container-fluid px-lg-5 px-0">
        <div class="row pb-3" style="--bs-gutter-x: 0rem;">
            <div class="col-md-3 pb-3 pb-lg-0">
                <div class="card border-0">
                    <div class="card-body p-0 text-center">
                        <a class="nav-link text-uppercase text-start text-light fw-bold fs-5 shadow-none border-0 py-2 ps-3"
                            href="javascript:void(0)" style="background-color: #f6720e;">newsletter</a>
                        <i class="fa-solid fa-paper-plane fs-3 p-3 rounded-circle mt-4"
                            style="border: 2px solid #f6720e;"></i>
                        <h3 class="my-3 font-500">Don't Miss Out!</h3>
                        <p class="card-text px-4 font-500">Sign up for our newsletter and receive exciting updates,
                            curated content, and exclusive promotions!</p>
                        <form action="#" class="px-5">
                            <input type="text" class="form-control shadow-none mb-4"
                                style="border-radius: 0; border-color: #f6720e;">
                            <button type="submit" class="btn border-0 shadow-none mb-4 text-light fs-5"
                                style="background-color: #f6720e; border-radius: 0px;">Subscribe Now!</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ps-lg-4">
                <div class="card border-0">
                    <div class="card-body" style="border-left: 4px solid #f6720e;">
                        <p class="card-text text-uppercase font-500 mb-0">Blogs</p>
                    </div>
                </div>
                <div class="row responsive-review-slider mb-0" style="--bs-gutter-x: 0rem;">
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/manhattan-downtown-architecture-night-with-reflections_649448-2693.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">new york</h5>
                                <p class="card-text text-truncate">New York Fashion Week (NYFW), held in February
                                    and September of each year, is a semi-annual series of events in Manhattan
                                    typically spanning seven to nine</p>
                                <a href="https://en.wikipedia.org/wiki/New_York_Fashion_Week" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/closeup-shot-croatian-national-theatre-zagreb-night_181624-13656.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">kolkata</h5>
                                <p class="card-text text-truncate">Kolkata, also known as Calcutta is the capital
                                    and largest city of the Indian state of West Bengal. It lies on the eastern bank
                                    of the Hooghly River</p>
                                <a href="https://en.wikipedia.org/wiki/Kolkata" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/long-pier-sea_181624-26835.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">noida</h5>
                                <p class="card-text text-truncate">Noida, short for New Okhla Industrial Development
                                    Authority is a city located in Gautam Buddha Nagar district of the Indian state
                                    of Uttar Pradesh</p>
                                <a href="https://en.wikipedia.org/wiki/Noida" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/beautiful-shot-isa-khan-s-tomb-delhi-india-cloudy-sky_181624-20750.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">delhi</h5>
                                <p class="card-text text-truncate">India is a country with an ancient clothing
                                    design tradition, yet an emerging fashion industry. Though a handful of
                                    designers existed prior to the 1980s</p>
                                <a href="https://en.wikipedia.org/wiki/Fashion_in_India" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/high-angle-shot-bandra-worli-sealink-mumbai-enveloped-with-fog_181624-17180.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">mumbai</h5>
                                <p class="card-text text-truncate">Fashion Street refers to a cluster of over 385
                                    street side clothing shops on MG Road near Azad Maidan and is opposite to Bombay
                                    Gymkhana, in South Mumbai</p>
                                <a href="https://en.wikipedia.org/wiki/Fashion_Street" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/view-from-top-st-elias-chavara-pilgrimage-center-india_1353-278.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">bangalore</h5>
                                <p class="card-text text-truncate">Bangalore Fashion Week (BFW) is a bi-annual
                                    fashion event held in Bangalore, India. Established in 2009, The name Bangalore
                                    Fashion Week follows the</p>
                                <a href="https://en.wikipedia.org/wiki/Bangalore_Fashion_Week" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-light">
                        <div class="card border shadow">
                            <img src="https://img.freepik.com/free-photo/empty-square-lake-city-park_1127-4113.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                                class="card-img-top" alt="city-images">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">chennai</h5>
                                <p class="card-text text-truncate">The culture of Chennai, popularly called the
                                    "Gateway to the South India", is distinct from that of any other Indian city.
                                    Being a cosmopolitan hub</p>
                                <a href="https://en.wikipedia.org/wiki/Culture_of_Chennai" target="_blank"
                                    class="btn shadow-none border-0 text-light fs-5"
                                    style="background-color: #f6720e; border-radius: 0px;">View More<i
                                        class="fa-solid fa-paper-plane ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reviews end -->

<!-- latest brands start -->
<section id="latest-brands">
    <div class="container-fluid px-lg-5 px-0 pb-3">
        <div class="card border-0">
            <div class="card-body" style="border-left: 4px solid #f6720e;">
                <p class="card-text text-uppercase font-500 mb-0">Latest Brands</p>
            </div>
        </div>
        <div class="row latest-brands-slider bg-light" style="--bs-gutter-x: 0rem;">
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-photo/3d-render-amazon-logo-extruded-amber-glass-floating-upright-15-degree-angle-neon-yellow-ou_1020495-783616.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-vector/g-letter-with-rainbow-colors_1012565-1249.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/gradient-gold-crown-logo-template_23-2150970162.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-vector/rb-monogram-design-abstract-isolated-restaurant-food-fitness-vector-template_615068-2813.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-vector/fs-logo-design_808938-12.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/red-logo-black-background_1195-52.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-vector/letter-s-dot-simple-monogram-logo_788709-512.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/illustration-photo-studio-stamp-banner_53876-3737.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/wellness-center-logo-template-gold-professional-design-vector_53876-136292.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/labyrinth-maze-logo-isolated-gray_126523-911.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/free-vector/branding-identity-corporate-vector-logo-ph-design_460848-9108.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 m-2" style="border-radius: 0px;">
                    <img src="https://img.freepik.com/premium-vector/logo-thai-restaurant-called-d_249011-1383.jpg?uid=P119104888&ga=GA1.1.1106605636.1719834042&semt=ais_hybrid"
                        class="card-img-top" alt="brands-logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest brands end -->


<?php
require('footer/footer.php');
?>