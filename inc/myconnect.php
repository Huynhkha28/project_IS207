<?php
$conn= new mysqli("localhost","root","","is207");
// Check connection
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $conn->set_charset("utf8")
?>
<!-- <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "is207";
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if ($conn) {
// 	mysqli_query($conn, "SET NAMES 'utf8'");
// } else {
// 	echo "thất bại" . mysqli_connect_error();
// }
// ?> -->