<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/details.css">
   
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    <script src="../../js/index.js"></script>
    <link rel="stylesheet" href="../assets/css/style_button.scss"> 
    <title>Chi tiết khóa học</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <nav class="row header__navbars">
                <div class="col-4 navbar-expand-sm navbars__menu">
                    <ul class="navbars__list">
                        <li class="nav-item navbars__item"><a href="../html/index.html" class="navbars__link">Trang chủ</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Góp ý</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Đánh giá</a></li>
                        <li class="nav-item navbars__item"><a href="" class="navbars__link">Hỗ trợ</a></li>
                    </ul>
                </div>
                <div class="col-6 navbars__search">
                    <i class="fa-solid fa-magnifying-glass search__icon"></i>
                    <input type="text" class="search__input" placeholder="Nhập để tìm kiếm">
                </div>
                <div class="col-2 navbars__login">
                    <!-- <a href="" class="navbars_notification"><i class="fa-solid fa-bell"></i></a> -->
                    <button class="btn navbars__button--dk" id="sign-up-btn" onclick="signUp()"><p class="navbars__button__hover--dk">Đăng ký</p></button>
                    <button class="btn btn-secondary navbars__button--dn" id="sign-in-btn"  onclick="signIn()" ><p class="navbars__button__hover--dn">Đăng nhập</p></button>
                </div>
            </nav>
        </header>
        <section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="../html/pathway.html" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.html" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-11 content__container__product row">
                <div class="course__product col-8">
                    <div class="course__title d-flex justify-content-center mt-3">
                        <h1>Làm quen HTML và CSS</h1>
                    </div>
                    <div class="course__describe mt-4">
                            <span class="describe__title">Mô tả khóa học</span>
                            <p class="course__para">a</p>
                            <span class="describe__title">Tóm tắt kiến thức</span>
                            <p class="course_para">a</p>
                    </div>
                </div>
                <div class="course__interface col-4 mt-4">
                    <div class="interface__image" style= "background-image: url(../assets/img/htmlandcss.jpeg); background-repeat: no-repeat;background-size: contain;background-position: center;border-radius: 22px;padding-top: 57%;"></div>
                    <div class="interface__price d-flex justify-content-center mt-3">
                        <h3>1.500.000 VNĐ</h3>
                    </div>
                    <div class="d-flex justify-content-center mt-2"><button class="interface__button"> Đăng ký mua ngay</button></div>
                </div>
            </div>
        </section>
<?php
    include "footer.php";
?>