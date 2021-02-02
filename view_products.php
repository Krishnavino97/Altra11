<?php 
	include "connection.php";

	$sql = "SELECT ProductID, product_name, product_details, unit_price, quantity, product_img FROM products";
	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="view_user.css">
<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
</head>

<body style ="background-color:#a7bfc9">

<div class = "box">
	
		<div class = "heading">
		<div class = "grid">

		<div class="select-style">
		<select>
			<option value="all">All</option>
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="25">25</option>
			<option value="50">50</option>
			<option value="100">100</option>
		</select>
		</div>

		<p> PRODUCTS DETAILS </p>

		<form class="search2" action="/action_page.php" style="margin:auto;max-width:300px">
		<input type="text" placeholder="username / ID" name="search2">
		<button type="submit"><i class="fa fa-search"></i></button>
		</form>

		<form align = "right" method = "POST" action = "add_product.php">
		<button type = "submit" class="pdf" name = "add_product"><img class = "icon" src = "images/add.png" /> </button> </a>
		</form>
		<form align = "right" method = "POST" action = "manager_pdf.php">
		<button type = "submit" class="pdf" name = "pdf"><img class = "icon" src = "images/pdf.png" /> PDF </button> </a>
		</form>
	</div>
	</div>
	

<div class ="faqs">

<br>

<?php

	
	if ($result->num_rows > 0) {
    ?>

	<table>
		
			<tr>
			<th>product_name</th>
			<th>product_details</th>
			<th>unit_price</th>
			<th>quantity</th>
			<th>Update</th>
			<th>Delete</th>
			</tr>
	
	<?php
	
    // output data of each row
	if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
		
				$product_name = $row["product_name"];
				$product_details = $row["product_details"];
				$unit_price = $row["unit_price"];
				$quantity = $row["quantity"];
				
		
	?>
		
        <tr>
				
				<td><?php echo $product_name ?></td>
				<td><?php echo $product_details ?></td>
				<td><?php echo $unit_price ?></td>
				<td><?php echo $quantity ?></td>
				<td><a href = "edit_product.php?getID=<?php echo $productID?>">Update</a></td>
				<td><a href = "update_product.php?del=<?php echo $productID?>">Delete</a></td>
		</tr>
	<?php
	}
	?>
    </table>
</div>
	<?php
	}
	?>
	
	<?php
	}
	

	
 else {
    echo "0 results";
}

$conn->close();
?>
</div>	
<br>
<div class = "grid">
<p style = "align:left;font-family:Trebuchet MS, Arial, Helvetica, sans-serif;"> 0 users out of total 10 users </p>
</div>


</div>
</body>
</html>