<!DOCTYPE html>
<html>
<head>
	<title>Redlock Database</title>
	<style>
		table, th, td {
  		border: 1px solid black;
 		border-collapse: collapse;
		}
		th {
			background-color: #000000;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Redlock Database</h1>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Redlock";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);
		
    	echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
    	while($row = mysqli_fetch_assoc($result)) {
        	echo "<tr><td>".$row["ID"]."</td><td>".$row["Nama"]."</td><td>".$row["Alamat"]."</td><td>".$row["Jabatan"]."</td></tr>";
    	}
    		echo "</table>";
        $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
        $temp = mysqli_fetch_assoc($result);
        $total = $temp['total'];
		mysqli_close($conn);
		?>
</body>
</html>
