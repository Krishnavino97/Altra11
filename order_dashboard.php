


<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title> order_dashboard </title>
	<link rel = "stylesheet" href = "manager_dashboard.css">
	<script src="https://kit.fontawesome.com/ef611ec40b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">	

</head>

<body>

	<div class = "dashboard_container">
	
		<ul>
			<li>TODAY</li>
			<li>MONTH </li>
			<li>AVG/DAY</li>
			<li>REV/MONTH</li>
			
		</ul>
	</div>
	
	<div class = "dashboard_container">
	
	<h2> Orders </h2>
	
	
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
	
	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
		<input type="text" placeholder="username / ID" name="search2">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>

	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountdb";

// Create connection
$conn = mysqli_connect ("localhost","root","","accountdb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT order_ID, Customer_ID, customer_name, date&time, payment_mtd, fulfilment_status FROM order";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table>
			<tr>
			<th>Order_ID</th>
			<th>Customer_ID</th>
			<th>Customer</th>
			<th>Date&time</th>
			<th>Payment method</th>
			<th>Fulfilment  Status</th>
			</tr>";
    // output data of each row 
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>" . $row["order_ID"]. "</td>
				<td>" . $row["customer_ID"]. "</td>
				<td>" . $row["customer_name"]. "</td>
				<td>" . $row["date&time"]. "</td>
				<td>" . $row["payment_mtd"]. "</td>
				<td>" . $row["fulfilment_status"]. " </td>
				</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


echo "Showing 0 to 0 of 0 orders" ;


$conn->close();


?>


<a href="#" class="previous round" align = "right">&#8249;</a>
<a href="#" class="next round" align = "right">&#8250;</a>


</div>




</body>
</html>