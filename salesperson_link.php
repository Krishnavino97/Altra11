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
		
			<li class = "item">  
				<a href = "sales_req.html" class = "button" target="salesperson_content"> Delivery Requests </a>
			</li>
			
			<li class = "item">  
				<a href = "sales_pending.php" class = "button" target="salesperson_content"> Pending delivery </a>
			</li>	

			<li class = "item">  
				<a href = "sales_status.html" class = "button" target="salesperson_content"> Delivery Status </a>
			</li>
			
			<li class = "item">  
				<a href = "sales_history.html" class = "button" target="salesperson_content"> Delivery History </a>
			</li>	

			<li class = "item">
				<a href = "../logout.php" class = "button" target = "back"> Logout </a>
			</li>	
			
</div>
</div>
</body>


</html>