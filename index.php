<?php   

 @include 'config.php';

 session_start();

 if(!isset($_SESSION['admin_name'])){
     header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerece Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>    
    <section id="header">
        <a href="#"><img src="imgs/logo.png" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>                
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-solid fa-shopping-cart"></i></a></li>
                <li><a href="#" onclick="window.location.href='login_form.php';" ><i class="fa-solid fa-right-from-bracket"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-solid fa-shopping-cart"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 50% off!</p>
        <button onclick="window.location.href='shop.html';">Shop Now</button>
    </section>

    <section id="feature" class="section-p1" >
        <div class="fe-box">
            <img src="imgs/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="imgs/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="imgs/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="imgs/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="imgs/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="imgs/features/f6.png" alt="">
            <h6>F24/27 Support</h6>
        </div>        
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="imgs/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹650</h4>
                </div>
                <div class="icons"  onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f2.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Green Leaf Digital Printed Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹499</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f3.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Men's Slim Fit Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹599</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Men's Fitted Polo Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹700</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f5.jpg" alt="">
                <div class="des">
                    <span>Calvin Klien</span>
                    <h5>Men's Slim Fit Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹500</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f6.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Men's Solid Regular fit Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹550</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Solid Rayon Palazzo for women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/f8.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Women Printed Cotton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹850</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>            
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>50% Off</span> - All Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="imgs/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Men's Neck fitted Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹650</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n2.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Men's Casual Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹550</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n3.jpg" alt="">
                <div class="des">
                    <span>Calvin Clien</span>
                    <h5>Men's College Wearing Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹850</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n4.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Men's Half Sleeves Travelling Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Men's Party Wear Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹600</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n6.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Men's Walking Shorts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹450</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Men's Casual Wearing Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹699</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>

            <div class="pro">
                <img src="imgs/products/n8.jpg" alt="">
                <div class="des">
                    <span>Calvin Clien</span>
                    <h5>Men's Travelling Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹400</h4>
                </div>
                <div class="icons" onclick="window.location.href='cart.html';">
                <a href="#"><i class="fa fa-solid fa-shopping-cart"></i></a>
                </div>
            </div>            
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best modern dresses is on sale</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best modern dresses is on sale</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">        
        <div class="banner-box">            
            <h2>SEASONAL SALE</h2>
            <h3>Summer Collection 40% Off</h3>            
        </div>
        <div class="banner-box banner-box2">            
            <h2>LUCKY CUSTOMERS</h2>
            <h3>Winter Collection 30% Off</h3>            
        </div>
        <div class="banner-box banner-box3">            
            <h2>RAM NAVAMI SALE</h2>
            <h3>Festival Offers 50% Off</h3>            
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="imgs/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Pggc-11 Co-ed,Sector-11,Chandigarh</p>
            <p><strong>Phone:</strong> (+91) 6201370319/(+91) 8986733701</p>
            <p><strong>Working:</strong> 09:00am - 07:00pm, Mon-Sat</p>
            <div class="follow">
                <h4>follow Us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>               
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#" onclick="window.location.href='about.html';">About us</a>
            <a href="#">Delivery Informations</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#" onclick="window.location.href='contact.html';">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#" onclick="window.location.href='cart.html';">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="imgs/pay/app.jpg" alt="">
                <img src="imgs/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="imgs/pay/pay.png" alt="">
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>