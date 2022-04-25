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
            <div class="col-sm-12 col-md-6 col-lg-9">
                <div class="container mb-2">
                    <h3>My Profile</h3>
                </div>
                <div class="container">
                    <form action="" class="myprofile-form">
                        <div class="row shadow border background-white pt-3">
                            <div class="col-sm-12"></div>
                            <div class="col-sm-12 col-lg-4 col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="firstName">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control" name="middleName">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="lastName">
                            </div>

                            <div class="row mt-2 mb-2">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="mb-2">Update Image</label>
                                    <input type="file" accept="image/*">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="mb-2">Date of Birth</label>
                                    <input type="date" id="datepicker-13" name="dob" class="form-control">

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <label for="">Delivery Address</label>
                                            </div>
                                            <div class="myprofile-modal">
                                                <button class="btn btn-theme" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Delivery Address</button>
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Add Delivery Address</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="">
                                                                    <div>
                                                                        <label for="">Title </label>
                                                                        <select name="address" id="address" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Any One--</option>
                                                                            <option value="Home">Home</option>
                                                                            <option value="Office">Office</option>
                                                                            <option value="Business">Business</option>
                                                                            <option value="Academy">Academy</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">Province Number <span class="text-danger mx-2">*</span></label>
                                                                        <select name="provinceNumber" id="provinceNumber" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Any Province--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">District <span class="text-danger mx-2">*</span></label>
                                                                        <select name="District" id="District" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Any District--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">Municipality/VDC <span class="text-danger mx-2">*</span></label>
                                                                        <select name="Municipality" id="Municipality" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Your Municipality/VDC--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">City <span class="text-danger mx-2">*</span></label>
                                                                        <select name="city" id="city" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Your City--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">Tole</label>
                                                                        <select name="tole" id="tole" class=" mb-2 form-control">
                                                                            <option value="" selected disabled>--Select Your Tole--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div>
                                                                        <label for="" class="mb-2">Street Address</label>
                                                                        <textarea class="form-control" name="streetAddress" row="50" placeholder="Enter your address"></textarea>
                                                                    </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </form>




                    <input type="address" class="form-control" name="address">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="">Email</label> &nbsp;
                            <a href="javascript:void(0)" style="color: blue; text-decoration:underline">Verify</a>
                            <!-- <span  style="color: blue; display:none"> <i class="fal fa-badge-check"></i> Verified</span> -->
                        </div>
                        <div class="myprofile-modal">
                            <button class="btn btn-theme" type="button" data-bs-toggle="modal" data-bs-target="#addEmail">Add Email</button>
                            <div class="modal fade" id="addEmail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add Email</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div>
                                                    <label for="" class="mb-2">Email</label>
                                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="cancel">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="email" class="form-control" name="address">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="">Primary Number</label>
                        </div>
                        <div style="opacity: 0;">
                            <button class="btn btn-theme">Add Contact Number</button>
                        </div>
                    </div>
                    <input type="phone" class="form-control" name="address">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="">Secondary Number</label>
                        </div>
                        <div class="myprofile-modal">
                            <button class="btn btn-theme" type="button" data-bs-toggle="modal" data-bs-target="#addContactNumber">Add Contact Number</button>
                            <div class="modal fade" id="addContactNumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add Contact Number</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div>
                                                    <label for="">Title</label>
                                                    <select name="address" id="address" class=" mb-2 form-control">
                                                        <option value="" selected disabled>--Select Any One--</option>
                                                        <option value="Primary">Primary</option>
                                                        <option value="Secondary">Secondary</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="" class="mb-2">Contact Number</label>
                                                    <input type="phone" class="form-control" placeholder="Enter your contact number">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="cancel">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="phone" class="form-control" name="address">
                </div>
            </div>
        </div>

        <!-- <div class="row mt-3">
            <div class="col-lg-12">
                <div class="">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="">Payment Option</label>
                        </div>
                        <div>
                            <div class="myprofile-modal">
                                <button class="btn btn-theme" type="button" data-bs-toggle="modal" data-bs-target="#addPaymentOption">Add Payment Option</button>
                                <div class="modal fade" id="addPaymentOption" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Add Payment Option</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div>
                                                        <label for="" class="mb-2">Card Number</label>
                                                        <input type="number" class="form-control" placeholder="Enter your card number">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" type="cancel">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-6">
                        
                        <div class="payment-card" ><img src="assets/image/paypal.png" alt="payment">
                            <h4>card number</h4>
                            <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                            <h5>Manish Maharjan</h5>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-6">
                        <div class="payment-card "><img src="assets/image/visa.png" alt="payment">
                            <h4>card number</h4>
                            <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                            <h5>Manish Maharjan</h5>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-6">
                        <div class="payment-card "><img src="assets/image/master-card.png" alt="payment">
                            <h4>card number</h4>
                            <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                            <h5>Manish Maharjan</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->

        <div class="d-flex mb-3 mt-3">
            <button class="btn btn-theme">Update Profile</button>
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