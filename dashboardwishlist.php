<?php
include_once('partials/header.php');

?>

<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/login-banner.jpg" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content white position-absolute">
                    <h3 class="white">Profile</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php" class="white">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">Your Orders</span>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="myprofile-dashboard">
    <div class="container mb-3">
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-md-6 ">
            <div class="customer-profile mb-3">
                    <div class="d-flex align-items-center">
                        <div class="customer-profile-image me-3">
                            <img src="assets/image/customer-profile1.png" alt="" style="width: 65px;" class="img-fluid">
                        </div>
                        <div class="customer-profile-name">
                            <!-- <span style="color: blue; display:none"> <i class="fal fa-badge-check"></i> Verified</span> -->
                            <h6>Manish Maharjan</h6>
                            <div>
                                <div class="email-address">
                                    <span>manish@cosys.com.np</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="customer-dashboard background-white p-3 shadow border rounded-3 position-sticky">
                    <ul>
                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="myprofile.php">My Profile</a>
                                </li>
                            </div>
                            <div>
                                <i class="fal fa-user"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="yourorder.php">Your Orders</a>
                                </li>
                            </div>
                            <div>
                                <i class="fal fa-chevron-right"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="dashboardreview.php">My Reviews</a>
                                </li>
                            </div>
                            <div>
                               <i class="fal fa-star"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="dashboardwishlist.php">My Wishlist</a>
                                </li>
                            </div>
                            <div>
                                <i class="fal fa-heart"></i>
                            </div>
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="change-password.php">Change Password</a>
                                </li>
                            </div>
                            <div>
                                <i class="fal fa-chevron-right"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <li>
                                    <a href="myprofile.php">Sign Out</a>
                                </li>
                            </div>
                            <div>
                                <i class="fal fa-sign-out"></i>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4>Shopping Cart</h4>
                    </div>
                    <div>
                        <span class="me-2">
                            Filter
                        </span>
                        <span class="dropdown me-2">
                            <a class="btn filter-rows dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">5</a></li>
                                <li><a class="dropdown-item" href="#">10</a></li>
                                <li><a class="dropdown-item" href="#">15</a></li>
                            </ul>
                        </span>
                        <span class="dropdown">
                            <a class="btn filter-rows dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fal fa-filter"></i> Filter
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Last 5 orders</a></li>
                                <li><a class="dropdown-item" href="#">Last 10 Orders</a></li>
                                <li><a class="dropdown-item" href="#">Last 15 Orders</a></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <table class="table background-white p-4  table-bordered table-sm">
                    <thead class="table thead thead p-4">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody align-items-center">
                        <tr>
                            <td>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="product-image me-3">
                                        <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                    </div>
                                    <div class="my-cart-product-description">
                                        <div class="my-cart-product-description-title">
                                            <h6>Washing Machine</h6>
                                        </div>
                                        <div class="my-cart-product-description-more-detail">
                                            <span>Weight:2kg</span>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                NPR. 5000
                            </td>

                            <td>
                                <span class="text-success">In Stock</span>
                            </td>
                            <td>
                                <button class="btn btn-success">Add to Cart</button>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="product-image me-3">
                                        <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                    </div>
                                    <div class="my-cart-product-description">
                                        <div class="my-cart-product-description-title">
                                            <h6>Washing Machine</h6>
                                        </div>
                                        <div class="my-cart-product-description-more-detail">
                                            <span>Weight:2kg</span>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                NPR. 5000
                            </td>

                            <td>
                                <span class="text-danger">Out of Stock</span>
                            </td>
                            <td>
                                <button class="btn btn-success">Add to Cart</button>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="product-image me-3">
                                        <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                    </div>
                                    <div class="my-cart-product-description">
                                        <div class="my-cart-product-description-title">
                                            <h6>Washing Machine</h6>
                                        </div>
                                        <div class="my-cart-product-description-more-detail">
                                            <span>Weight:2kg</span>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                NPR. 5000
                            </td>

                            <td>
                                <span class="text-danger">Out of Stock</span>
                            </td>
                            <td>
                                <button class="btn btn-success">Add to Cart</button>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="product-image me-3">
                                        <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                    </div>
                                    <div class="my-cart-product-description">
                                        <div class="my-cart-product-description-title">
                                            <h6>Washing Machine</h6>
                                        </div>
                                        <div class="my-cart-product-description-more-detail">
                                            <span>Weight:2kg</span>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                NPR. 5000
                            </td>
                            <td>
                                <span class="text-success">In Stock</span>
                            </td>
                            <td>
                                <button class="btn btn-success">Add to Cart</button>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                    </tbody>
                </table>



                <div class="d-flex justify-content-between">
                    <div>
                        <a href="index.php">
                            <button class="btn btn-theme">Continue Shopping</button>
                        </a>
                    </div>
                    <a href="category.php">
                        <button class="btn btn-theme">View all Products</button>
                    </a>
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