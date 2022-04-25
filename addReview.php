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
                <div class="dashboard-review">
                    <div class="row shadow border p-4 background-white">
                        <div class="col-sm-12 col-md-6 col-lg-7 review-detail-description position-relative">
                            <div>
                                <div class="review-date">
                                    <span>Purchased on 17 April,2022</span>
                                </div>
                                <div class="mt-2">
                                    Rate and Review Purchased Product:
                                </div>
                                <div class="mt-3">
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

                                    <div class="review-detail d-flex justify-content-between mt-5">
                                        <div>
                                            <span>Review Detail</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="text-primary">How to write good review</a>
                                        </div>
                                    </div>
                                    <div class="review-writing-area mt-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- TODO: writing doesn't start from top -->
                                                <textarea class="w-100 form-control" name="write-review" id="write-review"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <input type="file" name="file" id="file" class="inputfile" />
                                        <label for="file">
                                            <i class="fal fa-upload"></i> Upload a Photo
                                        </label>
                                    </div>

                                    <div class="review-image-criteria mt-4">
                                        <h4>Important</h4>
                                        <span>Maximum 6 Photos can be uploaded</span>
                                        <ul>
                                            <li>Image size can be max 5mb</li>
                                            <li>Takes 24 hrs to verify the image</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mt-5">
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

                                    <div class="review-detail d-flex justify-content-between mt-5">
                                        <div>
                                            <span>Review Detail</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="text-primary">How to write good review</a>
                                        </div>
                                    </div>
                                    <div class="review-writing-area mt-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- TODO: writing doesn't start from top -->
                                                <textarea class="w-100 form-control" name="write-review" id="write-review"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <input type="file" name="file" id="file" class="inputfile" />
                                        <label for="file">
                                            <i class="fal fa-upload"></i> Upload a Photo
                                        </label>
                                    </div>


                                    <div class="review-image-criteria mt-4">
                                        <h4>Important</h4>
                                        <span>Maximum 6 Photos can be uploaded</span>
                                        <ul>
                                            <li>Image size can be max 5mb</li>
                                            <li>Takes 24 hrs to verify the image</li>
                                        </ul>
                                    </div>
                                </div>
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
                                <p>Rate and Review Your Seller:</p>
                                <div class="px-3">

                                </div>

                                <div class="review-writing-area mt-3">
                                    <div class="row">
                                        <span class="mb-1">Review Detail</span>
                                        <div class="col-12">
                                            <!-- TODO: writing doesn't start from top -->
                                            <textarea class="w-100 form-control" name="write-review" id="write-review" placeholder="How is your overall experience with the seller?"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="rider-review mt-5">
                                    <span>Rate your Rider:</span>
                                    <div>

                                        <div class="stars">
                                            <input type="radio" id="five" name="rate" value="5">
                                            <label for="five"></label>
                                            <input type="radio" id="four" name="rate" value="4">
                                            <label for="four"></label>
                                            <input type="radio" id="three" name="rate" value="3">
                                            <label for="three"></label>
                                            <input type="radio" id="two" name="rate" value="2">
                                            <label for="two"></label>
                                            <input type="radio" id="one" name="rate" value="1">
                                            <label for="one"></label>
                                        </div>
                                        <div class="review-writing-area mt-3">
                                            <div class="row">
                                                <span class="mb-1">Review Detail</span>
                                                <div class="col-12">
                                                    <!-- TODO: writing doesn't start from top -->
                                                    <textarea class="w-100 form-control" name="write-review" id="write-review" placeholder="How is your overall experience with our rider?"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-name-option">
                                            <!-- TODO: toggle function remaining -->
                                            <div class="text-center mt-3">
                                                <button class="btn btn-theme">Submit</button>
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
    </div>
    </div>
</section>

<?php

include_once('partials/footer.php');
include_once('partials/scripts.php');
?>
</body>


</html>