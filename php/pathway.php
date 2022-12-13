<?php
    $title="Lộ Trình";
    $css_link = "pathway.css";
?>

<?php
    include './header.php';
?>

<section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="./pathway.php" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="./blog.php" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Content_Pathway -->
            <div class="col-11 content__container">
                <div class="container__pathway">
                    <div class="pathway__introduce">
                    </div>

                    <div class="pathway__content" style="padding-bottom: 10px; margin-left: 75px">
                        <div class="front_end__pathway">
                            <div class="p__pathway">
                                <h2>Lộ trình học Front-end</h2>
                                <p>Lập trình viên Front-end là người xây dựng ra giao diện websites. Trong phần này sẽ chia sẻ cho bạn lộ trình để trở thành lập trình viên Front-end.</p>
                            </div>

                            <div>
                                <a class="course__link__button course__button" href="./frontendpathway.php">Xem chi tiết</a>
                            </div>
                        </div>

                        <div class="back_end__pathway border">
                            <div class="p__pathway">
                                <h2>Lộ trình học Back-end</h2>
                                <p>Trái với Front-end thì lập trình viên Back-end là người làm việc với dữ liệu, công việc thường nặng tính logic hơn. Chúng ta sẽ cùng tìm hiểu thêm về lộ trình học Back-end.</p>
                            </div>

                            <div>
                                <a class="course__link__button course__button" href="./backendpathway.php">Xem chi tiết</a>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
            <!-- Content_Pathway -->

</section>
<?php
    include './footer.php'
?>