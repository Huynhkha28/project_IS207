<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $id_xoa=$_GET['xoa_kh_id'];
    $sql_dl = mysqli_query($conn,"DELETE from purchased_course where course_id='$id' and user_id='$id_xoa'");   
    printf($id);
    printf($id_xoa);
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
                    <td><a href="?quanly=xoa1&xoa1=<?php echo $row_select_purchased['course_id']?>&xoa_kh=<?php echo $row_select_purchased['user_id'] ?>" class="btn btn-danger">Xóa</a>
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
if($tam=='xoa1'){
    $xoa1=$_GET['xoa1'];
    $xoa_kh = $_GET['xoa_kh'];
?>
<form action="" method="POST">
<div id="modal-container">
    <div id="modal">
        <div class="modal-header">
            <h5>Bạn có muốn xóa không</h5>
            <a href="?capnhat" id="btn-close"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="modal-body">
            <a href="?quanly=xoa&xoa=<?php echo $xoa1 ?>&xoa_kh_id=<?php echo $xoa_kh ?>"class="btn btn-danger">Xóa</a>
            <a href="?capnhat" class="btn btn-primary">Không</a>
        </div>
    </div>
</div>
</form>
<?php
}
?>