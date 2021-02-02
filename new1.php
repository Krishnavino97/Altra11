
<?php

include "add_product2.php";

?>




<html>
<head>

<link rel="stylesheet" type="text/css" href="add_product.css">


</head>

<body>

		


	
		<div class = "dashboard_container2">
		
		<br>
		
		
		
		
		
	
	<div class="form-container">
  <form action="/contactus_msg.php">
  
  
  <div class="row-form">
  
    <div class="col-25">
      <label class = "label-form" for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="fname" name="fname" placeholder="Your name..">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="lname" name="lname" placeholder="Your last name..">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="email">E-mail</label>
    </div>
    <div class="col-75">
      <input class = "input-form" type="text" id="email" name="email" placeholder="Your E-mail..">
    </div>
  </div>
  
  <div class="row-form">
    <div class="col-25">
      <label class = "label-form" for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Give your feedback here...."></textarea>
    </div>
  </div>
  <br>
  <br>
  
  <div class="row-form">
    <input type="submit" value="Submit"> &nbsp &nbsp
	<input type="reset" value="Cancel">
  </div>
  </form>
</div>
<br>
<br>
	
</div>	

</body>

	
</div>

		
	
		


</body>


</html>