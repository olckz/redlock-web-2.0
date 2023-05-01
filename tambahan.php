<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Redlock";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
$temp = mysqli_fetch_assoc($result);
$total = $temp['total'];

echo "Jumlah users dalam Database: $total";
?>