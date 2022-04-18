<?php
include_once('partials/header.php');

?>
<!-- TODO: I am customer lai default checked rakhne and tei anusar ko tesko registration form aaos -->
<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/login-banner.jpg" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content white position-absolute">
                    <h3 class="white">LOGIN</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php" class="white">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">Login</span>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="login-form">
                    <h3 class="login-form-title">Sign In</h3>
                    <form>
                        <div id="dvPassport" style="display: none">
                            <div class="form-group mb-3">
                                <label>Shop Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                        </div>
                        <div id="AddPassport">
                            <div class="form-group mb-3">
                                <label>Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="login-social-links mt-3">
                                <div class="login-social-facebook text-center">
                                    <i class="ti-facebook"></i>
                                    <span>Login With Facebook</span>
                                </div>
                                <div class="login-social-gmail text-center mt-3 mb-3">
                                <i class="fas fa-envelope me-3"></i>
                                    <span>Login With Gmail</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <label for="chkCustomer">
                                    <input type="radio" name="1" id="chkCustomer" value="1" checked />
                                    I am a Customer
                                </label>
                            </div>
                            <div>
                                <label for="chkPassport">
                                    <input type="radio" name="1" id="chkPassport" value="0 v " />
                                    I am a Vendor
                                </label>
                            </div>
                        </div>


                        <div class="login_flex">
                            <div class="login_flex_1">
                                <a href="forgot-password.php" class="text-bold">Forget Password?</a>
                            </div>
                            <div class="login_flex_2">
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-md btn-theme">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="login-form">
                    <h3 class="login-form-title">Create An Account</h3>
                    <form>

                        <div id="registrationCustomer" class="registrationCustomer">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="login-social-links mt-3">
                                    <div class="login-social-facebook text-center">
                                        <i class="ti-facebook"></i>
                                        <span>Login With Facebook</span>
                                    </div>
                                    <div class="login-social-gmail text-center mt-3 mb-3">
                                        <i class="fas fa-envelope me-3"></i>
                                        <span>Login With Gmail</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="registartionVendor" class="registartionVendor">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Shop Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <label for="regCustomer">
                                    <input type="radio" name="registration" id="regCustomer" class="regCustomer" value="0" checked />
                                    I am a Customer
                                </label>

                            </div>
                            <div>
                                <label for="regVendor">
                                    <input type="radio" name="registration" id="regVendor" class="regVendor" value="1" />
                                    I am a Vendor
                                </label>

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="d-flex justify-content-end">
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-md btn-theme">Sign Up</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="news-wrap" style="background: url(assets/image/news-slider1.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-word">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                </div>
            </div>
            <!-- <div class="col-md-7 col-lg-6 col-xl-5">
                <form action="" class="news-form form">
                    <input type="text" placeholder="Enter your email address" class="form-control">
                </form>
            </div> -->
        </div>
    </div>
</section>




<?php

include_once('partials/footer.php');
include_once('partials/scripts.php');
?>
</body>


</html>