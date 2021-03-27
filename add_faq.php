



<?php

	$question = "";
	$answer = "";
	$no = 0;

	include "connection.php";
	
	
	if(isset($_POST['add'])) //check form is clicked on submit or not
	{
		if(empty($_POST['question']) || empty($_POST['answer']))
		{
			echo "Fill all the information!";
		}
		
		else
		{
		//get variables from the form
			$question = $_POST['question'];
			$answer = $_POST['answer'];
			
		//sql query
			$sql = "INSERT INTO faq(question, answer) VALUES ( '$question' , '$answer' )";
			$result = mysqli_query($conn,$sql);
		
			
			if($result) 
			{
				header("location:faq.php");
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>	