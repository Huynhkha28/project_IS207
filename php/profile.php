<?php
    $title = "Thông tin cá nhân";
    $css_link = "profile.css";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
    include "header.php";
?>
<?php
    if(!$_SESSION['logged_in'])
    {
        header("Location: login.php");
        exit;
    }
    $kq = "";
    require "../inc/myconnect.php";
    $user_name = $_GET["user_name"];
    if(isset($_POST['change']) && !(isset($_POST['oldpassword']))){
        if(isset($_POST['Fullname'])){
            $kq = "Thay đổi thành công";
            $true_name = $_POST['Fullname'];
            $sql = "UPDATE `users` SET `user_fullname`='$true_name' where `user_name` = '$user_name'";
        }
        else $true_name = null;
        if(isset($_POST['Email'])){
            $kq = "Thay đổi thành công";
            $email = $_POST['Email'];
            $sql = "UPDATE `users` SET `user_email`='$email' where `user_name` = '$user_name'";
        }
        else $email = null;
        if(isset($_POST['Address'])){
            $kq = "Thay đổi thành công";
            $diachi = $_POST['Address'];
            $sql = "UPDATE `users` SET `user_address`='$diachi' where `user_name` = '$user_name'";
        }
        else $diachi = null;
        if(isset($_POST['Phone'])){
            $kq = "Thay đổi thành công";
            $phonenumber = $_POST['Phone'];
            $sql = "UPDATE `users` SET `user_numbers`='$phonenumber' where `user_name` = '$user_name'";
        }
        else $phonenumber = null;
        mysqli_query($conn, $sql);
    }
    $sql_profile ="SELECT * FROM `users` where `user_name` = '$user_name'";
    $result_sqlprofile = $conn->query($sql_profile);
    $row = $result_sqlprofile->fetch_assoc();
    if(isset($_POST['change'])){
        if(isset($_POST['oldpassword'])){
            $oldpassword = md5($_POST['oldpassword']);
            if($oldpassword == $row['user_password']){
                if(isset($_POST['newpassword']))
                {
                    $kq = "Thay đổi thành công";
                    $newpassword = md5($_POST['newpassword']);
                    $sql_change_password = "UPDATE `users` SET `user_password`='$newpassword' where `user_name` = '$user_name'";
                }
                mysqli_query($conn, $sql_change_password);
            }
            else $kq = "Thay đổi thất bại";
        }
    }
?>
<script>
    $(document).ready(function() {
        var kq = '<?php echo $kq; ?>';
        if (kq == "Thay đổi thành công" || kq == "Thay đổi thất bại")
            alert(kq);
        $(".btn__change button").click(function(){
            label = this.value.toString();
            str = "<form class='modal__content' action='profile.php?user_name=<?php echo $user_name?>' method='POST'>";
            str += "<div class='modal__title'>";
            str += "<h2>Thêm thông tin</h2>";
            str += "<i class='close fa-regular fa-rectangle-xmark'></i></div>";
            str += "<div class='modal__item d-flex mt-3 ms-3'>";
            if(label == "Password")
            {
                str += "<label for='' class='modal__label col-3'>"+ "Old Password" +":</label><input type='password' class='col-6 modal__input' name = 'oldpassword'></div>";
                str += "<div class='modal__item d-flex mt-3 ms-3'><label for='' class='modal__label col-3'>"+ "New Password" +":</label><input type='password' class='col-6 modal__input' name = 'newpassword'></div>";
            }
            else{
                if(label =="Phone"){
                    str += "<label for='' class='modal__label col-3'>"+ label +":</label><input type='tel' pattern='[0-9]{10}' class='col-6 modal__input' name='"+label+"'></div>";
                }
                else if(label == "Email"){
                    str += "<label for='' class='modal__label col-3'>"+ label +":</label><input type='email' class='col-6 modal__input' name='"+label+"'></div>";
                }
                else str += "<label for='' class='modal__label col-3'>"+ label +":</label><input type='text' class='col-6 modal__input' name='"+label+"'></div>";
            }
            str += "<button class='cta' type='submit' name='change'>"
            str += "<span class='hover-underline-animation'> Cập nhật </span>"
            str += "<svg viewBox='0 0 46 16' height='10' width='30' xmlns='http://www.w3.org/2000/svg' id='arrow-horizontal'>"
            str += "<path transform='translate(30)' d='M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z' data-name='Path 10' id='Path_10'></path></svg></button>"
            $(".form__modal__add").append(str);
            $(".form__modal__add").css("display","flex");
        });
        $(".form__modal__add").on('click','.close',function(){
            $(".close").parent().parent().parent().css("display","none");
            $(".close").parent().parent().remove();
        });
    });
