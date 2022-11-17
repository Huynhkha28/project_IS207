<?php
    $title ="Khóa học của tôi";
    $css_link ="mycourse.css"
?>
<?php
    include "header.php";
?>
<?php
    if(!$_SESSION['logged_in'])
    {
        header("Location: login.php");
        exit;
    }
?>
<section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="../html/pathway.html" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-11 content__container">
            </div>
</section>

<?php
    include "footer.php";
?>