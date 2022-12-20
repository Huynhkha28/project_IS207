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
    $sql_select_rate = mysqli_query($conn, "SELECT * FROM rate,users where rate.user_id=users.user_id
    ORDER BY rate.rate_id DESC")
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Số sao đánh giá</th>
                <th>Nội dung đánh giá</th>
                <th>Tài khoản đánh giá</th>
                <th>quanly</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_rate = mysqli_fetch_array($sql_select_rate)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_rate['rate_star'] ?></td>
                    <td><?php echo $row_select_rate['rate_content'] ?></td>
                    <td><?php echo $row_select_rate['user_name'] ?></td>
                    <td><a href="?xoa=<?php echo $row_select_rate['rate_id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>