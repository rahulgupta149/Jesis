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
                        <div class="customer-profile-image me-3 ">
                            <img src="assets/image/customer-profile1.png" alt="" style="width: 65px;" class="img-fluid rounded-circle border p-2">
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
                <div class="d-flex justify-content-between mb-15">
                    <div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Orders</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-delivered" type="button" role="tab" aria-controls="pills-delivered" aria-selected="true">Delivered</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">To Be Confirmed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-returns-tab" data-bs-toggle="pill" data-bs-target="#pills-return" type="button" role="tab" aria-controls="pills-return" aria-selected="false">Returns</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cancellation</button>
                            </li>

                        </ul>
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

                <div class="tab-content shadow rounded-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table background-white p-4  table-bordered table-sm">
                            <thead class="table thead thead p-4">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Ordered Date</th>
                                    <th>Ordered Image</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Payment Gateway</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody text-center align-items-center">
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade show" id="pills-delivered" role="tabpanel" aria-labelledby="pills-delivered-tab">
                        <table class="table background-white p-4  table-bordered table-sm">
                            <thead class="table thead thead p-4">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Ordered Date</th>
                                    <th>Ordered Image</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Payment Gateway</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody text-center align-items-center">
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Delivered</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table background-white  table-bordered table-sm">
                            <thead class="table thead thead p-4">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Ordered Date</th>
                                    <th>Ordered Image</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Payment Gateway</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody text-center align-items-center">
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)">
                                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table background-white table-bordered table-sm">
                            <thead class="table thead thead p-4">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Ordered Date</th>
                                    <th>Ordered Image</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Payment Gateway</th>
                                    <th>Order Status</th>
                                </tr>
                            </thead>
                            <tbody class="tbody text-center align-items-center">
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Cancelled</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Cancelled</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Cancelled</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Cancelled</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Cancelled</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-return" role="tabpanel" aria-labelledby="pills-return-tab">
                        <table class="table background-white table-bordered table-sm">
                            <thead class="table thead thead p-4">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Ordered Date</th>
                                    <th>Ordered Image</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Payment Gateway</th>
                                    <th>Order Status</th>
                                </tr>
                            </thead>
                            <tbody class="tbody text-center align-items-center">
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Return</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Return</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Return</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Return</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>27/10/2022</td>
                                    <td>
                                        <div class="text-center">
                                            <img src="assets/image/order1.jpg" width="80px" height="80px" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>Cash On Delivery</td>
                                    <td>Return</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

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