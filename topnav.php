<?php
session_start();
include 'db.php';?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lecheri Blooms</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Lecheri Blooms ">
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
    <link rel="stylesheet" href="assets/css/demos/demo-13.css">

    <link rel="stylesheet" href="assets/css/demos/demo-22.css">
    
</head>

<body>
    <div class="page-wrapper">
        <header class="header sticky-header" style="background-color:rgb(255,255,150)">
            <div class="header-top" style="background-color:rgb(255,255,150)">
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
                        <ul class="top-menu">
                            <li>
                                <a>Contact Us</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container sticky-header">
                    <div class="header-left sticky-header">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
                            <img src="lg.png" alt="LecheriBlooms" width="105" height="25">
                        </a>

                        <nav class="main-nav sticky-header">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="megamenu-container active">
                                    <a href="products.php?pro_id=Wedding">Wedding</a>
                                </li>
                                <li>
                                    <a class="sf-with-ul">Gift</a>

                                    <ul>
                                        <li><a href="#">Gift For Her</a></li>
                                        <li><a href="#">Womens DAy</a></li>
                                        <li><a href="#">Congratulation</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-container active">
                                    <a href="products.php?pro_id=Birthday">BirthDay</a>
                                </li>
                                <li class="megamenu-container active">
                                    <a href="products.php?pro_id=Funeral">Funeral</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                         <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                <span class="cart-count">
                                <?php
                                    if (isset($_SESSION['uid'])) {
    			
                
                                    $sql = "SELECT COUNT(*) AS count_item FROM wishlist WHERE user_id = $_SESSION[uid]";
$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	
    echo $row["count_item"];}
    else{
        echo '0';
    }	?>
                                </span>
                            </a>

                         </div>
                         
                        </div><!-- End .wishlist -->
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
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->