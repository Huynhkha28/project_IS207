<?php
require 'myconnect.php';
$sql_frontend="SELECT * FROM `courses` where course_type = 'front-end'";
$resultFrontend = $conn->query($sql_frontend);
$sql_backend="SELECT * FROM `courses` where course_type = 'back-end'";
$resultBackend = $conn->query($sql_backend);
$sql_remaining = "SELECT course_name, course_price, course_image, course_type FROM `courses` WHERE course_id NOT IN (SELECT course_id FROM `courses` WHERE course_id = 1);
";
$conn->close();
?>