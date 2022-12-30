<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_dl = mysqli_query($conn,"DELETE from rate where rate_id='$id'");   
}
?>
<div class="col-7 py-3 ">
    <h3>Danh sách đánh giá</h3>
    <?php
    $sql_select_payment = mysqli_query($conn, "SELECT * FROM payment_bill 
    join courses on payment_bill.course_id=courses.course_id
    join users on users.user_id=payment_bill.user_id 
    ORDER BY payment_bill.payment_id DESC");
    ?>
    <form action="" method="POST">
        <table class="table table-bordered">
            <tr class="table-dark">
                <th>STT</th>
                <th>Giá thanh toán</th>
                <th>Tên khóa học</th>
                <th>Tên users</th>
                <th>Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_payment = mysqli_fetch_array($sql_select_payment)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_payment['course_price'] ?></td>
                    <td><?php echo $row_select_payment['course_name'] ?></td>
                    <td><?php echo $row_select_payment['user_name'] ?></td>
                    <td><a href="?xoa=<?php echo $row_select_payment['payment_id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>