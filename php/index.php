<?php
    $title = "Trang chủ";
?>
<?php
    include "header.php";
    
?>

<section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="./pathway.php" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-11 content__container">
                <div class="container__introduce">
                    <div class="introduce__background">
                        <h1 class="introduce__title"><i class="fa-solid fa-code"></i> Let's learn for future</h1>
                        <img class="introduce__img" src="../assets/img/introduce.png">
                    </div>
                </div>
                <div class="content__course mt-5">
                    <h3 id="ds">Danh sách các khóa học</h3>
                    <div class="row mt-3">
                        <h3>Front-end</h3>
                    <?php
                        require '../inc/truyvan.php';

                        if($resultFrontend->num_rows>0)
                            {
                                while($row=$resultFrontend->fetch_assoc())
                                    {   
                                     ?>
                                        <div class="col-3 course__item mt-3 ">
                                            <div class="course__img" style = "background-image: url(../assets/img/<?php echo $row['course_image']?>);"></div>
                                            <div class="course__name"><span><?php echo $row['course_name']?></span></div>
                                            <div class="course__price"><span><?php echo $row['course_price']?> VNĐ</span></div>
                                            <div class="course__button"><a class="course__link__button" href="product_details.php?id=<?php echo $row['course_id']?>">Xem chi tiết</a></div>
                                        </div>
                                        <?php
                                    }
                            }
                    ?>
                    </div>
                    <div class="row mt-5">
                        <h3>Back-end</h3>
                        <?php
                        if($resultBackend->num_rows>0)
                            {
                                while($row=$resultBackend->fetch_assoc())
                                    {   
                                     ?>
                                        <div class="col-3 course__item mt-3 ">
                                            <div class="course__img" style = "background-image: url(../assets/img/<?php echo $row['course_image']?>);"></div>
                                            <div class="course__name"><span><?php echo $row['course_name']?></span></div>
                                            <div class="course__price"><span><?php echo $row['course_price']?> VNĐ</span></div>
                                            <div class="course__button"><a class="course__link__button btn btn-outline-dark" href="product_details.php?id=<?php echo $row['course_id']?>">Xem chi tiết</a></div>
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