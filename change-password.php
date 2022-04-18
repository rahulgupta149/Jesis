<?php
include_once('partials/header.php');

?>

<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/login-banner.jpg" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content white position-absolute">
                    <h3 class="white">Password</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php" class="white">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">Change Password</span>

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
                <div class="mb-3">
                    <h4>Change Password</h4>
                </div>
                <div class="login-form">
                    <form action="">
                        <div class="form-group mb-4">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <label class="me-3" for="">Current password <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-9">
                                    <input type="password" class="form-control" name="currentPassword" placeholder="Current Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <label class="me-3" for="">New password <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-9">
                                    <input type="password" class="form-control" name="newPassword" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <label class="me-3" for="">Confirm password <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-9">
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-theme">Update Password</button>
                        </div>
                    </form>
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