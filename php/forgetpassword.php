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
    <link rel="stylesheet" href="../assets/css/forgetpassword.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Quên mật khẩu</title>
</head>
<body>
    <?php
        $kq = "";
        if(isset($_POST['changepassword'])) {
            require "../inc/myconnect.php";
            $check = 0;
            $user_name = $_POST['username'];
            $email = $_POST['email'];
            $sql_profile ="SELECT * FROM `users` where `user_name` = '$user_name'";
            $result_sqlprofile = $conn->query($sql_profile);
            $row = $result_sqlprofile->fetch_assoc();
            if($email == $row['user_email']){
                $check = 1;
            }
        }
        if(isset($_POST['Final'])){
            require "../inc/myconnect.php";
            $sql = "";
            $mk = md5($_POST['pass']);
            $xnmk = md5($_POST['vpass']);;
            $user_name1 = $_POST['user_name'];
            if($mk == $xnmk){
                $sql = "UPDATE `users` SET `user_password`='$mk' where `user_name` = '$user_name1'";
                mysqli_query($conn, $sql);
                $kq = "Thay đổi mật khẩu thành công";
                mysqli_close($conn);
            }
        }
    ?>
    <script>
        $(document).ready(function() {
            var check = parseInt("<?php echo $check; ?>");
            if(check == 1) {
                $('.forgetpassword-form').css('display', 'none');
                $('.changepassword-form').css('display', 'block');
            }
            else {
                var str = "<br><p style='color: red'>Sai email</p>";
                $('.forgetpassword-form').append(str);
            }
        })
    </script>
    <div class="container flex">
        <div class="row justify-content-center background-form pd">
            <div class="col-md-12">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>Chào mừng đến với LearnFF</h2>
                            <p>Let's learn for future</p>
                            <a href="./login.php" class="btn btn-white btn-outline-dark">Quay về đăng nhập</a>
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="back-home">
                                <a href="./index.php" class="btn-backhome"><i class="fa-sharp fa-solid fa-arrow-left"></i>Trở về trang chủ</a>
                            </div>
                            <div class="w-100">
                                <h3 class="mb-4 ">Quên mật khẩu</h3>
                            </div>
                        </div>
                        <form action="forgetpassword.php" class="forgetpassword-form" method="POST">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Tên đăng nhập</label>
                                <input type="text" class="form-control" required="" name="username" id="username">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Email</label>
                                <input type="email" class="form-control"  required="" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="changepassword" class="form-control btn btn-dark submit px-1">Xác nhận email</button>
                                <P style="color:green"><?php echo $kq; ?></p>
                            </div>
                        </form>
                        <form action="forgetpassword.php" class="changepassword-form" method="POST">
                            <p style="color: red;">Xác nhận email thành công</p>
                            <h4>Nhập vào các ô sau để thay mật khẩu: </h4>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Tên đăng nhập</label>
                                <input type="text" class="form-control" required="" name="user_name" id="user_name" readonly value = "<?php echo $user_name; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="pass">Mật khẩu mới</label>
                                <input type="password" class="form-control" required="" name="pass" id="pass">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="vpass">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" required="" name="vpass" id="vpass">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="Final" class="form-control btn btn-dark submit px-1">Thay đổi mật khẩu</button>
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