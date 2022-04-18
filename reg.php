<?php
include_once('partials/header.php');

?>

<div class="container mt-4 mb-4" style="margin-left: 13%;">
<div class="overall">
    <div class="left">
        <img style="height: 70vh;
        width: 70vh;" src="assets/image/Group 206.png" alt="">
    </div>

    <div class="box">
        <div class="content">
            <h5><b>Get Started</b></h5>
            <p>Register As</p>
            <button type="button" class="toggle-btn" onclick="redCustomer()">Customer</button>
            <button type="button" class="toggle-btn" onclick="redTrader()">Trader</button>
        </div>
    </div>


    <div class="infos">
        <div id="ascust" class="ascustomer">

            <form action="">
                <div class="customer-names">
                    <input type="text" placeholder="FirstName">
                    <input type="text" placeholder="LasttName">
                </div>
                <div class="email">
                    <input type="email" placeholder="email" name="" id="">
                </div>

                <div class="customer_username_phonenumber">

                    <input type="text" name="" id="" placeholder="username">
                    <input type="text" name="" id="" placeholder="PhoneNumber">
                </div>

                <div class="custpassword">
                    <input type="password" name="" placeholder="Password" id="">
                    <input type="password" name="" placeholder="ConfirmPassword" id="">
                </div>



                <div class="dob">

                    <input type="date" placeholder="Confirm Password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>


                <div class="gender">
                    Gender :
                    <input type="radio" name="" id="">Male
                    <input type="radio" name="" id="">Female
                    <input type="radio" name="" id="">Other
                </div>

                <button type="submit" class="create"><b> Create Account</b></button>
            </form>
            <div class="already-customer">

                Already have an Account ? <a style="color: green;" href="#">SIGN IN</a>
            </div>






        </div>
        <div id="astrd" class="astrader">
            <form action="">
                <div class="trader-names">
                    <input type="text" placeholder="FirstName">
                    <input type="text" placeholder="LasttName">
                </div>

                <div class="email">
                    <input type="email" placeholder="email" name="" id="">
                </div>

                <div class="trader_username_phonenumber">

                    <input type="text" name="" id="" placeholder="username">
                    <input type="text" name="" id="" placeholder="PhoneNumber">
                </div>

                <div class="traderpassword">
                    <input type="password" name="" placeholder="Password" id="">
                    <input type="password" name="" placeholder="ConfirmPassword" id="">
                </div>

                <div class="shopename_catg">
                    <input type="text" name="" placeholder="Shop Name" id="">
                    <select name="" id="">
                        <option value="" active>Shop Category</option>
                        <option value="one">one</option>

                        <option value="two">two</option>

                        <option value="three">three</option>

                        <option value="four">four</option>
                    </select>
                </div>

                <div class="location">
                    <input type="text" name="" placeholder="Location" id="">
                </div>
                <button type="submit" class="create"><b> Create Account</b></button>
                <div class="already-trader">

                    Already have an Account ? <a style="color: green;" href="#">SIGN IN</a>
                </div>
            </form>
        </div>
    </div>





    <script>
        // var x = document.getElementById("ascust");
        // var y = document.getElementById("astrd");
        // var z = document.getElementById("btn");

        // function redCustomer() {

        //     x.style.left = "0";
        //     y.style.left = "71vh";

        // }

        // function redTrader() {

        //     x.style.left = "71vh";
        //     y.style.left = "0";

        // }
    </script>
</div>

</div>


<?php

include_once('partials/footer.php');
include_once('partials/scripts.php');
?>
</body>


</html>