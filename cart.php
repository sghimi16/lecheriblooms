<?php include 'topnav.php';?>
<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
}
include_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lecheri</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        

                        <div class="header">
                            <style>
    .fixedButton{
   
    top: 0px;
    right: 0px; 
    padding: 20px;
}
.w3-round-large{border-radius:8px}
.w3-border-red,.w3-hover-border-red:hover{border-color:#f44336!important}
.w3-border{border:1px solid #ccc!important}
.w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
.w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-button:hover{color:#000!important;background-color:#ccc!important}
.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
</style>
<a class="fixedButton" href="index.php">
 <button class="w3-button w3-white w3-border w3-border-red w3-round-large"><< Back</button>
  </a>

                            
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-center">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only"> mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
                            <img src="logo.jpg" alt="Lecheri Blooms Logo" width="105" height="25" >
                        </a>

                        
                    </div><!-- End .header-left -->

                    
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
                   
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Lecheri Blooms</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Back > Home</a></li>
                        
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
                
                                YOUR CART PRODUCTS: <span class="badge">EMPTY</span>
				</div>
										<tr>
											<th>Product</th>
                                            <th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
											<th></th>
										</tr>
									</thead>

									<tbody id='cart_checkout'>
										
										
									
									</tbody>
                                   
								</table><!-- End .table table-wishlist -->

	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        

	        
    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>



</html>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>	
						
						
				
<footer class="footer">
        	

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2021 Lecheri Blooms Flower Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


















		