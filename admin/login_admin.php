<?php
session_start();
require("../inc/myconnect.php");
?>
<?php
    if(isset($_POST['dangnhapadmin'])){
        $taikhoan=$_POST['taikhoan'];
        $matkhau=$_POST['matkhau'];
        if($taikhoan==''|| $matkhau==''){
            echo "<p>chua nhap du thong tin</p>";
        }else{
            $sql_select_admin = mysqli_query($conn,"SELECT * From tbl_admin where admin_name ='$taikhoan' AND admin_pw='$matkhau' LIMIT 1");
            $count =mysqli_num_rows($sql_select_admin);
            $row_dangnhap=mysqli_fetch_array($sql_select_admin);
            if($count>0){
                $_SESSION['dangnhapadmin']=$row_dangnhap['admin_name'];
                $_SESSION['admin_id']=$row_dangnhap['admin_id'];
                header('Location: categoryadd.php');
            }
            else{
                echo "<p>tai khoan hoac mat khau sai</p>";
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.2-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Đăng nhập tài khoản</title>
</head>

<body>
    <div class="container flex">
        <div class="row justify-content-center background-form pd">
            <div class="col-md-12">
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4 ">Đăng nhập</h3>
                        </div>
                    </div>
                    <form action="" class="signin-form" method="POST">
                        <div class="form-group mb-3">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="taikhoan" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Mật khẩu</label>
                            <input type="password" name="matkhau" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="dangnhapadmin" class="form-control btn btn-dark submit px-1">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>