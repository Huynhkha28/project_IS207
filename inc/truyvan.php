<?php
    require 'myconnect.php';
$sql_frontend="SELECT * FROM `courses` where course_type = 'front-end'";
$resultFrontend = $conn->query($sql_frontend);
$sql_backend="SELECT * FROM `courses` where course_type = 'back-end'";
$resultBackend = $conn->query($sql_backend);
$sql_remaining = "SELECT course_name, course_price, course_image, course_type FROM `courses` WHERE course_id NOT IN (SELECT course_id FROM `courses` WHERE course_id = 1);
";
if(isset($_SESSION['name'])){
    $sql_purchased = "SELECT p.course_id, p.user_id from `purchased_course`as p join `courses` as c on c.course_id = p.course_id WHERE  p.user_name = '$_SESSION[name]' and course_type ='front-end'";
    $result_purchased = $conn->query($sql_purchased);
    $sql_purchased_backend = "SELECT p.course_id, p.user_id from `purchased_course`as p join `courses` as c on c.course_id = p.course_id WHERE  p.user_name = '$_SESSION[name]' and course_type ='back-end'";
    $result_purchased_backend = $conn->query($sql_purchased_backend);
}
$conn->close();
?>