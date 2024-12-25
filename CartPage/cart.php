<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
   
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

    
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            
           
            <tr class="cart-item">
                <td> 
                    <div class="cart-info">
                        <img src="./images/pic123.jpg">
                        <div>
                            <p>Midnight Velvet Crop Cami</p>
                            <br>
                            <a id="remove_btn" href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td class="item-price">Rs1500</td>
                <td>
                    <div class="quantity">
                        <button class="minus-btn">-</button>
                        <input type="text" class="quantity-input" value="0">
                        <button class="plus-btn">+</button>
                    </div>
                </td>
                <td class="total-price_for_each"></td>
            </tr>
            
            <tr class="cart-item">
                <td> 
                    <div class="cart-info">
                        <img src="./images/couple.webp">
                        <div>
                            <p>Venom Hoodie - Unisex</p>
                            <br>

                            <a id="remove_btn" href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td class="item-price">Rs2200</td>
                <td>
                    <div class="quantity">
                        <button class="minus-btn">-</button>
                        <input type="text" class="quantity-input" value="0">
                        <button class="plus-btn">+</button>
                    </div>
                </td>
                <td class="total-price_for_each"></td>
            </tr>

            <tr class="cart-item">
                <td> 
                    <div class="cart-info">
                        <img src="./images/pic12.jpeg">
                        <div>
                            <p>Venom Black T-shirt</p>
                            <br>
                            <a id="remove_btn" href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td class="item-price">Rs1900</td>
                <td>
                    <div class="quantity">
                        <button class="minus-btn">-</button>
                        <input type="text" class="quantity-input" value="0">
                        <button class="plus-btn">+</button>
                    </div>
                </td>
                <td class="total-price_for_each"></td>
            </tr>
                
        </table>
    
        <div class="checkout-button">
            <button>Clear Cart</button>
            <button><a id="checkout" href="checkoutPage.php">Checkout</a></button>
        </div>
    </div>
    
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
<script src="cart.js"></script>
</body>
</html>
