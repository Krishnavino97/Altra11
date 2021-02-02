
<?php

include "add_message.php";

?>

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 10px 14px;
  margin: 17px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 14px;
  margin: 25px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #D3D3D3;
  padding: 10px;
}
</style>
<body>


<div>
<h3><center>Give Your message!</center></h3>
  <form action="add_message.php" method = "POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">
	
	<label for="lname">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
	
	<label for="lname">subject</label>
    <input type="text" id="subject" name="subject" placeholder="Give your message here..">



   
  
    <input type="submit" value="Submit" name="add">
  </form>
</div>

</body>
</html>