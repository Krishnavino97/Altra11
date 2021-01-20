
<?php

	$fname = "";
	$lname = "";
	$email = "";
	$subject = "";
	$no = 0;

	include "connection.php";
	
	
	if(isset($_POST['add'])) //check form is clicked on submit or not
	{
		if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['subject']))
		{
			echo "Fill the all information!";
		}
		
		else
		{
		//get variables from the form
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			
			
		//sql query
			$sql = "INSERT INTO feedback(fname, lname, email, subject) VALUES ( '$fname' , '$lname' , '$email' , '$subject' )";
			$result = mysqli_query($conn,$sql);
		
			
			if($result) 
			{
				header("location:feedback.php");
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>	