</script>
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
            <div class="content__profile col-11">
                    <div class="profile__title d-flex justify-content-center mt-4 ">
                        <h1 class="">TRANG THÔNG TIN CÁ NHÂN</h1><br>
                    </div>
                    <div class="profile__container d-flex ">
                        <div class="profile__avatar col-3 ">
                        </div>
                        <div class="profile__info col-7">
                        <div class="info__account d-flex mt-4">
                                    <div class="info__title col-2 "><i class="fa-solid fa-signature"></i> Tên tài khoản:</div>
                                    <div lass="info__inside col-7"><?php echo $row['user_name']?></div>
                                    <div lass="info__inside col-3"></div>
                            </div>
                            <div class="info__name d-flex mt-4 justify-content-between">
                                    <div class="info__title col-2"><i class="fa-sharp fa-solid fa-user"></i> Họ và tên:</div> 
                                    <div class="info__inside col-7"><?php echo $row['user_fullname']?></div>
                                <div class="btn__change  col-3 d-flex justify-content-end">
                                    <button value="Fullname">Thay đổi <i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                            <div class="info__name d-flex mt-4 justify-content-between">
                                    <div class="info__title col-2"><i class="fa-solid fa-envelope"></i> Email:</div>
                                    <div class="info__inside col-7"><?php echo $row['user_email']?></div>
                                <div class="btn__change col-3 d-flex justify-content-end">
                                    <button value="Email">Thay đổi <i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                            <div class="info__email d-flex mt-4 justify-content-between">
                                    <div class="info__title col-2"><i class="fa-solid fa-lock"></i> Mật khẩu:</div>
                                    <div class="info__inside col-7">*********</div>                          
                                <div class="btn__change col-3 d-flex justify-content-end">
                                    <button value="Password">Thay đổi <i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                            <div class="info__address d-flex mt-4 justify-content-between">
                                    <div class="info__title col-2"><i class="fa-solid fa-location-dot"></i> Địa chỉ:</div>
                                    <div class="info__inside col-7"><?php echo $row['user_address']?></div>
                                <div class="btn__change col-3 d-flex justify-content-end">
                                    <button value="Address">Thay đổi <i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                            <div class="info__address d-flex mt-4 justify-content-between">
                                    <div class="info__title col-2"><i class="fa-solid fa-phone-volume"></i> Số điện thoại:</div>
                                    <div class="info__inside col-7"><?php echo $row['user_numbers']?></div>
                                <div class="btn__change col-3 d-flex justify-content-end">
                                    <button value="Phone">Thay đổi <i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    $sqlPurchasedCourse= "SELECT c.course_id, c.course_name, c.course_image FROM `users` AS u INNER JOIN `purchased_course` AS p ON u.user_id = p.user_id INNER JOIN `courses` AS c ON p.course_id = c.course_id where p.user_name = '$user_name'";
    $resultPurchasedCourse = $conn->query($sqlPurchasedCourse);   
?>                                 
                        <div class="info__course row ">
                            <h3 class="info__course__title">Khóa học của tôi</h3>
                            <div class="purchased__course mt-3 row">
                            <?php
                                if($resultPurchasedCourse->num_rows>0)
                                {
                                    
                                    while($row_purchased_profile=$resultPurchasedCourse->fetch_assoc())
                                        {
                                            $video_id=$row_purchased_profile['course_id'];                     
                                            switch($video_id)
                                            {
                                                case 1:
                                                    $video_id= 133;
                                                    break;
                                                case 2:
                                                    $video_id= 163;
                                                    break;
                                                case 3:
                                                    $video_id= 180;
                                                    break;
                                                case 4:
                                                    $video_id= 214;
                                                    break;
                                                case 5:
                                                    $video_id= 247;
                                                    break;
                                            } 
                                         ?>
                                            <div class="col-3 course__item mt-3 ">
                                                <div class="course__img" style = "background-image: url(../assets/img/<?php echo $row_purchased_profile['course_image']?>);"></div>
                                                <div class="course__name"><span><?php echo $row_purchased_profile['course_name']?></span></div>
                                                <div class="course__button"><a class="course__link__button" href="learn.php?course_id=<?php echo $row_purchased_profile['course_id']?>&videoid=<?php echo $video_id?>">Học ngay</a></div>
                                            </div>
            <?php
        }
    }
    ?>                          
                            </div>
                        </div>                
        </div>
</section>
<div class="form__modal__add">
</div>
<?php
    include "footer.php";
?>
