
<?php

	$productID = "0";
	$product_name = "";
	$product_details = "";
	$unit_price = "";
	$quantity = "";
	$product_img = "";

	include "connection.php";
	
	
	if(isset($_POST['add'])) //check form is clicked on submit or not
	{
		if(empty($_POST['product_name']) || empty($_POST['product_details']) || empty($_POST['unit_price']) || empty($_POST['quantity']) || empty($_POST['product_img']))
		{
			echo "Fill the all information!";
		}
		else
		{
		//get variables from the form

			$product_name = $_POST['product_name'];
			$product_details = $_POST['product_details'];
			$unit_price = $_POST['unit_price'];
			$quantity = $_POST['quantity'];
			$product_img = $_POST['product_img'];
			
			
		//sql query
			$sql = "INSERT INTO products( product_name, product_details, unit_price, quantity, product_img) 
					VALUES ( '$product_name' , '$product_details' , '$unit_price' , '$quantity' , '$product_img' )";
			$result = mysqli_query($conn,$sql);
		
			
			if($result) 
			{
				
				header("location:add_product.php");
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>	