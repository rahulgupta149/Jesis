<?php
include_once('partials/header.php');

?>

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
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content-divide ms-2">Forgot Password</span>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="forgot-password mt-3">
    <div class="container">
        <span>Forgot your password? Please enter your username or email address. You will receive a link to create a new password via email.</span>

        <div class="row">
            <div class="col-12 mt-3">
                <label for="">
                    Username or Email
                </label>
                <div class="forgot-password-input mt-2">
                    <input type="email" class="w-100 form-control">
                </div>
            </div>
            <div class="col-12 mt-3 mb-30 text-center">   
                <button class="btn btn-theme w-100" type="submit">Reset Password</button>
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