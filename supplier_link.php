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
				<a href = "sup_dash.php" class = "button" target="supplier_content"> Products </a>
		</li>
			
			
			<li class = "item" id = "order">
				<a href = "#order" class = "button"> Orders </a>
				
				<div class = "smenu"> 
				<a href="supplier_neworder.html" target="supplier_content">New Orders</a>
				<a href = "supplier_sales.html" target="supplier_content"> Sales </a> 
				</div>
			</li>	

			<li class = "item">
				<a href = "feedback.php" class = "button" target="supplier_content"> Feedback </a>
			</li>	

			<li class = "item">
				<a href = "message.php" class = "button" target="supplier_content"> Message </a>
			</li>	

			<li class = "item">
				<a href = "posts.html" class = "button" target="supplier_content"> Posts </a>
			</li>	
			
			<li class = "item">
				<a href = "faq_userview.php" class = "button" target="supplier_content"> FAQs </a>
			</li>
			
			<li class = "item">
				<a href = "../logout.php" class = "button" target = "back"> Logout </a>
			</li>		
			
</div>
</div>


</body>


</html>