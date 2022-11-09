<?php
require 'myconnect.php';
//lay danh sach san pham khuyen mai
$sql_frontend="SELECT * FROM `courses` where course_type = 'front-end'";
$resultFrontend = $conn->query($sql_frontend);
$sql_backend="SELECT * FROM `courses` where course_type = 'back-end'";
$resultBackend = $conn->query($sql_backend);
//lay danh sach san pham mới nhất
$conn->close();
?>