 <?php
 $brand_query = "SELECT * FROM categories   WHERE cat_title='Wedding'";
	$run_query = mysqli_query($con,$brand_query);
	
	$count = mysqli_num_rows($run_query);
		if($count > 0){
			$row = mysqli_fetch_array($run_query);
		$cat_name = $row["cat_title"];
	$cat_id = $row["cat_id"];
	}else{
		$cat_name='No Product Found';
	}
	
	
	?>
          <section class="best-sellers">
            	<div class="container">
			<div class="container popular">
                <hr class="mb-5">

                <div class="section-title">
                    <div><p class="title"><span>Popular Products</span></p></div>
                    
                    <a class="link" href="#">See All Products</a>
                </div>
			</div></div>
            		<div class="heading">
	            		<p class="heading-cat text-center">NEW</p>
	            		<h3 class="heading-title text-center"><?php echo $cat_name;?></h3>
	            	</div>
		            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow text-center" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "768": {
                            	"items":3
                            },
                            "992": {
                                "items":3
                            },
                            "1200": {
                            	"items":4
                            }
                        }
                    }'>
	         <?php
	$product_query = "SELECT * FROM products  WHERE product_cat=$cat_id";
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
				
<div class='product product-10 text-center'>
				    
				 <figure class='product-media'>
					<a href='product.php?pro_id=$pro_id'>
					    <img src='product_images/$pro_image' alt='Product image' style='width: 10' 'height: 25' class='product-image'>
					    
					</a>
					<div class='product-action-vertical'>
					    <a href='wishlist.php' class='btn-product-icon btn-wishlist' title='Add to Wishlist'><span>Add to Wishlist</span></a>
					</div><!-- End .product-action-vertical -->
				    </figure><!-- End .product-media -->
				<div class='product-body'>
					
					<div class='product-intro'>
					    <h3 class='product-title'>
						<a href='product.php'>$pro_title</a>
					    </h3><!-- End .product-title -->
					    <div class='product-price'>
						$$pro_price
					    </div><!-- End .product-price -->
					    <div class='product-detail'>
					<div class='ratings-container'>
							<div class='ratings'>
							    <div class='ratings-val' style='width: $pro_rate%;'></div><!-- End .ratings-val -->
							</div><!-- End .ratings -->
							<span class='ratings-text'>($pro_rate Reviews )</span>
							
					</div><!-- End .rating-container -->
					</div>
					    <div class='btn-cart' pid='$pro_id' id='product'>
						Add to Cart
					    </div><!-- End .product-price -->
					</div>
					
				</div>
				    
			</div><!-- End .product -->
";
		}
	}
?>
			
            	</div>
            </section>	    