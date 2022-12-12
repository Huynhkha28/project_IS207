<?php
ob_start();
session_start();
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
    <link rel="stylesheet" href="../assets/css/signup.css">
    <title>Đăng ký tài khoản</title>
</head>
<body>
<?php
$name = "" ;
$email = "" ;
$mk= "";
$kqdk ="";
if(isset($_POST['dangky']))
{
    require '../inc/myconnect.php';
    $name  = $_POST['username'] ;
    $email = $_POST['email'];
    $mk = md5($_POST['password']);
    $sql="INSERT INTO  `users` (`user_name`, `user_password`,`user_email`) 
    VALUES ('$name','$mk' ,'$email')";
        // echo  $mk;
    if (mysqli_query($conn, $sql)) {
        $name = "" ;
        $email = "" ;
        $mk= "";
        $kqdk = "Đăng ký thành công";
    } else {
        $kqdk = "Đăng ký không thành công xin hay kiểm tra lại thông tin";
    }
    mysqli_close($conn);
}
?>
    <div class="container flex">
        <div class="row justify-content-center background-form pd">
            <div class="col-md-12">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>Chào mừng đến với LearnFF</h2>
                            <p>Let's learn for future</p>
                            <p>Bạn đã có tài khoản?</p>
                            <a href="./login.php" class="btn btn-white btn-outline-dark">Đăng nhập ngay</a>
                        </div>
                    </div>
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="back-home">
                            <a href="./index.php" class="btn-backhome"> <i class="fa-sharp fa-solid fa-arrow-left"></i>Trở về trang chủ</a>
                        </div>
                        <div class="w-100">
                            <h3 class="mb-4 ">Đăng ký</h3>
                        </div>
                    </div>
        <form action="signup.php" class="signup-form" method="POST">
        <div class="form-group mb-3 ">
        <label class="label" for="name">Tên đăng nhập</label>
        <input type="text" class="form-control add-width" required="" name="username" id="username">
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Mật khẩu</label>
            <input type="password" class="form-control add-width" required="" name="password" id="password">
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Email</label>
            <input type="email" class="form-control add-width"  required="" name="email" id="email">
            </div>
        <div class="form-group">
        <button type="submit" class="form-control btn btn-dark submit px-4" name="dangky">Đăng ký</button>
        </div>
        <div class="form-group d-md-flex">
        <div class="w-100 text-md-right ">
        <a href="#" class="text-decoration-none link-dark hover">Quên mật khẩu</a>
        <P style="color:green"><?php echo $kqdk; ?></p>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
</html>
<?php ob_end_flush(); ?>