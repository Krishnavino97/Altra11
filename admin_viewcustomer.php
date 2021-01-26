<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body style = "background-color:#a7bfc9">
<br>
<br>
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

$sql = "SELECT name, Uname, Cnum, email FROM customer_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>name</th><th>Uname</th><th>Cnum</th><th>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["Uname"]. "</td><td>" . $row["Cnum"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>