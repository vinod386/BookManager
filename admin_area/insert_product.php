<!DOCTYPE>
<?php
include("includes/db.php");
?>

<html>
<head>
<title>Insert a new Book</title>
</head>

<body bgcolor="skyblue">
<form action="insert_product.php" method="post" enctype="mulitpart/form-data">
<table align="center" width="600" border="2" bgcolor="orange">

<tr align="center">
<td colspan="7"> <h2> Insert new Post here </h2></td>
</tr>

<tr>
<td align="right"><b>Book Title:<b></td>
<td><input type="text" name="product_title" required/></td>
</tr>

<tr>
	<td align="right"><b>Department of Book:</b></td>
	<td>
	<select name="product_cat">
		<option>Select a Department</option>
		<?php 
		$get_cats = "select * from categories";
		$run_cats = mysqli_query($con,$get_cats);
		while($row_cats=mysqli_fetch_array($run_cats))
		{
		
			$cat_id = $row_cats['cat_id'];
			$cat_title = $row_cats['cat_title'];
		
			echo"<option value='$cat_id'>$cat_title</option>";
		}
?>
</select></td>
</tr>


<tr>
<td align="right"><b>Product Image:</b></td>
<td><input type="file" name="product_image"/></td>
</tr>



<tr>
<td align="right"><b>Product Description:</b></td>
<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
</tr>

<tr>
<td align="right"><b>Product Keywords:</b></td>
<td><input type="text" name="product_keywords" size="50"/></td>
</tr>

<tr align="center">
<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
</tr>
</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['insert_post']))
	{
	//getting text from fields
		$product_cat=$_POST['product_cat'];
		$product_title=$_POST['product_title'];
		$product_desc=$_POST['product_desc'];
		$product_keywords=$_POST['product_keywords'];
			
	
	//getting images
		 $product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];
	
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"admin_are/books_images/$product_image");
		
		
		
		$insert_product = "insert into products (product_cat,product_title,product_image,product_desc,product_keywords) values ('$product_cat','$product_title','$product_image','$product_desc','$product_keywords') ";
		$insert_pro = mysqli_query($con,$insert_product);
		if($insert_pro){
			
			
			echo "<script>alert('Product has been inserted!')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}
	}

?>