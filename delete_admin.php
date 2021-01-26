<?php

	require_once("connection.php");

	if(isset($_GET['del']))
	{
		$user_ID = $_GET['del'];
		
		$sql = "DELETE * FROM admin WHERE ID = '".$user_ID."'  ";
		$result = mysqli_query($conn,$sql);
		
		
		if($result)
		{
			header("location:admin_viewadmin.php");
		}
		else
		{
			echo 'Please check your query';
		}
		
	}
	
?>
	