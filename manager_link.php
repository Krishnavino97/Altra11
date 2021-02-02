<html>
<head>

<link rel="stylesheet" type="text/css" href="dashboard_outline.css">

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
				<a href = "dashboard.html" class = "button" target="manager_content"> Dashboard </a>
		</li>
			
			<li class = "item" id = "systemUser">
				<a href = "#systemUser" class = "button"> System User </a>
				
				<div class = "smenu"> 
				<a href="manager_viewmanager.php" target="manager_content">Manager</a>
				<a href = "manager_viewsalesman.php" target="manager_content"> Sales Person </a> 
				<a href = "manager_viewsupplier.php" target="manager_content"> Supplier </a> 
				<a href = "manager_viewcustomer.php" target="manager_content"> Customer </a> 
				<a href = "manager_viewadmin.php" target="manager_content"> Admin </a> 
				</div>
			</li>	
			
			<li class = "item" id = "orders">
				<a href = "#orders" class = "button"> Orders </a>
				
				<div class = "smenu"> 
				<a href = "pending_orders.php" target="manager_content"> New Orders </a> 
				<a href = "assigned.php" target="manager_content"> Pending Orders </a> 
				<a href = "order_tracking.html" target="manager_content"> Order Status </a> 
				<a href = "sales_history.php" target="manager_content"> Sales History </a> 
				</div>
			</li>	
			
			
			
			
			<li class = "item" id = "products">
				<a href = "#products" class = "button"> Products </a>
	
				<div class = "smenu"> 
				<a href = "view_products.php" target="manager_content"> View Products </a> 
				<a href = "add_product.php" target="manager_content"> Add products </a> 
				</div>
			</li>	
				
			
			<li class = "item" id = "purchase">
				<a href = "#purchase" class = "button"> Purchases </a>
				
				<div class = "smenu"> 
				<a href="manager_newpurchase.html" target="manager_content">New Purchases</a>
				<a href = "supplier_sales.html" target="manager_content"> Old Purchases </a> 
				</div>
			</li>	
			
			<li class = "item">
				<a href = "view_feedback.php" class = "button" target="manager_content"> Feedback & messages </a>
			</li>			

			<li class = "item">
				<a href = "posts2.php" class = "button" target="manager_content"> Posts </a>
			</li>	
			
			<li class = "item">
				<a href = "faq.php" class = "button" target="manager_content"> FAQs </a>
			</li>
			

			<li class = "item">
				<a href = "../logout.php" class = "button" target = "back"> Logout </a>
			</li>	
			
</div>
</div>


</body>


</html>