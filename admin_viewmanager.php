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

$sql = "SELECT id, username, address, email, mobile FROM manager";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>username</th><th>address</th><th>email</th><th>mobile</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["address"]. "</td><td>" . $row["email"]. "</td><td>" . $row["mobile"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>