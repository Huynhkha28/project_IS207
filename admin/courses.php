<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_POST['themkhoahoc'])){
    $tenkhoahoc=$_POST['tenkhoahoc'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $giakhoahoc=$_POST['giakhoahoc'];
    $mota=$_POST['mota'];
    $loaikhoahoc=$_POST['loaikhoahoc'];
    $path='../assets/img/';
    $sql_insert_khoahoc = mysqli_query($conn,"INSERT into courses(course_name,course_describe,course_price,
    course_image,course_type) values('$tenkhoahoc','$mota','$giakhoahoc','$hinhanh','$loaikhoahoc')");
    move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
}elseif(isset($_POST['capnhatkhoahoc'])){
    $id_update=$_POST['id_update'];
    $tenkhoahoc=$_POST['tenkhoahoc'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $giakhoahoc=$_POST['giakhoahoc'];
    $mota=$_POST['mota'];
    $loaikhoahoc=$_POST['loaikhoahoc'];
    $path='../assets/img/';
    if($hinhanh==''){
        $sql_update_image = "UPDATE courses SET course_name='$tenkhoahoc',
        course_describe='$mota',course_price='$giakhoahoc',course_type='$loaikhoahoc' where course_id='$id_update'";
    }else{
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
        $sql_update_image = "UPDATE courses SET course_name='$tenkhoahoc',course_describe='$mota',
        course_price='$giakhoahoc',course_image='$hinhanh',course_type='$loaikhoahoc' where course_id='$id_update'";
    }
    mysqli_query($conn,$sql_update_image);
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
if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
} else {
    $tam = '';
}
?>

<?php
if ($tam == 'capnhat') {
    $id_capnhat=$_GET['capnhat_id'];
    $sql_capnhat=mysqli_query($conn,"SELECT*from courses where course_id='$id_capnhat'");
    $row_capnhat=mysqli_fetch_array($sql_capnhat);
   ?>
    <div class="col-3 py-3 ">
        <h3>Cập nhật khóa học</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Tên khóa học: </label>
            <input type="text" name="tenkhoahoc" class="input__danhmuc"
            value="<?php echo $row_capnhat['course_name']?>"><br>
            <input type="hidden" name="id_update" class="input__danhmuc"
            value="<?php echo $row_capnhat['course_id']?>"><br>
            <label for="">Hình ảnh: </label>
            <input type="file" name="hinhanh" class="input__danhmuc">
            <img src="../assets/img/<?php echo $row_capnhat['course_image']?>" width="80px" height="80px" alt="">
            <label for="">Giá khóa học: </label>
            <input type="text" name="giakhoahoc" class="input__danhmuc" 
            value="<?php echo $row_capnhat['course_price']?>"><br>
            <label for="">Mô tả khóa học: </label>
            <textarea class="form-control" name="mota"><?php echo $row_capnhat['course_describe']?></textarea>
            <label for="">Loại khóa học: </label>
            <input type="text" name="loaikhoahoc" class="input__danhmuc" value="<?php echo $row_capnhat['course_type']?>"><br>
            <button name="capnhatkhoahoc" type="submit" class="btn btn-outline-danger m-lg-2">Cập nhật</button>
        </form>
    </div>
<?php
}
else {
?>
    <div class="col-3 py-3 ">
        <h3>Thêm khóa học</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input required type="text" name="tenkhoahoc" class="input__danhmuc" placeholder="Nhập để thêm tên khóa học"><br>
            <label for="">Hình ảnh: </label>
            <input required type="file" name="hinhanh" class="input__danhmuc">
            <label for="">Giá khóa học: </label>
            <input required type="text" name="giakhoahoc" class="input__danhmuc" placeholder="Nhập giá khóa học"><br>
            <label for="">Mô tả khóa học: </label>
            <textarea class="form-control" name="mota"></textarea>
            <label for="">Loại khóa học: </label>
            <input required type="text" name="loaikhoahoc" class="input__danhmuc" placeholder="Nhập loại khóa học"><br>
            <button name="themkhoahoc" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div>
<?php
}
?>
<div class="col-7 py-3 ">
    <h3>Danh sách khóa học</h3>
    <?php
    $sql_select_khoahoc = mysqli_query($conn, "SELECT * FROM courses ORDER BY course_id DESC")
    ?>
    <form action="" method="POST">
        <table class="table">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên khóa học</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Loại khóa học</th>
                <th>Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while ($row_khoahoc = mysqli_fetch_array($sql_select_khoahoc)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_khoahoc['course_name']?></td>
                    <td><?php echo $row_khoahoc['course_describe']?></td>
                    <td><?php echo $row_khoahoc['course_price']?></td>
                    <td><img src="../assets/img/<?php echo $row_khoahoc['course_image']?>" 
                    height="80px" width="80px" alt=""></td>
                    <td><?php echo $row_khoahoc['course_type']?></td>
                    <td width="20%"><a href="?quanly=xoa1&xoa1=<?php echo $row_khoahoc['course_id'] ?>"class="btn btn-danger">Xóa</a>
                        <a href="courses.php?quanly=capnhat&capnhat_id=<?php echo $row_khoahoc['course_id'] ?>"class="btn btn-primary">Cập nhật</a></td>
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