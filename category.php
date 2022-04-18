<?php
include_once('partials/header.php');

?>


<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/vegetable-category-banner.png" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content position-absolute">
                    <h3>All category</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">All Category</span>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="all-categories-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-6 col-sm-12">
                    <h3 class="ml-15">All Categories</h3>
                </div>
                <div class="col-lg-6 col-lg-6 col-sm-12">

                </div>
            </div>
        </div>

    </div>
</section>


<section class="display-all-products">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="category-sidebar-content mb-30">
                    <h5 class="sidebar-content-heading content-style mb-30">Categories</h5>
                    <ul>
                        <li>
                            <a href="#"> <i class="fas fa-meat"></i> Butchers</a><span class="count">30</span>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-salad"></i> Vegetables</a><span class="count">35</span>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-salad"></i> Fruits </a><span class="count">42</span>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-fish"></i> FishMonger</a><span class="count">7</span>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-bread-loaf"></i> Bakery</a><span class="count">87</span>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-box-full"></i> Delicatessan</a><span class="count">87</span>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-filter-product mb-30">
                    <h5 class="sidebar-filter-product-title">Filter By Price</h5>
                    <div class="sidebar-filter-product-slider mt-30">
                        <div id="sidebar-filter-product-slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="sidebar-filter-ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 21.1538%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                            <div class="sidebar-filter-ui-slider-range ui-corner-all ui-widget-header" style="left: 21.1538%; width: 78.8462%;"></div>
                        </div>
                        <div>
                            <form action="#" class="mt-20 d-flex justify-content-between">
                                <div>
                                    <span class="initial-price">$227</span>
                                    <span>to</span>
                                    <span class="final-price">$774</span>
                                </div>
                                <div>
                                    <button type="submit" class="">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="sidebar-filter-product mb-30">
                    <h5 class="sidebar-filter-product-title">Choose Rating</h5>
                    <div class="widget-description mt-20">
                        <form action="#">
                            <div class="widget-rating-filter">
                                <input type="checkbox" id="first-start-rating" name="star-item">
                                <label for="first-start-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(54)</span>
                                </label>
                            </div>
                            <div class="widget-rating-filter">
                                <input type="checkbox" id="second-star-rating" name="star-item">
                                <label for="second-star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <span>(37)</span>
                                </label>
                            </div>
                            <div class="widget-rating-filter">
                                <input type="checkbox" id="third-star-rating" name="star-item">
                                <label for="third-star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <span>(7)</span>
                                </label>
                            </div>
                            <div class="widget-rating-filter">
                                <input type="checkbox" id="fourth-star-rating" name="star-item">
                                <label for="fourth-star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <span>(5)</span>
                                </label>
                            </div>
                            <div class="widget-rating-filter">
                                <input type="checkbox" id="fifth-star-rating" name="star-item">
                                <label for="fifth-star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <span>(3)</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="sidebar-filter-product mb-30">
                    <h5 class="sidebar-filter-product-title">Choose Brand</h5>
                    <div class="widget-category-list mt-20">
                        <form action="#">
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-1" name="brand-item">
                                <label for="shop-item-1">CarRentals <span>(12)</span></label>
                            </div>
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-2" name="brand-item">
                                <label for="shop-item-2">CarVoodoo <span>(60)</span></label>
                            </div>
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-3" name="brand-item">
                                <label for="shop-item-3">Creative <span>(41)</span></label>
                            </div>
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-4" name="brand-item">
                                <label for="shop-item-4">Impact <span>(28)</span></label>
                            </div>
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-5" name="brand-item">
                                <label for="shop-item-5">IQVia <span>(21)</span></label>
                            </div>
                            <div class="single-widget-category">
                                <input type="checkbox" id="shop-item-7" name="brand-item">
                                <label for="shop-item-7">LeadsGreen <span>(62)</span></label>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="shop-promotion mb-30">
                    <a href="#">
                        <img src="assets/image/shop-01.jpg" alt="promotion">
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6 d-lg-none d-md-block">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6 d-lg-none d-md-block">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6 d-lg-block d-md-none">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>


                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6">
                            <div class="box position-relative">
                                <div class="product-image" style="overflow: hidden;">
                                    <img src="assets/image/bakery8.png" alt="" class="img-fluid">
                                </div>

                                <div class="icon">
                                    <div class="eye position-absolute">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>

                                    <div class="wishlist position-absolute">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <div class="product-cart position-absolute">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </div>
                                <div class="product-title">
                                    <h2>
                                        <a href="#">Wireless Bluetooth Over-Ear Headphone</a>
                                    </h2>
                                </div>
                                <div class="product-rating mt-2">
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div class="product-price mt-2">
                                    <h5>$219.00</h5>
                                </div>
                                <div class="product-progress">
                                    <div class="progress mt-3">
                                        <div class="progress-bar w-75 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="product-sale-quantity mt-3 mb-3">
                                    <span>Sold: </span>
                                    <span>677/2316</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="popimage xzoom-container">
                                <img src="assets/image/meat2.jpg" alt="" class="img-fluid xzoom" id="xzoom-default" xoriginal="assets/image/meat2.jpg">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="popcontent">
                                <h3>Wireless Bluetooth Over-Ear <br> Headphone
                                </h3>
                                <div class="review d-flex flex-wrap align-items-center">
                                    <div class="rating">
                                        <span class="far fa-star checked"></span>
                                        <span class="far fa-star checked"></span>
                                        <span class="far fa-star checked"></span>
                                        <span class="far fa-star checked"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                    <div class="review-number">
                                        <span>4 reviews</span>
                                    </div>
                                </div>
                                <div class="pop-price mt-1">
                                    <h4>$219.00</h4>
                                </div>
                                <hr class="mt-4">
                                <div class="pop-product-description">
                                    <ul>
                                        <li>Bass and Stero Sound</li>
                                        <li>Display with 3088 x 1440 pixels
                                            resolution.
                                        </li>
                                        <li>Memory, Storage & SIM: 12GB RAM,
                                            256GB.</li>
                                        <li>Androi v10.0 Operating system.</li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="quantity">
                                        <a href="#" class="arrow minus quantity-minus">

                                        </a>
                                        <input type="number" id="quantity_623ae84537a73" class="input-text qty text" step="1" min="1" max="1795" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                        <a href="#" class="arrow plus quantity-plus"></a>
                                    </div>
                                    <div class="pop-cart">
                                        <button class="btn btn-primary">Add to
                                            Cart</button>
                                    </div>

                                </div>

                                <hr class="mt-4">
                                <div class="pop-description">
                                    <div class="d-flex flex-wrap align-item-center pop-footer">
                                        <span>SKU:</span>
                                        <div class="bcd">DK1023</div>
                                    </div>
                                    <div class="d-flex flex-wrap align-item-center pop-footer">
                                        <span>Categories:</span>
                                        <div class="abc">Headphone,Iphone,
                                            SmartPhone
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-item-center pop-footer">
                                        <span>Tags:</span>
                                        <div class="bcd">Digital Headphone</div>
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
<div class="container">
    <div class="pagination-content mb-20">
        <nav aria-label="">
            <ul class="pagination">
                <li class="page-content">
                    <a class="page-link" href="#"><i class="ti-arrow-left"></i></a>
                </li>
                <li class="page-content"><a class="page-link" href="#">1</a></li>
                <li class="page-content active"><a class="page-link" href="#">2</a></li>
                <li class="page-content"><a class="page-link" href="#">3</a></li>
                <li class="page-content"><a class="page-link dot" href="#">...</a></li>
                <li class="page-content"><a class="page-link" href="#">6</a></li>
                <li class="page-content">
                    <a class="page-link" href="#"><i class="ti-arrow-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>




<section class="news-wrap mt-4 " style="background: url(assets/image/news-slider1.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-word">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                </div>
            </div>

        </div>
    </div>
</section>


<?php

include_once('partials/footer.php');
include_once('partials/scripts.php');
?>
</body>


</html>