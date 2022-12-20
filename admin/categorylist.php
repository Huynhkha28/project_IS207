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
    $motamoi = $_POST['motamoi'];
    $id_capnhat = $_GET['them_id'];
    printf($id_capnhat);
    $sql_insert_khoahoc_noidung = mysqli_query($conn, "INSERT into course_summary(course_id,summary) values('$id_capnhat','$motamoi')");
}
// }elseif(isset($_POST['capnhatkhoahoc'])){
//     $id_update=$_POST['id_update'];
//     $tenkhoahoc=$_POST['tenkhoahoc'];
//     $hinhanh=$_FILES['hinhanh']['name'];
//     $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
//     $giakhoahoc=$_POST['giakhoahoc'];
//     $mota=$_POST['mota'];
//     $loaikhoahoc=$_POST['loaikhoahoc'];
//     $path='../assets/img/';
//     if($hinhanh==''){
//         $sql_update_image = "UPDATE courses SET course_name='$tenkhoahoc',
//         course_describe='$mota',course_price='$giakhoahoc',course_type='$loaikhoahoc' where course_id='$id_update'";
//     }else{
//         move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
//         $sql_update_image = "UPDATE courses SET course_name='$tenkhoahoc',course_describe='$mota',
//         course_price='$giakhoahoc',course_image='$hinhanh',course_type='$loaikhoahoc' where course_id='$id_update'";
//     }
//     mysqli_query($conn,$sql_update_image);
// }
?>
<?php
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_khoahoc_dl = mysqli_query($conn, "DELETE from course_summary 
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn, "DELETE from course_video 
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn, "DELETE from purchased_course
    where course_id='$id'");
    $sql_khoahoc_dl = mysqli_query($conn, "DELETE from courses
    where course_id='$id'");
}
?>
<?php
if(isset($_GET['quanly'])){
	$tam=$_GET['quanly'];
}else{
	$tam='';
}
if ($tam == 'them') {
    // $id_capnhat = $_GET['them_id'];
    // $sql_capnhat = mysqli_query($conn, "SELECT*from courses where course_id='$id_capnhat'");
    // $sql_capnhat_mota = mysqli_query($conn, "SELECT*from course_summary where course_id='$id_capnhat'");
    // $row_capnhat = mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-3 py-3 ">
        <h3>Thêm mô tả khóa học</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_them[]" class="input__danhmuc" value="<?php echo $row_capnhat['course_id'] ?>"><br>
            <label>Nhập số lượng mô tả chi tiết: </label>
            <input type="number" min="1" name="slmota" value="1">
            <button name="themsoluong" type="submit" class="btn btn-outline-danger m-lg-2">Thêm số lượng</button>
            <?php
            if ($slmota != '') {
                for ($sl = 0; $sl < $slmota; $sl++) {
            ?>
                    <label for="">Mô tả chi tiết khóa học: </label>
                    <input type="text" name="motamoi" class="input__danhmuc" value=""><br>
                    <button name="themnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
            <?php
                }
            }
            ?>
            <button name="themnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
            <!-- <label for="">Mô tả chi tiết khóa học: </label>
            <input type="text" name="motamoi" class="input__danhmuc" value=""><br>
            <button name="themnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button> -->
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
    <div class="col-3 py-3 ">
        <h3>Cập nhật khóa học</h3>
        <form action="" method="POST">
            <input type="hidden" name="id_update" class="input__danhmuc" value="<?php echo $row_capnhat['course_id'] ?>"><br>
            <?php
            while ($row_capnhat_mota = mysqli_fetch_array($sql_capnhat_mota)) {
            ?>
            <label for="">Mô tả chi tiết khóa học: </label>
            <textarea class="form-control" name="motamoi"><?php echo $row_capnhat_mota['summary'] ?></textarea>
            <button name="themnoidung" type="submit" class="btn btn-outline-danger m-lg-2">Cập nhật </button><br>
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
                <th>Mô tả khóa học</th>
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
                    <td rowspan=""><a href="?xoa=<?php echo $row_khoahoc['course_id'] ?>">Xóa</a>
                        <a href="categorylist.php?quanly=them&them_id=<?php echo $row_khoahoc['course_id'] ?>">Thêm</a>
                        <a href="categorylist.php?quanly=capnhat&them_id=<?php echo $row_khoahoc['course_id'] ?>">Cập nhật</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>