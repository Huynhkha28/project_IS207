<?php 
    $css_link = "support.css";
    $title = "Hỗ trợ";

?>
<?php
    include "header.php";
?>
<?php
$supportName='';
$supportContent='';
$kq='';
        if(isset($_POST['guihotro']))
        {
            require "../inc/myconnect.php";
            $supportName= $_POST['spname'];
            $supportContent= $_POST['spcontent'];
            $sqlGetUserId= "SELECT `user_id` from `users` where `user_name` = '$_SESSION[name]'";
            $resultGetUserId = $conn->query($sqlGetUserId);
            $userID=$resultGetUserId->fetch_array();
            $sqlInsertSupport= "INSERT INTO `support` (`support_name`, `support_content`, `user_id`) VALUES ('$supportName', '$supportContent', '$userID[user_id]');";
            if($conn->query($sqlInsertSupport)===true){
                $kq="Bạn đã gửi hỗ trợ thành công";
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
                <form action="support.php" method="POST" class="support__form col-6 ">
                    <p class="form__title">Gửi hỗ trợ</p>
                    <div class="form__group d-flex mt-4">
                        <label class="form__label col-3">Chọn loại hỗ trợ</label>
                        <select name="spname" class="support__method col-9">
                            <option value="htkhoahoc">Hỗ trợ khóa học</option>
                            <option value="httaikhoan">Hỗ trợ tài khoản</option>
                            <option value="htthanhtoan">Hỗ trợ thanh toán</option>
                            <option value="htthacmac">Hỗ trợ giải đáp thắc mắc</option>
                        </select>
                    </div>
                    <div class="form__group d-flex mt-4">
                        <label class="form__label col-3">Nội dung cần hỗ trợ</label>
                        <textarea type="text" class="col-9" placeholder="Nội dung..." name="spcontent"></textarea>
                    </div>
                    <div class="result__insert">
                        <b style="color:blue"><?php echo $kq;?></b>
                    </div>
                    <div class="support__button mt-4"><button type = "submit" name="guihotro" class="btn">Gửi</button></div>
                </form>
            </div>
</section>
<?php
    include "footer.php";
?>
