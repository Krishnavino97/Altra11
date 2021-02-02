<?php 
	include "connection.php";
	include "admin_pdf.php";

	$sql = "SELECT ID, username, address, email, mobile FROM admin";
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

		<p> ADMIN DETAILS </p>

		<form class="search2" action="/action_page.php" style="margin:auto;max-width:300px">
		<input type="text" placeholder="username / ID" name="search2">
		<button type="submit"><i class="fa fa-search"></i></button>
		</form>

		<form align = "right" method = "POST" action = "admin_pdf.php">
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
			<th>ID</th>
			<th>username</th>
			<th>address</th>
			<th>email</th>
			<th>mobile</th>
			</tr>
			
	
	<?php
	
    // output data of each row
	if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
		
				$ID = $row['ID'];
				$username = $row['username'];
				$email = $row['address'];
				$address = $row['email'];
				$mobile = $row['mobile'];
		
	?>
		
        <tr>
				<td><?php echo $ID ?></td>
				<td><?php echo $username ?></td>
				<td><?php echo $email ?></td>
				<td><?php echo $address ?></td>
				<td><?php echo $mobile ?></td>
				
		</tr>
	
		
	<?php
	}
	?>
    </table>

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
<p style = "align:left;font-family:Trebuchet MS, Arial, Helvetica, sans-serif;"> 3 users out of total 10 users </p>
</div>


</div>
</body>
</html>