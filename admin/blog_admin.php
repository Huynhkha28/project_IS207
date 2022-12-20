<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
if(isset($_POST['themblog'])){
    $post_name=$_POST['post_name'];
    $post_mota=$_POST['post_mota'];
    $post_tags=$_POST['post_tags'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $path='../assets/img/';
    $sql_insert_blog = mysqli_query($conn,"INSERT into tbl_blog(post_name,post_mota,post_tags,post_image)
    values('$post_name','$post_mota','$post_tags','$hinhanh')");
    move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
}//elseif(isset($_POST['capnhatusers'])){
//     $id_post =$_POST['id_capnhat'];
//     $user_name=$_POST['user_name'];
//     $user_password=md5($_POST['user_password']);
//     $user_email=$_POST['user_email'];
//     $user_numbers=$_POST['user_numbers'];
//     $user_address=$_POST['user_address'];
//     $user_fullname=$_POST['user_fullname'];
//     $user_avatar=$_POST['user_avatar'];
//     $sql_update=mysqli_query($conn,"UPDATE users SET user_name='$user_name',user_name='$user_name',
//     user_password='$user_password',user_email='$user_email',user_numbers='$user_numbers',
//     user_address='$user_address',user_fullname='$user_fullname',user_avatar='$user_avatar' where user_id='$id_post'");
// }
?>
<?php
if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_dl = mysqli_query($conn,"DELETE from tbl_blog where post_id='$id'");   
}
?>



<?php
if (isset($_GET['quanly']) == 'capnhat') {
    $id_capnhat=$_GET['id'];
    $sql_capnhat=mysqli_query($conn,"SELECT*from users where user_id='$id_capnhat'");
    $row_capnhat=mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-3 py-3 ">
        <h3>Cập nhật danh mục</h3>
        <form action="" method="POST">
        <label for="">Tên users</label>
            <input type="text" name="user_name" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">user_password</label>
            <input type="text" name="user_password" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Tên user_email</label>
            <input type="text" name="user_email" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Tên user_numbers</label>
            <input type="text" name="user_numbers" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Tên user_address</label>
            <input type="text" name="user_address" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Tên user_fullname</label>
            <input type="text" name="user_fullname" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">User_avatar:    </label>
            <input type="text" name="user_avatar" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <input type="hidden" name="id_capnhat" class="input__danhmuc"value="<?php echo $row_capnhat['user_id'] ?>">
            <button name="capnhatusers" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div>
<?php
} else {
?>
    <div class="col-3 py-3 ">
        <h3>Thêm danh mục</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Tên bài viết</label>
            <input type="text" name="post_name" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Nội dung bài viết</label>
            <textarea class="form-control" name="post_mota"></textarea>
            <label for="">Loại kiến thức tìm hiểu</label>
            <input type="text" name="post_tags" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
            <label for="">Ảnh mô tả</label>
            <input type="file" name="hinhanh" class="input__danhmuc">
            <button name="themblog" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div>
<?php
}
?>
<div class="col-7 py-3 ">
    <h3>Danh sách danh mục</h3>
    <?php
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = '';
    }
    if ($page == '' || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * 5) - 5;
    }
    $sql_select_blog = mysqli_query($conn, "SELECT * FROM tbl_blog ORDER BY post_id DESC LIMIT $begin,5")
    ?>
    <form action="" method="POST">
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Tên tên bài viết</th>
                <th>Chi tiết bài viết</th>
                <th>Loại kiến thức tìm hiểu</th>
                <th>Ảnh mô tả</th>
                <th>quanly</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_blog = mysqli_fetch_array($sql_select_blog)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_blog['post_name'] ?></td>
                    <td><?php echo $row_select_blog['post_mota'] ?></td>
                    <td><?php echo $row_select_blog['post_tags'] ?></td>
                    <td><img src="../assets/img/<?php echo $row_select_blog['post_image'] ?>" width="80px" height="80px" alt=""></td>
                    <td><a href="?xoa=<?php echo $row_select_blog['post_id'] ?>">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <?php
        $sql_trang = mysqli_query($conn, "SELECT*FROM tbl_blog");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count / 5);
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
                            } ?>class="active" href="blog_admin.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
            }
            ?>
        </ul>
    </form>
</div>