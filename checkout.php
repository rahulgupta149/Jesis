<?php
include_once('partials/header.php');

?>



<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/login-banner.jpg" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content white position-absolute">
                    <h3 class="white">Checkout</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php" class="white">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">Checkout</span>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="checkout-detail">
    <div class="container">
        <div>
            <div class="d-flex justify-content-end">

            </div>
        </div>

    </div>

    <div class="mt-3">
        <div class="container">
            <form action="#">
                <div class="row background-white p-3 mb-4">
                    <div class="col-lg-6">
                        <div class="checkbox-title">
                            <h3 class="text-dark">Billing Details</h3>

                            <div class="checkout-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName">First Name <span class="text-danger">*</span></label>
                                            <input type="text" required name="firstName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" required name="lastName" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address<span class="text-danger">*</span></label>
                                            <input type="text" required name="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address2">Address Line2</label>
                                            <input type="text" name="address2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Country<span class="text-danger">*</span></label>
                                            <select name="address" id="address" required class=" mb-2 form-control">
                                                <option value="" selected disabled>--Select An Option--</option>
                                                <option value="Home">Nepal</option>
                                                <option value="Office">Japan</option>
                                                <option value="Business">Afghanistan</option>
                                                <option value="Academy">America</option>
                                                <option value="Others">UK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City/Town <span class="text-danger">*</span></label>
                                            <input type="text" required name="city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="postcode">Postcode/ZIP<span class="text-danger">*</span></label>
                                            <input type="number" name="postcode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City/Town <span class="text-danger">*</span></label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyName">Company Name</label>
                                            <input type="number" name="postcode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone<span class="text-danger">*</span></label>
                                            <input type="phone" required name="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="form-group">
                                        <label for="additionInformation">Additional Information</label>
                                        <textarea name="additionalInformation" style="height: 150px;" class="form-control" id="additionalInformation" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class=" mt-5">
                                <input type="checkbox" id="different-address" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <label for="different-address">
                                    <span>Ship to a different address</span>
                                </label>
                                <div class="collapse" id="collapseExample">
                                    <div class="checkout-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" required name="firstName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" required name="lastName" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address<span class="text-danger">*</span></label>
                                                    <input type="text" required name="address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address2">Address Line2</label>
                                                    <input type="text" name="address2" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Country<span class="text-danger">*</span></label>
                                                    <select name="address" id="address" required class=" mb-2 form-control">
                                                        <option value="" selected disabled>--Select An Option--</option>
                                                        <option value="Home">Nepal</option>
                                                        <option value="Office">Japan</option>
                                                        <option value="Business">Afghanistan</option>
                                                        <option value="Academy">America</option>
                                                        <option value="Others">UK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City/Town <span class="text-danger">*</span></label>
                                                    <input type="text" required name="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="postcode">Postcode/ZIP<span class="text-danger">*</span></label>
                                                    <input type="number" name="postcode" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City/Town <span class="text-danger">*</span></label>
                                                    <input type="text" name="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyName">Company Name</label>
                                                    <input type="number" name="postcode" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                                    <input type="phone" required name="phone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-45">
                            <div class="order-detail border p-3 ">
                                <h3 class="text-dark">Your Order</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="product-name">
                                            Product
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product-price">
                                            Total
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row cart-item mt-3">
                                    <div class="col-lg-6">
                                        <div class="product-name">
                                            Washing Machine
                                            <strong class=" text-dark product-quantity"> x 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product-price">
                                            <span class="amount">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row cart-item mt-3">
                                    <div class="col-lg-6">
                                        <div class="product-name">
                                            Washing Machine
                                            <strong class=" text-dark product-quantity"> x 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product-price">
                                            <span class="amount">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row cart-subtotal mt-3">
                                    <div class="col-lg-6">
                                        <div class="product-name">
                                            Cart Subtotal
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product-price">
                                            <span class="amount">$375.00</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row cart-total mt-3">
                                    <div class="col-lg-6">
                                        <div>
                                            Order Total
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <strong class="amount text-dark">$1000.00</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="coupon-accordion mt-5">
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-detail">
                                <div class="coupon-detail">
                                    <form action="#">
                                        <p class="coupon-checkout">
                                            <input type="text" class="form-control" name="couponCode" placeholder="Coupon Code">
                                            <button class="btn btn-theme mt-2 p-3" type="submit">
                                                <a class="text-white" href="javascript:void(0)">
                                                    Apply Coupon
                                                </a>
                                            </button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>

                        <div class="checkout-payment mt-4">
                            <h4 class="text-dark">Payment</h4>
                            <form action="#" class="text-dark">
                                <div class="form-group  mt-3">
                                    <input type="radio" id="bankTransfer" name="payment">
                                    <label for="bankTransfer">Direct Bank transfer</label>
                                </div>
                                <div class="form-group mt-3">
                                    <!-- <div data-bs-toggle="collapse" href="#cashCollapse" aria-expanded="false" aria-controls="cashCollapse"> -->
                                    <div class="cashDelivery">
                                        <input type="radio" name="payment" id="cashOnDelivery">
                                        <label for="cashOnDelivery">Cash On Delivery</label>
                                    </div>
                                    <div class="collapse1" style="display: none;">
                                        <div class="allform">
                                            <div class="form-group">
                                                <div>
                                                    <textarea name="cashonDeliveryMessage" class="mt-2 form-control" id="cashOnDeliveryMessage"></textarea>
                                                </div>
                                                <div class="mt-2">
                                                    <button class="btn btn-theme">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="radio" id="onlineGateway" name="payment">
                                    <label for="onlineGateway" class="text-dark">Online Gateway</label>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
        </div>
        </form>

    </div>
    </div>
</section>
<?php

include_once('partials/footer.php');
include_once('partials/scripts.php');
?>
</body>


</html>