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
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Đăng nhập tài khoản</title>
</head>

<body>
    <?php
    $name = "";
    $mk = "";
    $kq = "";
    if (isset($_POST['dangnhap'])) {
        require "../inc/myconnect.php";
        $name = $_POST['name'];
        $mk = md5($_POST['mk']);
        $sql = "SELECT * FROM `users` WHERE `user_name` = '$name' and `user_password` = '$mk'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['userid'] = $row['user_id'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $row['user_email'];
                $_SESSION['logged_in'] = 1;
                header('Location: index.php');
                $row = $result->fetch_assoc();
            }
        } else {
            $kq = "Thông tin không đúng vui lòng kiểm tra lại";
        }
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
                            <p>Nếu bạn chưa có tài khoản</p>
                            <a href="./signup.php" class="btn btn-white btn-outline-dark">Đăng ký ngay</a>
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="back-home">
                                <a href="./index.php" class="btn-backhome"><i class="fa-sharp fa-solid fa-arrow-left"></i>Trở về trang chủ</a>
                            </div>
                            <div class="w-100">
                                <h3 class="mb-4 ">Đăng nhập</h3>
                            </div>
                        </div>
                        <form action="login.php" class="signin-form" method="POST">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Tên đăng nhập</label>
                                  <input type="text" name="name"class="form-control " required="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Mật khẩu</label>
                                <input type="password" name="mk" class="form-control"  required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="dangnhap" class="form-control btn btn-dark submit px-1">Đăng nhập</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Ghi nhớ tài khoản
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="w-50 text-md-right ms-5 ">
                                    <a href="./forgetpassword.php" class="text-decoration-none link-dark hover ">Quên mật khẩu</a>
                                    <P style="color:green"><?php echo $kq; ?></p>
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
<?php ob_get_status(); ?>