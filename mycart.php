<?php
include_once('partials/header.php');

?>

<!-- TODO:: add select bottom below banner and also add checkbox in front of image 
and add checkbox according to vendor name -->
<section class="category-banner mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <img src="assets/image/login-banner.jpg" alt="vegetable-banner" class="img-fluid">
                <div class="category-banner-content white position-absolute">
                    <h3 class="white">Your Cart</h3>
                    <span class="category-content-home me-3">
                        <a href="index.php" class="white">
                            <i class="ti-home"></i> Home
                        </a>
                    </span>
                    <span class="arrow ti-angle-right"></span>
                    <span class="category-content divide ms-2">Cart</span>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="Cart-area pt-120 pb-120 ">
    <div class="container">
        <div class="row">
            <form action="javascript:void(0)" class="background-white shadow p-0">
                <table class="table m-0 table-content table-responsive">
                    <thead class="thead">
                        <th>Image</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart-product-image">
                                <img src="assets/image/jacket1.jpg" alt="" class="img-fluid">
                            </td>
                            <td>
                                $130
                            </td>
                            <td class="product-name">
                                Jacket Light
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <a href="#" class="arrow minus quantity-minus">

                                    </a>
                                    <input type="number" id="quantity_623ae84537a73" class="input-text qty text" step="1" min="1" max="1795" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                    <a href="#" class="arrow plus quantity-plus"></a>
                                </div>
                            </td>
                            <td class="product-total-price">
                                $130
                            </td>
                            <td class="product-remove">
                                <i class="far fa-times pl-45"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart-product-image">
                                <img src="assets/image/jacket2.jpg" alt="" class="img-fluid">
                            </td>
                            <td>
                                $130
                            </td>
                            <td class="product-name">
                                Jacket Pink
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <a href="#" class="arrow minus quantity-minus">

                                    </a>
                                    <input type="number" id="quantity_623ae84537a73" class="input-text qty text" step="1" min="1" max="1795" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                    <a href="#" class="arrow plus quantity-plus"></a>
                                </div>
                            </td>
                            <td class="product-total-price">
                                $130
                            </td>
                            <td class="product-remove">
                                <i class="far fa-times pl-45"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="coupon-all d-flex justify-content-between pt-40">
                <div class="coupon d-flex justify-content-between">
                    
                        <input id="coupon_code" class="form-control" name="coupon_code" value="" placeholder="Coupon code" type="text">
                        <button class="btn-theme p-3" name="apply_coupon" type="submit">Apply coupon</button>

                </div>
                <div class="coupon2">
                    <button class="btn-theme p-3" name="update_cart" type="submit">Update cart</button>
                </div>
            </div>

        </div>
        <div class="row justify-content-end mt-35">
            <div class="col-md-5  background-white p-4 shadow">
                <div class="cart-page-total">
                    <h2>Cart totals</h2>
                    <ul class="mb-20">
                        <li>Subtotal <span>$250.00</span></li>
                        <li>Total <span>$250.00</span></li>
                    </ul>
                    <a class="btn p-3 btn-theme " href="checkout.php">Proceed to checkout</a>
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