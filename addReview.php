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
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">To be Reviwed <span>(5)</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">History <span>(51)</span></button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="dashboard-review">
                            <div class="row shadow border p-3 background-white">
                                <div class="col-sm-12 col-md-6 col-lg-7 review-detail-description position-relative">
                                    <div class="review-date">
                                        <span>Purchased on 17 April,2022</span>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="review-image me-3 mt-2">
                                                <img src="assets/image/order1.jpg" width="80px" alt="" class="img-fluid">
                                            </div>
                                            <div class="reviewd-item-detail">
                                                <span class="fw-bold">Washing Machine</span>
                                                <div class="more-detail">
                                                    <span>Color:Blue</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex flex-wrap align-items-center">
                                            <div class="review-image me-3 mt-2">
                                                <img src="assets/image/order1.jpg" width="80px" alt="" class="img-fluid">
                                            </div>
                                            <div class="reviewd-item-detail">
                                                <span class="fw-bold">Washing Machine</span>
                                                <div class="more-detail">
                                                    <span>Color:Blue</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 px-3 pt-3">
                                    <div>
                                        <strong>Sold by:</strong>
                                        <span>
                                            <a href="javascript:void(0)" class="text-primary">Manish Maharjan</a>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-theme">Add Review</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow border p-3 mt-3 background-white">
                                <div class="col-sm-12 col-md-6 col-lg-7 review-detail-description position-relative">
                                    <div class="review-date">
                                        <span>Purchased on 17 April,2022</span>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="review-image me-3 mt-2">
                                                <img src="assets/image/order1.jpg" width="80px" alt="" class="img-fluid">
                                            </div>
                                            <div class="reviewd-item-detail">
                                                <span class="fw-bold">Washing Machine</span>
                                                <div class="more-detail">
                                                    <span>Color:Blue</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 px-3 pt-3">
                                    <div>
                                        <strong>Sold by:</strong>
                                        <span>
                                            <a href="javascript:void(0)" class="text-primary">Pranit Bhatta</a>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-theme">Add Review</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row shadow border p-3 mt-3 background-white">
                                <div class="col-sm-12 col-md-6 col-lg-7 review-detail-description position-relative">
                                    <div class="review-date">
                                        <span>Purchased on 17 April,2022</span>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="review-image me-3 mt-2">
                                                <img src="assets/image/order1.jpg" width="80px" alt="" class="img-fluid">
                                            </div>
                                            <div class="reviewd-item-detail">
                                                <span class="fw-bold">Washing Machine</span>
                                                <div class="more-detail">
                                                    <span>Color:Blue</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 px-3 pt-3">
                                    <div>
                                        <strong>Sold by:</strong>
                                        <span>
                                            <a href="javascript:void(0)" class="text-primary">Rahul Gupta</a>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-theme">Add Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
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