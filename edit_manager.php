<?php 
	include "connection.php";
	

	$userID = $_GET['getID'];
				
	$sql = "SELECT ID, username, address, email, mobile FROM manager WHERE ID='".$userID."' ";
	$result = mysqli_query($conn,$sql);
	
	 while($row = mysqli_fetch_assoc($result))
		 {
				$userID = $row['ID'];
				$username = $row['username'];
				$email = $row['address'];
				$address = $row['email'];
				$mobile = $row['mobile'];
		 }

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
<form action = "update_manager.php?ID=<?php echo $userID ?>" method = "POST">
  
    
	<div class="col-75">
      <input class = "input-form" type="text" id="username" name="username" placeholder="User Name" value="<?php echo $username ?>">
    </div>
  
	<div class="col-75">
      <input class = "input-form" type="text" id="email" name="email" placeholder="E-mail" value="<?php echo $email ?>">
    </div>
  
	<div class="col-75">
      <input class = "input-form" type="text" id="address" name="address" placeholder="Address" value="<?php echo $address ?>">
    </div>
	
	<div class="col-75">
      <input class = "input-form" type="text" id="mobile" name="mobile" placeholder="Phone Number" value="<?php echo $mobile ?>">
	</div>

	
	<div class="col-75" align = "center">

    <input type="submit" name = "update" value="UPDATE">
	&nbsp &nbsp &nbsp &nbsp
	<input type="reset" name = "reset" value="CANCEL">
	</div>
	
  	
</form>
&nbsp &nbsp &nbsp
<img src = "images/add_user.png" height = "400px" width = "400px"></img>
</div>
</div>
</div>



</body>
</html>
