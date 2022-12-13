<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_POST['themdanhmuc'])){
    $tendanhmuc=$_POST['danhmuc'];
    $sql_insert = mysqli_query($conn,"INSERT into category(category_name) values('$tendanhmuc')");
}elseif(isset($_POST['capnhatdanhmuc'])){
    $id_post =$_POST['id_danhmuc'];
    $tendanhmuc=$_POST['danhmuc'];
    $sql_update=mysqli_query($conn,"UPDATE category SET category_name='$tendanhmuc' where category_id='$id_post'");
}
?>
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_dl = mysqli_query($conn,"DELETE from category where category_id='$id'");   
}
?>



<?php
if (isset($_GET['quanly']) == 'capnhat') {
    $id_capnhat=$_GET['id'];
    $sql_capnhat=mysqli_query($conn,"SELECT*from category where category_id='$id_capnhat'");
    $row_capnhat=mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-4 py-3 ">
        <h3>Cập nhật danh mục</h3>
        <form action="" method="POST">
            <input required type="text" name="danhmuc" class="input__danhmuc" 
            placeholder="Nhập để cập nhật <?php echo $row_capnhat['category_name'] ?>">
            <input type="hidden" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>">
            <button name="capnhatdanhmuc" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div>
<?php
} else {
?>
    <div class="col-4 py-3 ">
        <h3>Thêm danh mục</h3>
        <form action="" method="POST">
            <input required type="text" name="danhmuc" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <button name="themdanhmuc" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div>
<?php
}
?>
<div class="col-5 py-3 ">
    <h3>Danh sách danh mục</h3>
    <?php
    $sql_select_category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC")
    ?>
    <form action="" method="POST">
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while ($row_category = mysqli_fetch_array($sql_select_category)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_category['category_name'] ?></td>
                    <td><a href="?xoa=<?php echo $row_category['category_id'] ?>">Xóa</a>
                        ||<a href="?quanly=capnhat&id=<?php echo $row_category['category_id'] ?>">Cập nhật</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>