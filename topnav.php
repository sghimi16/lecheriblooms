<?php
require "config/constants.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Lecheri Blooms/category.html -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lecheri Blooms</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Lecheri Blooms - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="logo.jpg">
    <link rel="icon" type="image/jpg" sizes="32x32" href="logo.jpg">
    <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="logo.jpg">
    <meta name="apple-mobile-web-app-title" content="Lecheri Blooms">
    <meta name="application-name" content="Lecheri Blooms">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body style="background-color:#d6c7c7">
    <div class="page-wrapper" color="blue">
        <header class="header">
            <div class="header-top" style:"background:yellow">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">User</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Customer</a></li>
                                    <li><a href="admin">Admin</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">My account</a>
                            <div class="header-menu">
                                <ul>
                                    
                                    <?php
    		if (isset($_SESSION['uid'])) {
    			?>
                <div><a href="myaccount.php">Profile</a></div>
    				<a class="nav-link" href="logout.php">Logout <?php echo $_SESSION["name"];?></a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="customer_registration.php?register=1">Register</a>
	    			<?php
    			}else{
    				?>
						<div><a href="customer_registration.php?register=1">Register   </a></div>
                                <div><a href="login_form.php"> Sign in</a></div>
	
	    			<?php
    			}
	
    		}
           
    	?>	
                                    
                                </ul>
                                
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                       
                                <a href="about.php">Cantact Us</a>
                          
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->
        

         <div class="header-middle sticky-header">
                <div class="container">
                       
                    <div class="header-left">

                        <ul class="top-menu">
                            <li>
                                <a href="#">MENU   </a>
                                <ul   id="get_category">
                                    
                                    
                                </ul>
                            </li>
                             
                        </ul><!-- End .top-menu -->
                        <a href="index.php" class="icon-home">HOME</a>
                    </div><!-- End .header-right -->
                    <div class="header-center">
                        <a href="index.php">
                            <img src="logo.jpg" alt="Lecheri Blooms Logo" width="40" height="10">
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count badge">0</span>
                                
                                
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products" id="cart_product">
                                    
                                </div><!-- End .cart-product -->

                                

                                <div class="dropdown-cart-action">
                                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                                    <a href="cart.php" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div>
                </div>
         </div>
        </header>
                
         

    
         