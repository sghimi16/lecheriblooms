<?php include 'topnav.php'; ?>
<style>
#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 80%;
  background: #FFF;
  
  
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}

#top .logo{
  //float: left;
	height: 60px;
	width: 60px;
	background: url(logo.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}

  
  
}
</style>
<?php
//require "config/constants.php";
include_once("db.php");
session_start();
$sql = "SELECT * FROM user_info WHERE user_id = '-1'";
		$run_query = mysqli_query($con,$sql);
		$row = mysqli_num_rows($run_query);
        $email= $row["email"];
        echo $email;
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
}

$user_id = $_SESSION["uid"];
function secure_random_string($length) {
    $random_string = '';
    for($i = 0; $i < $length; $i++) {
        $number = random_int(0, 10);
        $character = base_convert($number, 7, 30);
        $random_string .= $character;
    }
 
    return $random_string;
}

// Output: 07y1s10prb8
$code= secure_random_string(5);

		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '-1'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			$trx_id ="4444"; 
			$p_st="Payment On Delivery";
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status)
				VALUES ('$user_id','".$product_id[$i]."','".$qty[$i]."','$code','$p_st')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = '-1'";
			if (mysqli_query($con,$sql)) {
				echo "
<div id='invoice-POS'>
      <center id='top'>
            <div class='logo'></div>
            <div class='info'> 
            <h2>Lecheri Blooms</h2>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->
<div id='mid'>
      <div class='info'>
        <h2>Contact Info</h2>
        <p> 
            Address : </br>
            Email   : </br>
            Phone   : </br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
        <div class='panel-body'>   
											<h1>Status </h1>
                                            <h1>Hello, ".$_SESSION['name']." </h1>
											<hr/>
											You Have successfully places your order. order Code <b class='btn btn-success'>".$code."</b> 
                                            payment status: ".$p_st." Order will Be delivered within 24 Hours. Thank you<br/>
											You can continue your Shopping <br/></p>
											<a href='index.php' class='btn btn-success btn-lg'>Continue Shopping</a>
										</div>
</div>

				
				";
			}}
				?>
   