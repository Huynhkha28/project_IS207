<?php
    $title="Lộ Trình Front-end";
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

            <div class="col-11 content__container">
                <div class="content__introduce gradient_color">
                    <h1>Lộ trình học Front-end</h1>
                    <p style="padding-top: 10px">Front-end là phần giao diện người dùng nhìn thấy và có thể tương tác, đó chính là các ứng dụng mobile hay những website bạn đã từng sử dụng. Vì vậy, nhiệm vụ của lập trình viên Front-end là xây dựng các giao diện đẹp, dễ sử dụng và tối ưu trải nghiệm người dùng.</p>
                    <p style="padding-top: 10px">Dưới đây là các khóa học ra dành cho bất cứ ai theo đuổi sự nghiệp trở thành một lập trình viên Front-end.</p>       
                </div>

                <div class="content__htmlcss gradient_color">
                    <h1>HTML & CSS</h1>
                    <p style="padding-top: 10px">Để trở thành Frontend Developer được thì sau khi cài đặt xong code editor thì việc tiếp theo là học HTML CSS, bạn là người mới mà đúng không, có biết HTML CSS là cái gì đâu, muốn biết thì hãy vào tham gia lớp học của mình thôi</p>
                    <a href="./product_details.php?id=1" style="display: flex; justify-content: center;"><div class="pathway__img" style="background-image: url(../assets/img/htmlandcss.jpeg);"></div></a>
                </div>

                <div class="content__js gradient_color">
                    <h1>Javascript</h1>
                    <p style="padding-top: 10px">Để làm Frontend Developer không dễ, học HTML CSS thôi là chưa thấm vào đâu cả. Như đã nói đến HTML CSS tạo nên cho bạn ngôi nhà thật đẹp và xinh xắn thì vấn đề tiếp theo là làm sao để nhấn nút là sẽ mở đèn, đóng cửa, mở tivi đồ đây ? Thì đó chính là công dụng của Javascript.</p>
                    <a href="./product_details.php?id=2" style="display: flex; justify-content: center;"><div class="pathway__img" style="background-image: url(../assets/img/javascript_course.jpg);"></div></a>
                </div>

                <div class="content__reactjs gradient_color">
                    <h1>Reactjs</h1>
                    <p style="padding-top: 10px">Tiếp tục đi sâu vào front-end sẽ tiếp xúc với một định nghĩa mới "Web động". Đây là những trang web có thể truy xuất dữ liệu và xử lý thông tin.Các thông tin được hiển thị trên web động được gọi là cơ sở dữ liệu. Khi người dùng truy cập vào một trang web, các cơ sở dữ liệu này được gửi tới trình duyệt bằng những câu chữ, hình ảnh, âm thanh hay những dữ liệu số hoặc dạng bảng với nhiều hình thức khác nhau.</p>
                    <a href="./product_details.php?id=3" style="display: flex; justify-content: center;"><div class="pathway__img" style="background-image: url(../assets/img/react_logo.png);"></div></a>
                </div>
            </div>
</section>

<?php
    include './footer.php'
?>