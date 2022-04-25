<?php
include_once('partials/header.php');

?>

<section class="register">
    <div class="container">
        <div class="row shadow border-2 background-white mt-3 mb-3">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <img src="" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Get Started</h4>
                <span>Register As</span>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Customer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Trader</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row mb-2">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="text" name="firstName" placeholder="First Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="text" name="userName" placeholder="User Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="phone" name="phoneNumber" placeholder="Phone Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="text" name="shopName" placeholder="Shop Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <select name="address" id="address" class=" mb-2 form-control">
                                                <option value="" selected disabled>--Shop Category--</option>
                                                <option value="Home">Home</option>
                                                <option value="Office">Office</option>
                                                <option value="Business">Business</option>
                                                <option value="Academy">Academy</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Location" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">

                                </div>
                            </div>

                            <button class="btn btn-theme" type="submit">CREATE ACCOUNT</button>

                            <div class="sign-in-option pb-3">
                                <span>Already have an account?</span>
                                <span>
                                    <a href="login.php" style="color: #5dbf13;">SIGN IN</a>
                                </span>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

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