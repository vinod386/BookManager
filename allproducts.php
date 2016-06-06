<!DOCTYPE>
<?php

include("functions/functions.php");

?>

<html>
<head>
<title>Online Shopping</title>

<link rel="stylesheet" href="styles/style.css" media="all"/>

</head>

<body>
<!--Main Container starts here-->
<div class="main_wrapper">


<!--Header starts here-->
<div class="header_wrapper">

<img id="logo" src="images/logo.gif" />
<img id="banner" src="images/banner.jpg"/>

</div>
<!--Header ends here-->


<!--Navigation Bar starts here-->
<div class="menubar">


<ul id="menu">
<li><a href="#">Home</a></li>
<li><a href="#">All Products</a></li>
<li><a href="#">My Account</a></li>
<li><a href="#">Sign Up</a></li>
<li><a href="#">Shopping Cart</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a Product"/>
<input type="submit" name="search" value="Search"/>
</form>
</div>

</div>
<!--NAvigation bar ends here-->

<!--Content Wrapper starts here-->
<div class="content_wrapper">
<div id="sidebar">
<div id="sidebar_title">Categories</div>

<ul id="cats">
<?php getCats1();?>
</ul>

<div id="sidebar_title">Brands</div>
<ul id="cats">
<?php getBrands();?>
</ul>
</div>

<div id="content_area">
<div id ="shopping_cart">
<span style="float:right; font-size:18px;padding:5px; line-height:40px">


Welcome Guest!<b style="color:yellow">Shopping Cart:</b> Total items:Total Price: <a href="cart.php">Go to Cart</a>


</span>


</div>

	<div id="products_box">
	<?php
	
	$get_pro = "select * from products ";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_image=$row_pro['product_image'];
		
		echo"
		
				<div id= 'single_product'>
				
				<h3>$pro_title</h3>
				<img src='admin_area/product_images/$pro_image' width='180' height='180' />
				
				//<p><b> $pro_price </b></p>
				
				<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
				
				<a href='index.php?pro_id=$pro_id'><button style='float:right'>Cart</button></a>
				
				</div>
				";
	
		}
	?>

<	/div>
</div>
<!--Content Wrapper ends here-->

<div id="footer">
<h2 style="text-align:center; padding-top:30px;">&copy;2015 by bumhyapi</h2>
</div>




<!--Main Container ends here-->
</body>
</html>