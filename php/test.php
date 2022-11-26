<?php
include "../inc/myconnect.php";
$sql_GetCourse= "SELECT c.course_id, c.course_name, cv.video_link, cv.video_name, cv.video_time, cv.video_id FROM `courses` AS c JOIN `course_video` AS cv ON c.course_id=cv.course_id WHERE c.course_id= 1
";
$resultGetCourse = $conn->query($sql_GetCourse);
$course_name = $resultGetCourse->fetch_assoc();
echo $course_name['video_id'];

$row_VideoList= $resultGetCourse->fetch_assoc();
echo $row_VideoList['video_id'];