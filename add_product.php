

<?php

include "add_product2.php";

?>




<html>
<head>

<link rel="stylesheet" type="text/css" href="add_product.css">


</head>

<body style ="background:#a4bebf">

				
<div class="form-container">
<h2><font type = "sans-serif" style ="bold">ADD PRODUCT</font></h2>	
<form action="add_product2.php" method = "POST">
  
<th>  
  
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="product_name">Product Name</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="product_name" name="product_name" placeholder="">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="product_details">Product Details</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="product_details" name="product_details" placeholder="">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="unit_price">Unit Price</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="unit_price" name="unit_price" placeholder="">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="quantity">Quantity</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="quantity" name="quantity" placeholder="">
    </div>
  </div>
  
 
  <br>
  <br>
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="product_img">Image</label>
    </div>
    <div class="col-75">
       <input type = "file" name = "product_img" id = "file" accept = "image/*">
    </div>
  </div>
  
  
<br>
 
  <div class="col-75" align = "center">

    <input type="submit" name = "add" value="SUBMIT">
	&nbsp &nbsp &nbsp &nbsp
	<input type="reset" name = "reset" value="CANCEL">
</div>

  </form>
</div>
</div>




			

		
	
		


</body>


</html>