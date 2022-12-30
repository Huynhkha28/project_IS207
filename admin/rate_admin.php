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

<?php
if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
} else {
    $tam = '';
}
?>

<div class="col-7 py-3 ">
    <h3>Danh sách đánh giá</h3>
    <?php
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = '';
    }
    if ($page == '' || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * 10) - 10;
    }
    $sql_select_rate = mysqli_query($conn, "SELECT * FROM rate,users where rate.user_id=users.user_id
    ORDER BY rate.rate_id DESC LIMIT $begin,10")
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Số sao đánh giá</th>
                <th>Nội dung đánh giá</th>
                <th>Tài khoản đánh giá</th>
                <th>Quản lý</th>
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
                    <td><a href="?quanly=xoa1&xoa1=<?php echo $row_select_rate['rate_id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
            <?php
        $sql_trang = mysqli_query($conn, "SELECT*FROM tbl_blog");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count / 10);
        ?>
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= $trang; $i++) {
            ?>
                <li class="page-item <?php if ($i == $page) {
                    echo 'active';
                    } else {
                        echo '';
                    } ?>"><a class="page-link" <?php if ($i == $page) {
                            } ?>class="active" href="rate_admin.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
            }
            ?>
        </ul>
        </table>
    </form>
</div>

<?php
include "../admin/noti_dl.php";
?>