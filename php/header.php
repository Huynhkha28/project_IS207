<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    <script src="../js/index.js"></script>
    <title>Trang chủ</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <nav class="row header__navbars">
                <div class="col-4 navbar-expand-sm navbars__menu">
                    <ul class="navbars__list">
                        <li class="nav-item navbars__item"><a href="../php/index.php" class="navbars__link">Trang chủ</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Góp ý</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Đánh giá</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Hỗ trợ</a></li>
                    </ul>
                </div>
                <div class="col-5 navbars__search">
                    <i class="fa-solid fa-magnifying-glass search__icon"></i>
                    <input type="text" class="search__input" placeholder="Nhập để tìm kiếm">
                </div>
                
                    <?php
                        if(isset($_SESSION['name']))
                        {
                            echo '<div class="col-3 navbars__login d-flex justify-content-end">';
                            echo'<div class="navbars__button__hello me-3"><span class="me-2">Xin chào</span><b>' . $_SESSION['name'] . '</b></div>';
							echo '<div class="navbars__button__dx"><a href="logout.php" class="navbars__button__dx__link">Đăng xuất!</a></div>';
                        }
                        else{
                            echo '<div class="col-3 navbars__login d-flex justify-content-end">';
                            printf('<button class="btn navbars__button--dk me-3" id="sign-up-btn" onclick="signUp()"><p class="navbars__button__hover--dk">Đăng ký</p></button>
                            <button class="btn btn-secondary navbars__button--dn" id="sign-in-btn"  onclick="signIn()" ><p class="navbars__button__hover--dn">Đăng nhập</p></button>'); 
                        }
                    ?>
                    <!-- <a href="" class="navbars_notification"><i class="fa-solid fa-bell"></i></a> -->
                    
                </div>
            </nav>
        </header>