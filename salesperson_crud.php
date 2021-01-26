

<?php

include "add_salesperson.php";

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="CSS.css">
</head>


<body style = "background-color:#a6d2f5">
<div class = "dashboard_container">
</div>

<div class = "dashboard_container">

	
		
<div class="form-container">
<h2><font type = "sans-serif" style ="bold"><center> ADD USER </center> </font></h2>
<div class="row-form">
<form action = "add_salesperson.php" method = "POST">
  
    
	<div class="col-75">
      <input class = "input-form" type="text" id="username" name="username" placeholder="User Name">
    </div>
  
	<div class="col-75">
      <input class = "input-form" type="text" id="email" name="email" placeholder="E-mail">
    </div>
  
	<div class="col-75">
      <input class = "input-form" type="text" id="address" name="address" placeholder="Address">
    </div>
	
	<div class="col-75">
      <input class = "input-form" type="text" id="mobile" name="mobile" placeholder="Phone Number">
	</div>

	
	<div class="col-75" align = "center">

    <input type="submit" name = "add" value="SUBMIT">
	&nbsp &nbsp &nbsp &nbsp
	<input type="reset" name = "reset" value="CANCEL">
	</div>
	
  	
</form>
&nbsp &nbsp &nbsp
<img src = "images/add_user.png" height = "400px" width = "400px"></img>
</div>
</div>
</div>
<div class = "dashboard_container">
</div>


</body>
</html>
