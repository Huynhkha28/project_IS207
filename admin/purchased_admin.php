<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_dl = mysqli_query($conn,"DELETE from purchased_course where purchased_id='$id'");   
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
    $sql_select_purchased = mysqli_query($conn, "SELECT * FROM purchased_course,courses
    where purchased_course.course_id=courses.course_id
    ORDER BY purchased_course.user_id DESC LIMIT $begin,10")
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên khóa học</th>
                <th>Tên người mua</th>
                <th>quanly</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_purchased = mysqli_fetch_array($sql_select_purchased)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_purchased['course_name'] ?></td>
                    <td><?php echo $row_select_purchased['user_name'] ?></td>
                    <td><a href="?quanly=xoa1&xoa1=<?php echo $row_select_purchased['purchased__id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
            <?php
            $sql_trang = mysqli_query($conn, "SELECT*FROM purchased_course");
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
                            } ?>class="active" href="purchased_admin.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
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