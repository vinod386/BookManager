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
<li><input type ="text" class="form-control" placeholder="Search this site for book..." id="searchInput">
					
					<button type="submit" class = "btn btn-default"><span class="glyphicon glyphicon-search"</span></button>
					</li>
</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a Product"/>
<input type="submit" name="search" value="Search"/>
</form>
</div>
<form class="navbar-form pull-left">
					<input type ="text" class="form-control" placeholder="Search this site for book..." id="searchInput">
					
					<button type="submit" class = "btn btn-default"><span class="glyphicon glyphicon-search"</span></button>
				</form>
</div>
<!--NAvigation bar ends here-->

<!--Content Wrapper starts here-->
<div class="content_wrapper">
<div id="sidebar">
<div id="sidebar_title">Categories</div>

<ul id="cats">
<?php getCats();?>
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
	<?php getCatPro();?>
	<?php //getPro(); ?>

	<?php //getBrandpro() ; ?>
<	/div>
</div>
<!--Content Wrapper ends here-->

<div id="footer">
<h2 style="text-align:center; padding-top:30px;">&copy;2015 by bumhyapi</h2>
</div>




<!--Main Container ends here-->
</body>
</html>