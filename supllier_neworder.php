<?php 
	include "connection.php";

	$sql = "SELECT id, Date&Time, supplier_id, product_list FROM purchase_list";
	$result = $conn->query($sql);

?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="purchase_supplier.css">
<link rel="stylesheet" type="text/css" href="add_product.css">

</head>

<body>

		
<div class = "chart1">

	<div class = "bottom"> 
	Send Quotation
	</div>
	
	<form>
	
	<div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="product_img">Product List</label>
    </div>
    <div class="col-75">
       <input type = "file" name = "product_img" id = "file" accept = "application/pdf">
	   <br>
	   <br>
	   <embed src="images/file.pdf" type="application/pdf" width="100%" height="250px" />
    </div>
	</div>
	<br>
	<br>
	
	<div class="col-75" align = "center">

    <input type="submit" name = "send" value="SEND">
	&nbsp &nbsp &nbsp &nbsp
	<input type="reset" name = "reset" value="CANCEL">
	</div>
	
	</form>
	<br>
	<br>
	<br>

</div>


<?php
