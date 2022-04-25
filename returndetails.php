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
                    <span class="category-content divide ms-2">Profile</span>

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
            <div class="col-sm-12 col-md-6 col-lg-9 ">
                <h4>Return Details</h4>
                <div class="return-information mt-2 shadow p-3 border background-white d-flex justify-content-between">
                    <div>
                        <span class="return-order-id">Order Id:
                            <span class="text-primary m-0">
                                #123456789
                            </span>
                        </span>
                        <p class="return-date m-0">Returned On:18th April, 2022</p>
                        <p class="ra-code">124569</p>
                    </div>
                    <div>
                        <p class="m-0">
                            <a href="javascript:void(0)" class="text-primary">
                                <i class="fal fa-print"></i> PRINT RETURN LABEL
                            </a>
                        </p>
                        <div class="refund-via">Refund Via Voucher</div>
                    </div>
                </div>

                <div class=" background-white shadow border mt-4  p-3">
                    <div class="return-process-detail">
                        <ul id="progress-bar" class="progressbar p-2">

                            <li class="active">Return Initiated</li>
                            <li>Pending Pick Up</li>
                            <li>Return In Progress</li>
                            <li>Return Package Recieved</li>
                            <li>Refund Processing</li>
                            <li>Refunded</li>
                        </ul>
                    </div>

                    <!-- TODO:: Doesn't start from first -->
                    <div class="refund-process shadow border w-100 mt-3 p-2">
                        <span class="refund-process-date">01/01/2019</span>
                        <span class="refund-process-status mx-2">Refund Process Completed</span>
                        <div class="product-detail-specification">
                            <span id="dots"></span>
                            <span id="more">
                                <ul class="product-description-list px-3 pt-4">
                                    <li>Any Product types that You want - Simple, Configurable</li>
                                    <li>Downloadable/Digital Products, Virtual Products </li>
                                    <li>Inventory Management with Backordered items</li>
                                </ul>
                            </span>
                            <div class="text-center">
                                <button onclick="myFunction()" id="myBtn" class="read-more-button mb-2 p-2">View more</button>
                            </div>
                        </div>

                    </div>

                    <div class="returned-product-detail">
                        <div class="row">
                            <table class="table mt-3">
                                <tbody class="returned-product-table">
                                    <tr>
                                        <td class="return-product-image">
                                            <img src="assets/image/order1.jpg" alt="" class="img-fluid">
                                        </td>
                                        <td>
                                            <span>Pack of 3 Brief Amul Boxers For Men-multicolor</span>
                                            <div>
                                                <strong>Reason:</strong> <span>I did not like the Color</span>
                                            </div>
                                        </td>
                                        <td class="return-product-price">
                                            Rs.600
                                        </td>
                                        <td class="return-product-quantity">
                                            <small>Qty:</small> <span>1</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="return-product-image">
                                            <img src="assets/image/order1.jpg" alt="" class="img-fluid">
                                        </td>
                                        <td>
                                            <span>Pack of 3 Brief Amul Boxers For Men-multicolor</span>
                                            <div>
                                                <strong>Reason:</strong> <span>I did not like the Color</span>
                                            </div>
                                        </td>
                                        <td class="return-product-price">
                                            Rs.600
                                        </td>
                                        <td class="return-product-quantity">
                                            <small>Qty:</small> <span>1</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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