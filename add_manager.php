<?php

	$username = "";
	$email = "";
	$address = "";
	$mobile = "";
	$id = 0;

	include "connection.php";
	
	
	if(isset($_POST['add'])) //check form is clicked on submit or not
	{
		if(empty($_POST['username']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['mobile']))
		{
			echo "Fill the all information!";
		}
		
		else
		{
		//get variables from the form
			$username = $_POST['username'];
			$email = $_POST['address'];
			$address = $_POST['email'];
			$mobile = $_POST['mobile'];
			
			
		//sql query
			$sql = "INSERT INTO manager(username, address, email, mobile) VALUES ( '$username' , '$address' , '$email' , '$mobile' )";
			$result = mysqli_query($conn,$sql);
		
			
			if($result) 
			{
				header("location:manager_viewmanager.php");
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>	