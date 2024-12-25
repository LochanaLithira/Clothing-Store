<?php
$total_amount = $_COOKIE['total_amount'];
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkoutPage.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="./images/img/logo.png" ID="logoid" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">HOME</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="cart.html"><img src="images/carticon.ico"></a></li>
        

            </ul> 
        </div>

    </section>

    <h1>Checkout</h1>
    <form method="post" action = "insert.php">
    <div class="container">

        <div class="left-side">
            <div class="left-column">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>
                <div class="form-group">
                    <label for="streetAddress">Street Address</label>
                    <input type="text" id="streetAddress" name="streetAddress">
                </div>
                <div class="form-group">
                    <label for="city">Town/City</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="postalCode">Postal/Zip Code</label>
                    <input type="text" id="postalCode" name="postalCode">
                </div>
                <div class="check">
                    <input type="checkbox" id="createAccount" name="createAccount">
                    <label for="createAccount">Create an account</label>
                </div>
            </div>
            <div class="right-column">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>
        </div>
        <div class="right-side">
            
            <div class="product-column">
                <p>Subtotal</p>
                <p>Delivery Charges</p>
                <label id="coupon">Total</label>
            </div>
            <div class="total-column">
                <p>LKR <?php echo "$total_amount" ?></p>
                <p>LKR 300.00</p>
                <p>LKR <?php echo "$total_amount" + 300 ?></p>
                <input type="hidden" id="price" name="price" value="<?php echo "$total_amount" + 300 ?>">
            </div>
            <div class="payment-methods">
                <input type="radio" id="directBankTransfer" name="paymentMethod" value="Direct Bank Transfer">
                <label for="directBankTransfer">Direct Bank Transfer</label><br>
                <input type="radio" id="creditDebitCard" name="paymentMethod" value="Credit/Debit Card">
                <label for="creditDebitCard">Credit/Debit Card</label><br>
                <input type="radio" id="cashOnDelivery" name="paymentMethod" value="Cash on Delivery">
                <label for="cashOnDelivery">Cash on Delivery</label><br>
            </div>

            <div class="check">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">I've read and accept the terms & conditions</label>
            </div>

           <button class="button"> <input type = "submit" value="Place the order"></button>


        </div>
    </div>
</form>

    <!-- <script src="checkout.js"></script> -->


    <div id="footerdiv">
<footer class="section-p1">
    <div class="col">
        <img class="flogo" src="./images/img/logo.png" alt="">
        <h4>CONTACT</h4>
        <p><strng>KADUWELA ROAD, MALABE, SRI LANKA</strong></p>
        <p><strog></strong>+94 11 5987 628</p>
        <p><strng>contact@Venomclothing.com</strong></p>
        <div class="follow">
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest"></i>
            </div>
        </div>

    </div>
    <div class="col1">
        <h4>ABOUT</h4>
        <a href="#">ABOUT US</a>
        <a href="#">CONTACT US</a>
        <a href="#">PRIVACY POLICY</a>
        <a href="#">TERMS AND CONDITIONS</a>
        <a href="#">FAQ</a>
    </div>
    <div class="col">
        <h4>MY ACCOUNT</h4>
        <a href="#">SIGN IN</a>
        <a href="#">USER ACCOUNT</a>
        <a href="#">VIEW CART</a>
        <a href="#">CHECKOUT</a>
        <a href="#">WISHLIST</a>
    </div>
    <div class="col install">
        <h4>INSTALL VENOM APP</h4>
        <p>FROM APP STORE OR GOOGLE PLAY </p>
        <div class="row">
            <img src="./images/img/play.jpg">
            <img src="./images/img/app.jpg">
        </div>
        <p>SECURED PAYMENT GATEWAYS</p>
        <img src="./images/img/pay.png">

    </div>
    <div class="copyright">
        <p> © 2024 VENOMCLOTHING.COM. ALL RIGHTS RESERVED.</p>
    </div>

</footer>
</div>
</body>

</html>