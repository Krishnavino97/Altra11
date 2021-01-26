<?php 
	include "connection.php";

	$sql = "SELECT id, username, address, email, mobile FROM admin_tbl";
	$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="CSS.css">
<link rel="stylesheet" type="text/css" href="admin_content.css">


<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body style ="background-color:#a7bfc9">



<br>
<br>

<h1 color = "#3e44f0" type = "sans-serif" > Admin </h1>
<div class ="dashboard_container">
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


<form align = "right">
    <a href = "admin_crud.php">  <input type="button" class = "menu-button button1" name = "admin_crud"  value="ADD" /> </a>
</form>



<br><br>

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
			<th>update</th>
			<th>delete</th>
			</tr>
			
	
	<?php
	
    // output data of each row
	if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
		
				$id = $row['id'];
				$username = $row['username'];
				$email = $row['address'];
				$address = $row['email'];
				$mobile = $row['mobile'];
		
	?>
		
        <tr>
				<td><?php echo $id ?></td>
				<td><?php echo $username ?></td>
				<td><?php echo $email ?></td>
				<td><?php echo $address ?></td>
				<td><?php echo $mobile ?></td>
				<td><a href = "edit_admin.php?getID=<?php echo $id?>"><button>Update</button></a></td>
				<td><a href = "delete_admin.php?del=<?php echo $id?>"><button>Delete</button></a></td>
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
	
/*	
	if(isset($POST_['update']))
	{
		header("location:edit_admin.php");
	}
	
*/	
	
 else {
    echo "0 results";
}

$conn->close();
?>

<a href="#" class="previous round" align = "right">&#8249;</a>
<a href="#" class="next round" align = "right">&#8250;</a>

</div>	

</div>
</body>
</html>