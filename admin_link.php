<html>
<head>

<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="menu.css">

</head>

<body style = "background-color:#030745">

<center>
	<div class = "box">
		
		<img class = "img2" src = "images/manager.png"></image>
		
		<input type = "file" name = "" id = "file" accept = "image/*">
		<label for = "file"> EDIT PIC </label>
		
		<input type = "text" name = "" placeholder = "User Name">
		<input type = "text" name = "" placeholder = "Password">
		<input type = "email" name = "" placeholder = "Email ID">
		<input type = "text" name = "" placeholder = "Address">
		<input type = "text" name = "" placeholder = "Mobile Number">
		
		<button style = "float:left; margin:10px 0 0 18.2%;">Cancel</button>
		<button style = "float:right; margin:10px 18.2% 0 0;">Save </button>
	
	</div>
	

</center>

<br>
<br>

<div class = "middlle">
		<div class = "menu">
		
			
			<li class = "item" id = "systemUser">
				<a href = "#systemUser" class = "button"> System User </a>
				
				<div class = "smenu"> 
				<a href = "admin_viewmanager.php" target="admin_content">Manager</a>
				<a href = "admin_viewsalesman.php" target="admin_content"> Sales Person </a> 
				<a href = "admin_viewsupplier.php" target="admin_content"> Supplier </a> 
				<a href = "admin_viewcustomer.php" target="admin_content"> Customer </a> 
				<a href = "admin_viewadmin.php" target="admin_content"> Admin </a> 
				</div>
			</li>	
			
				
			<li class = "item">
				<a href = "../logout.php" class = "button" target = "back"> Logout </a>
			</li>	
			
				
			


</div>
</div>
</body>


</html>