<?php
    $title="Thanh toán";
    $css_link = "payment.css";
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
    else
    {
        include "../inc/myconnect.php";
        $userName = $_SESSION['name'];
        $userId= $_SESSION['userid'];
        $courseId= $_GET['id'];
        $sqlInsert = "INSERT INTO `purchased_course`(`user_id`,`course_id`,`user_name`) VALUES ('$userId','$courseId','$userName');";
        if($conn->query($sqlInsert)===true)
        {
            $_SESSION['bought'] = true;
        }
        else{
            $_SESSION['bought'] = false;
        }

    }
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
            <div class="col-11 content__container d-flex justify-content-center">
                <div class="notification mt-5 col-6 d-flex justify-content-center flex-column">
                    <div class="noti__title d-flex justify-content-center">
                        <h2>Tình trạng thanh toán</h2>
                    </div>
                    <div class="noti__content d-flex justify-content-center mt-4">
                        <i class="fa-sharp fa-solid fa-badge-check"></i>
                        <p class="me-3">Bạn đã thanh toán thành công</p>
                        <a href="./index.php" class="button__back">Trở về trang chủ</a>
                    </div>
                </div>
            </div>
</section>

