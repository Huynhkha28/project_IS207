<?php
$title = "Trang chủ";
$css_link = "evaluation.css"
?>
<?php
include "header.php";
?>
<?php
$star='';
$rateContent ='';
$kq = '';
if (!$_SESSION['logged_in']) {
    header("Location: login.php");
    exit;
}
if(isset($_POST['guidanhgia']))
{
    require "../inc/myconnect.php";
    $star = $_POST['rate'];
    $rateContent = $_POST['ratecontent'];
    $sqlGetUserId= "SELECT `user_id` from `users` where `user_name` = '$_SESSION[name]'";
    $resultGetUserId = $conn->query($sqlGetUserId);
    $userID=$resultGetUserId->fetch_array();
    $sqlInsertRate= "INSERT INTO `rate` (`rate_star`, `rate_content`, `user_id`) VALUES ('$star', '$rateContent', '$userID[user_id]');";
    if($conn->query($sqlInsertRate)===true){
        $kq="Bạn đã gửi đánh giá thành công";
    }
}
?>
<section class="content">
    <div class="col-1 content__sibebar">
        <div class="sidebar">
            <ul class="sidebar__list">
                <li class="sidebar__item"><a href="./pathway.php" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                <li class="sidebar__item"><a href="./blog.php" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
            </ul>
        </div>
    </div>
    <div class="col-11 content__container d-flex justify-content-center">
        <form action="evaluation.php" method="POST" class="support__form col-6 ">
            <p class="form__title">Gửi nội dung đánh giá</p>
            <div class="form__group d-flex mt-4">
            <label class="form__label col-3">Đánh giá của bạn</label>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
            </div>
            <div class="form__group d-flex mt-4">
                <label class="form__label col-3">Góp ý của bạn</label>
                <textarea type="text" class="col-9" placeholder=" Nội dung..." name="ratecontent"></textarea>
            </div>
            <div class="result__insert">
                <b style="color:blue"><?php echo $kq; ?></b>
            </div>
            <div class="support__button mt-4"><button type="submit" name="guidanhgia" class="btn">Gửi</button></div>
        </form>
    </div>
</section>
<?php
include "footer.php";
?>