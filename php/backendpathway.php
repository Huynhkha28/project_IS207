<?php
    $title="Lộ Trình Back-end";
    $css_link = "pathway.css";
?>

<?php
    include './header.php'
?>

<section class="content">
            <div class="col-1 content__sibebar">
                <div class="sidebar">
                    <ul class="sidebar__list">
                        <li class="sidebar__item"><a href="./pathway.php" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                        <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                        <li class="sidebar__item"><a href="" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-11 content__container background_color">
                <div class="title">
                    <h1>BACK-END</h1>
                </div>
                <div class="content__introduce gradient_color">
                    <h1>Lộ trình học Back-end</h1>
                    <p style="padding-top: 10px">Hầu hết các websites hoặc ứng dụng di động đều có 2 phần là Front-end và Back-end. Front-end là phần giao diện người dùng nhìn thấy và có thể tương tác. Back-end là nơi xử lý dữ liệu và lưu trữ. Vì vậy, nhiệm vụ của lập trình viên Back-end là phân tích thiết kế dữ liệu, xử lý logic nghiệp vụ của các chức năng trong ứng dụng.</p>
                    <p style="padding-top: 10px">Dưới đây là các khóa học ra dành cho bất cứ ai theo đuổi sự nghiệp trở thành một lập trình viên Back-end.</p>       
                </div>

                <div class="content__htmlcss gradient_color">
                    <h1>Lập Trình Back-end với PHP</h1>
                    <p style="padding-top: 10px">Bạn có muốn tự mình tạo một Web bán hàng hoặc một trang trình bày sản phẩm hay Bạn muốn thiết kế blog cá nhân? Để làm được những điều này bạn cần phải sử dụng tới một ngôn ngữ hỗ trợ cho web động phổ biến hiện nay PHP. Vậy bắt đầu tìm hiểu về PHP với khóa học của mình thôi còn chờ gì nữa</p>
                    <a href="./productdetails.php?id=4" style="display: flex; justify-content: center;"><div class="pathway__img" style="background-image: url(../assets/img/php_logo.png);"></div></a>
                </div>

                <div class="content__js gradient_color">
                    <h1>Hệ quản trị cơ sở dữ liệu MySQL</h1>
                    <p style="padding-top: 10px">Để có thể lập trình được một web động như mong muốn chỉ mỗi PHP thôi là chưa đủ. PHP có thể giúp bạn liên kết trang web với cơ sở dữ liệu để truy xuất. Nhưng cơ sở dữ liệu thì không phải tự có, bạn phải tự tạo cơ sở dữ liệu của mình. Và để có được một cơ sở dữ liệu tốt thì hãy vào ngay khóa học của mình thôi. Khóa học này sẽ đưa cho bạn các kỹ năng cần thiết để thiết kế một cơ sở dữ liệu</p>
                    <a href="./productdetails.php?id=5" style="display: flex; justify-content: center;"><div class="pathway__img" style="background-image: url(../assets/img/mysql_course.image);"></div></a>
                </div>
            </div>
</section>

<?php
    include './footer.php'
?>