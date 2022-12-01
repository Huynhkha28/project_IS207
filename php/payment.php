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
?>

<?php
    require "../inc/myconnect.php";
    $id= $_GET['id'];
     $sql = "SELECT course_name, course_id, course_price from `courses` where course_id = $id";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
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
            <div class="col-11 content__container">
                <h2 class="d-flex justify-content-center payment__title mt-5">Thông tin thanh toán</h2>
                <div class="payment__content d-flex justify-content-center mt-3">
                    <div class="col-6 row">
                        <div  class="payment__form d-flex flex-column">                           
                                <div class="payment__item d-flex mt-3">
                                    <label class= "label1 col-3">Tên người dùng:</label>
                                    <p class="label2 col-4" name = "username"><?php echo $_SESSION['name']?></p>
                                </div>
                                <div class="payment__item d-flex mt-3">
                                    <label class= "label1 col-3">Email:</label>
                                    <p class="label2 col-4" name="email"><?php echo $_SESSION['email']?></p>
                                </div>
                                <div class="payment__item d-flex mt-3">
                                    <label class= "label1 col-3">Tên khóa học:</label>
                                    <p class="label2 col-4" name="coursename"><?php echo $row['course_name']?></p>
                                </div>
                                <div class="payment__item d-flex mt-3">
                                    <label class= "label1 col-3">Số tiền:</label>
                                    <p class="label2 col-4" name="price"><?php echo $row['course_price']?> VNĐ</p>
                                </div>
                                <div class="payment__item d-flex mt-3">
                                    <label for="label1" class="label1">Phương thức thanh toán</label>
                                        <select name="method" id="payment__method">
                                            <option value="volvo">Momo</option>
                                            <option value="saab">Internet Banking</option>
                                        </select>
                                </div>                     
                            <a href="./paymentprocessing.php?id=<?php echo $row['course_id']?>" name="buy" class="payment__btn mt-4">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php
    include "footer.php";
?>