

<?php

	$username = "";
	$email = "";
	$address = "";
	$mobile = "";
	$password = "";
	$id = "";

	include "connection.php";
	
	
	if(isset($_POST['add'])) //check form is clicked on submit or not
	{
		if(empty($_POST['username']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['password']))
		{
			echo "Fill the all information!";
		}
		
		else
		{
		//get variables from the form
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['address'];
			$address = $_POST['email'];
			$mobile = $_POST['mobile'];
			
			
		//sql query
			$sql = "INSERT INTO admin_tbl(username, password, address, email, mobile) VALUES ( '$username' , '$password', '$address' , '$email' , '$mobile' )";
			$result = mysqli_query($conn,$sql);
		
			
			if($result) 
			{
				header("location:admin_viewadmin.php");
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>	