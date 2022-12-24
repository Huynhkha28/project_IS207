<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_dl = mysqli_query($conn, "DELETE from support where support_id='$id'");
}
?>

<?php
if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
} else {
    $tam = '';
}
?>

<div class="col-7 py-2 ">
    <h3>Thông báo hỗ trợ</h3>
    <?php
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = '';
    }
    if ($page == '' || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * 6) - 6;
    }
    $sql_select_support = mysqli_query($conn, "SELECT * FROM support,users where support.user_id=users.user_id
    ORDER BY support.user_id DESC LIMIT $begin,6")
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên hỗ trợ</th>
                <th>Nội dung hỗ trợ</th>
                <th>Tài khoản users cần hỗ trợ</th>
                <th>quanly</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_support = mysqli_fetch_array($sql_select_support)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_support['support_name'] ?></td>
                    <td><?php echo $row_select_support['support_content'] ?></td>
                    <td><?php echo $row_select_support['user_name'] ?></td>
                    <td><a href="?quanly=xoa1&xoa1=<?php echo $row_select_support['support_id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
            <?php
            $sql_trang = mysqli_query($conn, "SELECT*FROM tbl_blog");
            $row_count = mysqli_num_rows($sql_trang);
            $trang = ceil($row_count / 6);
            ?>
            <ul class="pagination">
                <?php
                for ($i = 1; $i <= $trang; $i++) {
                ?>
                    <li class="page-item 
                    <?php if ($i == $page) {
                        echo 'active';
                    } else {
                        echo '';
                    } ?>"><a class="page-link" <?php if ($i == $page) {
                                                } ?>class="active" href="support_admin.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
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