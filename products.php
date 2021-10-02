<?php include 'topnav.php'
                 ?>
                 
             <?php
             $product= $_GET['pro_id'];
 $brand_query = "SELECT * FROM categories   WHERE cat_title='$product'";
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
                    <div><p class="title"><span><?php echo $cat_name;?></span></p></div>
                    
                    <a class="link" href="#">See All Products</a>
                </div>
			</div></div>
      <div class="container-fluid">
                    <h2 class="title text-center mb-3">---</h2><!-- End .title -->
                    <div class="row">
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
				
<div class='col-md-4 col-lg-3 col-xl-2'>
    <div class='product product-5 text-center'>
        <figure class='product-media'>
            
              <a href='product.php?pro_id=$pro_id'>
                <img src='product_images/$pro_image' style='height: 15em;' alt='Product image' class='product-image'>
            
</a>

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
?>
  </div><!-- End .row -->
                            </div><!-- End .products -->

                			
                		</div><!-- End .col-lg-9 -->
                		
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
			
            	</div>
            </section>	    
        </main><!-- End .main -->
<hr class="mb-5">

        <?php include 'footer.php'
        ?>