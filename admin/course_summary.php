<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if (isset($_POST['themsoluong'])) {
    $slmota = $_POST['slmota'];
} else {
    $slmota = '';
}
?>
<?php
if (isset($_POST['themnoidung'])) {
    for ($i = 0; $i < count($_POST['id_them']); $i++) {
        $motamoi = $_POST['motamoi'][$i];
        $id_them = $_POST['id_them'][$i];
        $sql_insert_khoahoc_noidung = mysqli_query($conn, "INSERT into course_summary(course_id,summary) 
    values('$id_them','$motamoi')");
    }
}
?>
<?php
if (isset($_POST['capnhatnoidung'])) {
    for ($i = 0; $i < count($_POST['id_mota']); $i++) {
        $capnhatmota = $_POST['capnhatmota'][$i];
        $id_mota = $_POST['id_mota'][$i];
        $id_capnhat = $_GET['them_id'];
        $sql_update_noidung = mysqli_query($conn, "UPDATE course_summary SET summary='$capnhatmota' 
    where course_id='$id_capnhat'and summary_id='$id_mota' ");
    }
}

?>
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_khoahoc_dl = mysqli_query($conn,"DELETE from course_summary 
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn,"DELETE from course_video 
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn,"DELETE from purchased_course
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn,"DELETE from courses
    where course_id='$id'");
}
?>

<?php
if (isset($_POST['xoa_summary_id'])) {
    $id_xoa = $_POST['xoa_summary_id'];
    $sql_khoahoc_dl = mysqli_query($conn, "DELETE from course_summary
    where summary_id='$id_xoa'");
}
?>



<?php
if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
} else {
    $tam = '';
}
?>
<?php
if ($tam == 'them') {
    $id_capnhat = $_GET['them_id'];
    $sql_capnhat = mysqli_query($conn, "SELECT*from courses where course_id='$id_capnhat'");
    $sql_capnhat_mota = mysqli_query($conn, "SELECT*from course_summary where course_id='$id_capnhat'");
    $row_capnhat = mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-4 py-3 ">
        <h3>Thêm mô tả khóa học</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nhập số lượng mô tả chi tiết: </label><br>
            <input type="number" min="1" name="slmota" value="1">
            <button name="themsoluong" type="submit" class="btn btn-outline-danger m-lg-2">Thêm số lượng</button><br>
            <?php
            if ($slmota != '') {
                for ($sl = 0; $sl < $slmota; $sl++) {
            ?>
                    <label for="">Mô tả chi tiết số: <?php echo $sl+1 ?> </label><br>
                    <input type="text" name="motamoi[]" class="input__danhmuc" value="" placeholder="Nhập mô tả khóa học"><br>
                    <input type="hidden" name="id_them[]" class="input__danhmuc" value="<?php echo $row_capnhat['course_id'] ?>"><br>
                <?php
                }
                ?>
                <button name="themnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button><br>
            <?php
            }
            ?>
        </form>
    </div>
<?php
}
if ($tam == 'capnhat') {
    $id_capnhat = $_GET['them_id'];
    $sql_capnhat = mysqli_query($conn, "SELECT*from courses where course_id='$id_capnhat'");
    $sql_capnhat_mota = mysqli_query($conn, "SELECT*from course_summary where course_id='$id_capnhat'");
    $row_capnhat = mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-4 py-3 ">
        <h3>Cập nhật mô tả khóa học</h3>
        <form action="" method="POST">
            <?php
            $i = 0;
            while ($row_capnhat_mota = mysqli_fetch_array($sql_capnhat_mota)) {
                $i++;
            ?>
                <label for="">Cập nhật mô tả số: <?php echo $i ?></label>
                <button name="xoa_summary" value="<?php echo $row_capnhat_mota['summary_id'] ?>" class="btn btn-danger">Xóa</button><br>
                <label for="">Mô tả chi tiết khóa học: </label>
                <textarea class="form-control" name="capnhatmota[]"><?php echo $row_capnhat_mota['summary'] ?></textarea>
                <input type="hidden" name="id_mota[]" class="input__danhmuc" value="<?php echo $row_capnhat_mota['summary_id'] ?>"><br>
            <?php
            }
            ?>
            <?php
            if($i!=0){
                ?>
                <button name="capnhatnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Cập nhật </button><br>
                <?php
            }else{
            ?>
            <span style="color:red">Hiện chưa có dữ liệu</span><br>
            <span>Vui lòng thêm dữ liệu để có thể cập nhật</span>
            <?php
            }
            ?>
        </form>
    </div>
<?php
}
?>
<div class="col-7 py-3 ">
    <h3>Danh sách khóa học</h3>
    <?php
    $sql_select_khoahoc = mysqli_query($conn, "SELECT * FROM courses ORDER BY course_id DESC");
    $sql_select_khoahoc_mota = mysqli_query($conn, "SELECT * FROM course_summary,courses 
    where courses.course_id=course_summary.course_id ORDER BY course_summary.course_id DESC");
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên khóa học</th>
                <th>Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while ($row_khoahoc = mysqli_fetch_array($sql_select_khoahoc)) {
                $i++;
            ?>
                <tr>
                    <td rowspan=""><?php echo $i ?></td>
                    <td rowspan=""><?php echo $row_khoahoc['course_name'] ?></td>
                    <td rowspan="">
                        <a href="course_summary.php?quanly=xoa1&xoa1=<?php echo $row_khoahoc['course_id'] ?>"class="btn btn-danger">Xóa</a>
                        <a href="course_summary.php?quanly=them&them_id=<?php echo $row_khoahoc['course_id'] ?>" class="btn btn-success">Thêm</a>
                        <a href="course_summary.php?quanly=capnhat&them_id=<?php echo $row_khoahoc['course_id'] ?>" class="btn btn-primary">Cập nhật</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>


<?php
include "../admin/noti_dl.php";
?>
<?php
if(isset($_POST['xoa_summary'])){
    $xoa1=$_POST['xoa_summary'];
    $them=$_GET['them_id'];
    // printf($xoa1);
?>
<div id="modal-container">
    <form id="modal" method="POST">
        <div class="modal-header">
            <h5>Bạn có muốn xóa không</h5>
            <a href="course_video.php?quanly=capnhat&them_id=<?php echo $them ?>" id="btn-close"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="modal-body">
            <button type="submit" name="xoa_summary_id" value="<?php echo $xoa1 ?>"  class="btn btn-danger">Xóa</button>
            <a href="course_video.php?quanly=capnhat&them_id=<?php echo $them ?>" class="btn btn-primary">Không</a>
        </div>
    </form>
</div>
<?php
}
?>