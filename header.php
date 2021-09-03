<?php
require "config/constants.php";
session_start();

?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <title>Lecheri Blooms</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <link rel="stylesheet" type="text/css" href="style2.css">
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<div class="super_container">
  
  			
		</div>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">



<br>
<div class="w3-bar w3-green">
  <a href="index2.php" class="w3-bar-item w3-button">Home</a>
  <a href="lecheri/about.php" class="w3-bar-item w3-button">About Us</a>
  
  <a href="mailto:fastsales@gmail.com" class="w3-bar-item w3-button">Contact</a>
	<a href="cart.php" class="w3-bar-item w3-button" style="float:right"><i style= "color:red" class="fa fa-shopping-cart"><span class="badge" >0</span>
		</i>
	</a>
</div>
  
  <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"></div><a href="mailto:fastsales@gmail.com">info@lecheriblooms.com</a>
                        </div>
                        <div class="top_bar_content ml-auto">
													</div>
  <div class="top_bar_user">
                            <?php
    		if (isset($_SESSION['uid'])) {
    			?>
    				<a class="nav-link" href="logout.php">Sign out <?php echo $_SESSION["name"];?></a>
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
	</div>
	    			<?php
    			}


    			
    		}
             

    	?>	
                    </div>
                </div>
								
            </div>
  
    <div class="header_main">
            <div class="container">
                <div class="row">
                   
                   
								</div>
						</div>
		</div>
  