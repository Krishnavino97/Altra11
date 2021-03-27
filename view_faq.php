

<?php

include "add_faq.php";
include "connection.php";

?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="faq.css">
</head>
<body style = "background-color:#f2f2f2; margin:10px 10px 10px 10px;">

<?php 
	include "connection.php";

	$sql = "SELECT no, question, answer FROM faq";
	$result = $conn->query($sql);

?>



<?php

	
	if ($result->num_rows > 0) {
    ?>
<table>
<th width:80%>
<div class="box">
	<p class="heading">FAQs</p>
	<div class="faqs">
	<?php
	
    // output data of each row
	if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
		
				$no = $row['no'];
				$question = $row['question'];
				$answer = $row['answer'];
	?>
	
	   <details>
	   <summary> <?php echo $question ?> </summary>
       <p class="text"> <?php echo $answer ?> </p>
	   <a href = "edit_faq.php?getID=<?php echo $no?>"><button class= "button_faq"> Update</button></a>
	   &nbsp &nbsp
	   <a href = "delete_faq.php?del=<?php echo $no?>"><button class= "button_faq"> Delete</button></a>
	   </details>
	   <?php
	}
	?>
	  
	</div>
	</div>
	
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
</th>
<th>
<div style = "margin-top:60px;">
<img src = "images/faq_user.png" height = "430px" width = "400px"></img>
</div>	
</th>
</table>
</body>
</html>
