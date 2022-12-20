<?php

    $title = "Chi tiết khóa học";
    $css_link = "details.css";
?>
<?php
    include "header.php";
?>
        <section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="../html/pathway.html" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="./blog.php" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>
<?php
    require "../inc/myconnect.php";
    $id = $_GET["id"];
   $query="SELECT course_id, course_name, course_describe, course_price, course_image
    FROM `courses`
    WHERE `course_id` = $id";
   $result = $conn->query($query);
    $row = $result->fetch_assoc();
?>
            <div class="col-11 content__container__product row">
                <div class="course__product col-8">
                    <div class="course__title d-flex justify-content-center mt-3">
                        <h1><?php echo $row['course_name']?></h1>
                    </div>
                    <div class="course__describe mt-4">
                            <span class="describe__title">Mô tả khóa học</span>
                            <div class="course__para mt-2"><p><?php echo $row['course_describe']?></p></div>
                            <span class="describe__title mt-4">Tóm tắt kiến thức</span>
                            <ul class="summary__list">
                            <?php
                            $sql_summary = "SELECT summary, summary_id from course_summary where course_id = $id";
                            $resultSummary = $conn->query($sql_summary);
                        if($resultSummary->num_rows>0)
                            {
                                while($row_summary=$resultSummary->fetch_assoc())
                                    {   
                                     ?>
                                      <li class="course_para mt-3 ms-3"><i class="fa-sharp fa-solid fa-right-long me-3"></i><?php echo $row_summary['summary']?></li>  
        <?php
    }
}
?>
                            </ul>
                    </div>
                    <div class="course__introduce__video mt-3">
                        <div class="describe__title d-flex justify-content-between">
                            <span >Nội dung khóa học</span>
                        </div>
                        <?php
                        $sql_describe = " SELECT * FROM course_video WHERE course_id = $id";
                        $resultDescribe = $conn->query($sql_describe);
                        if($resultDescribe->num_rows>0)
                        {
                            $number= 1;
                            while($row_describe=$resultDescribe->fetch_assoc())
                                {   
                                 ?>
                                  <div class="row ms-4">
                            <div class="video__content col-12 d-flex justify-content-between mt-1">
                                <div class="video__head d-flex">
                                    <div class="video__id me-2"><span><i class="fa-solid fa-code me-2"></i><?php echo $number?>.</span></div>
                                    <div class="video__name"><span><?php echo $row_describe['video_name']?></span></div>
                                </div>
                                <div class="video__time"><span ><?php echo $row_describe['video_time']?></span></div>
                            </div>
                        </div>
    <?php
    $number++;
}
}
?>    
                    </div>

                </div>
                <div class="course__interface col-4 mt-4">
                    <div class="interface__image" style= "background-image: url(../assets/img/<?php echo $row['course_image']?>); background-repeat: no-repeat;background-size: contain;background-position: center;border-radius: 22px;padding-top: 57%;"></div>
                    <div class="interface__price d-flex justify-content-center mt-3">
                        <h3><?php echo $row['course_price']?> VNĐ</h3>
                    </div>
                    <div class="d-flex justify-content-center mt-2"><a href="payment.php?id=<?php echo $id?>" class="interface__button" >Đăng ký mua ngay</a></div>                    
                </div>
                <div class="course__recommend mt-3">
                        <span class="describe__title">Những khóa học khác</span>
                        <div class="row">
                        <?php
                             $sql_remaining = "SELECT course_id, course_name, course_price, course_image FROM `courses`  WHERE course_id NOT IN (SELECT course_id FROM `courses` WHERE course_id = $id union SELECT `course_id` from `purchased_course` where user_name='$_SESSION[name]')";       
                            $resultRemaining =  $conn->query($sql_remaining);
                            if($resultRemaining->num_rows>0)
                            {
                                while($row_Remaining=$resultRemaining->fetch_assoc())
                                    {   
                                     ?>
                                <div class="col-3 course__item mt-3 ">
                                            <div class="course__img" style = "background-image: url(../assets/img/<?php echo $row_Remaining['course_image']?>);"></div>
                                            <div class="course__name"><span><?php echo $row_Remaining['course_name']?></span></div>
                                            <div class="course__price"><span><?php echo $row_Remaining['course_price']?> VNĐ</span></div>
                                            <div class="course__button"><a class="course__link__button" href="productdetails.php?id=<?php echo $row_Remaining['course_id']?>">Xem chi tiết</a></div>
                                </div>         
        <?php
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