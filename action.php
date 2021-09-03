
<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4></h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 100;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
    
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
  
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
      $pro_des = $row['product_desc'];
			$pro_image = $row['product_image'];
      $pro_rate = $row['rate'];
			echo "
				

  
                                    
  
<div class='col-md-4 col-lg-3 col-xl-2'>
    <div class='product product-5 text-center'>
        <figure class='product-media'>
            
                <img src='product_images/$pro_image' style='height: 15em;' alt='Product image' class='product-image'>
            

            <div class='product-action-vertical'>
                <a class='btn-product-icon btn-wishlist btn-expandable'><span>add to wishlist</span></a>
                
            </div><!-- End .product-action-vertical -->

            <div class='product-action'>
            <a href='#' class='btn-product btn-cart' pid='$pro_id' id='product'><span>add to cart</span></a>
                
            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class='product-body'>
            <div class='product-title' style='color:red; text-transform: capitalize'>
                $pro_title
            </div><!-- End .product-cat -->
            <h3 class='product-title' style='color:black; text-transform: capitalize; height: 3em; overflow: hidden; display: -webkit-box;'>$pro_des</h3><!-- End .product-title -->
            <div class='product-price'>
                $ $pro_price
            </div><!-- End .product-price -->
            <div class='ratings-container'>
                <div class='ratings'>
                    <div class='ratings-val' style='width: $pro_rate%; color:#fa05a0;'></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class='ratings-text' style='color:black;'>($pro_rate Reviews)</span>
            </div><!-- End .rating-container -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 -->
                                    

			";
		}
	}
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
      $pro_des = $row['product_desc'];
			$pro_rate = $row['rate'];
			echo "
				
<div class='col-md-4 col-lg-3 col-xl-2'>
    <div class='product product-5 text-center'>
        <figure class='product-media'>
            
                <img src='product_images/$pro_image' alt='Product image' class='product-image'>
            

            <div class='product-action-vertical'>
                <a class='btn-product-icon btn-wishlist btn-expandable'><span>add to wishlist</span></a>
                
            </div><!-- End .product-action-vertical -->

            <div class='product-action'>
            <a href='#' class='btn-product btn-cart' pid='$pro_id' id='product'><span>add to cart</span></a>
                
            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class='product-body'>
            <div class='product-title' style='color:red; text-transform: capitalize'>
                $pro_title
            </div><!-- End .product-cat -->
            <h3 class='product-title' style='color:black; text-transform: capitalize;'>$pro_des</h3><!-- End .product-title -->
            <div class='product-price'>
                $ $pro_price
            </div><!-- End .product-price -->
            <div class='ratings-container'>
                <div class='ratings'>
                    <div class='ratings-val' style='width: $pro_rate%; color:#fa05a0;'></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class='ratings-text' style='color:black;'>($pro_rate Reviews)</span>
            </div><!-- End .rating-container -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 -->
			";
		}
	}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					
          <div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to cart!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
        <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="#">'.$product_title.'</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">QTY 1 --</span>
                                                $'.$product_price.'.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="product_images/'.$product_image.'" alt="product">
                                            </a>
                                        </figure>
                                        
											
											<a href="index.php" remove_id="'.$product_id.'" class="btn-danger remove">Remove</a>
											
											
                                    </div><!-- End .product -->
					';
				
			}
			?>
				
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_form.php'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];
                    $ttl=$qty*$product_price;

					echo
          '<tr>
											<td class="product-col">
											<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
											<input type="hidden" name="" value="'.$cart_item_id.'"/>
											
												<div class="product">
												
												<p>
													<figure class="product-media">
														<a href="#">
															<img src="product_images/'.$product_image.'" alt="Product image">
														</a>
                                                       
													</figure>
<a href="#">'.$product_title.'</a>
													
                                                  
                                                <div class="cart-product-quantity">
												
                                                    <input type="number" class="form-control qty" value="'.$qty.'" min="1" max="10" step="1" data-decimals="0" required>
                                                    <a href="#" update_id="'.$product_id.'" class="btn-danger update"><span>UPDATE</span><i class="icon-refresh"></i></a>
                                                </div><!-- End .cart-product-quantity -->
                                          
													
                                                    
												</div><!-- End .product -->
											</td>
											<td class="price-col">UNIT PRICE $ '.$product_price.'</td>
											
											<td class="total-col form-control total">Sub Total:$ '.$ttl.'<input type="hidden" class="form-control total" value="'.$ttl.'" readonly="readonly"></div>
											</td>
											<td>
											<a href="#" remove_id="'.$product_id.'" class="btn-danger remove"><i class="icon-close"/> Remove</a>
											</td>
										</tr>';
						
				}
				
				echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
					</div>';
				if (!isset($_SESSION["uid"])) {
					echo '<a class="fixedButton" href="success.php">
 <button class="w3-button w3-white w3-border w3-border-red w3-round-large">CHECK OUT</button>
  </a>
							</form>';
					
				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					echo '
						
										<a href="success.php"';
				}
			}
	}
	
	
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>






