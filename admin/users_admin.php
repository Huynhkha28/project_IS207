<?php
require("../inc/myconnect.php");
include "header.php";
include "slider.php";
?>
<!-----------Xóa danh mục----------->
<?php
// if(isset($_POST['themusers'])){
//     $user_name=$_POST['user_name'];
//     $user_password=md5($_POST['user_password']);
//     $user_email=$_POST['user_email'];
//     $user_numbers=$_POST['user_numbers'];
//     $user_address=$_POST['user_address'];
//     $user_fullname=$_POST['user_fullname'];
//     $sql_insert_users = mysqli_query($conn,"INSERT into users(user_name,user_password,user_email,user_numbers,user_address,user_fullname)
//      values('$user_name','$user_password','$user_email','$user_numbers','$user_address','$user_fullname')");
// }
?>
<?php
if (isset($_POST['capnhatusers'])) {
    $id_post = $_POST['id_capnhat'];
    $user_name = $_POST['user_name'];
    $user_password = md5($_POST['user_password']);
    $user_email = $_POST['user_email'];
    $user_numbers = $_POST['user_numbers'];
    $user_address = $_POST['user_address'];
    $user_fullname = $_POST['user_fullname'];
    $sql_update = mysqli_query($conn, "UPDATE users SET user_name='$user_name',user_name='$user_name',
    user_password='$user_password',user_email='$user_email',user_numbers='$user_numbers',
    user_address='$user_address',user_fullname='$user_fullname'' where user_id='$id_post'");
}
?>
<?php
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_dl = mysqli_query($conn, "DELETE from purchased_course where user_id='$id'");
    $sql_dl = mysqli_query($conn, "DELETE from rate where user_id='$id'");
    $sql_dl = mysqli_query($conn, "DELETE from support where user_id='$id'");
    $sql_dl = mysqli_query($conn, "DELETE from users where user_id='$id'");
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
    $id_capnhat = $_GET['id'];
    $sql_capnhat = mysqli_query($conn, "SELECT*from users where user_id='$id_capnhat'");
    $row_capnhat = mysqli_fetch_array($sql_capnhat);
?>
    <div class="col-3 py-3 ">
        <h3>Cập nhật users</h3>
        <form action="" method="POST">
            <label for="">Tên users</label>
            <input type="text" name="user_name" class="input__danhmuc" value="<?php echo $row_capnhat['user_name'] ?>">
            <label for="">user_password</label>
            <input type="text" name="user_password" class="input__danhmuc">
            <label for="">Tên user_email</label>
            <input type="text" name="user_email" class="input__danhmuc" value="<?php echo $row_capnhat['user_email'] ?>">
            <label for="">Tên user_numbers</label>
            <input type="text" name="user_numbers" class="input__danhmuc" value="<?php echo $row_capnhat['user_numbers'] ?>">
            <label for="">Tên user_address</label>
            <input type="text" name="user_address" class="input__danhmuc" value="<?php echo $row_capnhat['user_address'] ?>">
            <label for="">Tên user_fullname</label>
            <input type="text" name="user_fullname" class="input__danhmuc" value="<?php echo $row_capnhat['user_fullname'] ?>">
            <input type="hidden" name="id_capnhat" class="input__danhmuc" value="<?php echo $row_capnhat['user_id'] ?>">
            <button name="capnhatusers" type="submit" class="btn btn-outline-danger m-lg-2">Cập nhật users</button>
        </form>
    </div>
<?php
} else {
?>
    <!-- <div class="col-3 py-3 ">
        <h3>Thêm users</h3>
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
            <button name="themusers" type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
        </form>
    </div> -->
<?php
}
?>
<div class="col-10 py-3 ">
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
        $begin = ($page * 10) - 10;
    }
    $sql_select_users = mysqli_query($conn, "SELECT * FROM users ORDER BY user_id DESC LIMIT $begin,10")
    ?>
    <form action="" method="POST">
        <table class="table table-bordered">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên users</th>
                <th>user_password</th>
                <th>Tên user_email</th>
                <th>Tên user_numbers</th>
                <th>Tên user_address</th>
                <th>Tên user_fullname</th>
                <th>quanly</th>
            </tr>
            <?php
            $i = 0;
            while ($row_select_users = mysqli_fetch_array($sql_select_users)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_select_users['user_name'] ?></td>
                    <td><?php echo $row_select_users['user_password'] ?></td>
                    <td><?php echo $row_select_users['user_email'] ?></td>
                    <td><?php echo $row_select_users['user_numbers'] ?></td>
                    <td><?php echo $row_select_users['user_address'] ?></td>
                    <td><?php echo $row_select_users['user_fullname'] ?></td>
                    <td width="20%"><a href="?quanly=xoa1&xoa1=<?php echo $row_select_users['user_id'] ?>" class="btn btn-danger">Xóa</a>
                        <a href="?quanly=capnhat&id=<?php echo $row_select_users['user_id'] ?>" class="btn btn-primary">Cập nhật</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            $sql_trang = mysqli_query($conn, "SELECT*FROM payment_bill");
            $row_count = mysqli_num_rows($sql_trang);
            $trang = ceil($row_count / 10);
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
                    } ?>"><a class="page-link" 
                    <?php if ($i == $page) {
                                                } ?>class="active" href="users_admin.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
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