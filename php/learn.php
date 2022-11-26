<?php
    $title = 'Trang học tập';
    $css_link = 'learn.css';

?>
<?php
    include "header.php";
    include "../inc/myconnect.php";
?>
<?php
    if(!$_SESSION['logged_in'])
    {
        header("Location: login.php");
        exit;
    }
    if(!$_SESSION['name'])
    {
        header("Location: login.php");
        exit;
    }
    $course_id = $_GET['course_id'];
    $videoid = $_GET['videoid'];
    $sql_GetCourse= "SELECT c.course_id, c.course_name, cv.video_link, cv.video_name, cv.video_time, cv.video_id FROM `courses` AS c JOIN `course_video` AS cv ON c.course_id=cv.course_id WHERE c.course_id= $course_id and cv.video_id= $videoid
    ";
    $resultGetCourse = $conn->query($sql_GetCourse);
    $course_name = $resultGetCourse->fetch_assoc();
?>
    <section class="content mb-5">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="../html/pathway.html" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="./blog.php" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-11 content__container d-flex">
                <div class="learn__course col-8 mt-3">
                    <div class="learn__title d-flex justify-content-center mb-3">
                        <h2><?php echo $course_name['course_name'];?></h2>
                    </div>
                    <div class="learn__course__content">
                        <div class="learn__course__video">
                            <iframe width="100%" height="100%" src="<?php echo $course_name['video_link'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="learn__course__title">
                            <h3><?php echo $course_name['video_name'];?></h3>
                        </div>
                    </div>
                </div>
                <div class="learn__course__list col-4 mt-3 ps-2">
                    <div class="learn__title d-flex justify-content-center mb-3">
                        <h2>Danh sách bài học</h2>
                    </div>
                    <div class="list__course__content">
                        <?php
                            $sql_GetVideoList= "SELECT c.course_id, c.course_name, cv.video_name, cv.video_time, cv.video_id FROM `courses` AS c JOIN `course_video` AS cv ON c.course_id=cv.course_id WHERE c.course_id= $course_id";
                            $resultGetVideoList = $conn->query($sql_GetVideoList);
                            if($resultGetVideoList->num_rows>0)
                            {
                                $number = 1;
                                while($row_VideoList= $resultGetVideoList->fetch_assoc())
                                    {
                        ?>
                                    <div class="border">
                                    <a class="list__course__item pb-3" href="learn.php?course_id=<?php echo $row_VideoList['course_id']?>&videoid=<?php echo $row_VideoList['video_id']?>">
                                        <div class="item__word">
                                        <span><?php echo $number?>. </span>
                                        <span><?php echo $row_VideoList['video_name']?></span>
                                        </div>
                                        <span class="item__time mt-2 d-block"><?php echo $row_VideoList['video_time']?></span>
                                    </a>
                                    </div>                       
                                    <?php
                                        $number++;
                                    }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
    </section>
<?php
    include "footer.php";
?>