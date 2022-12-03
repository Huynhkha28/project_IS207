<?php
require '../inc/myconnect.php';
?>
<?php
$title = 'Blog';
$css_link = 'blog.css';
?>
<?php
include "header.php";
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = '';
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 5) - 5;
}
$sql_post = mysqli_query($conn, "SELECT*FROM tbl_blog ORDER BY post_id DESC LIMIT $begin,5");
?>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
<<<<<<< Updated upstream
    $(document).ready(function () {
     $(".Post_item_info_title").click(function() {
    $(this).parent().toggleClass('active');
    $(this).parent().children('.Post_item_info_body').slideToggle();
  });
});
=======
    $(document).ready(function() {
        $(".Post_item_info_title").click(function() {
            $(this).parent().toggleClass('active');
            $(this).parent().children('.Post_item_info_body').slideToggle();
        });
    });
>>>>>>> Stashed changes
</script>
<section class="content">
    <div class="col-1 content__sibebar">
        <div class="sidebar">
            <ul class="sidebar__list">
                <li class="sidebar__item"><a href="../html/pathway.html" class="sidebar__link"><i class="fa-solid fa-route sidebar__icon"></i><span class="sidebar__title">Lộ trình</span></a></li>
                <li class="sidebar__item"><a href="./course.php" class="sidebar__link"><i class="fa-solid fa-book sidebar__icon"></i><span class="sidebar__title">Khóa học</span></a></li>
                <li class="sidebar__item"><a href="./blog.php" class="sidebar__link"><i class="fa-solid fa-blog sidebar__icon"></i><span class="sidebar__title">Blog</span></a></li>
            </ul>
        </div>
    </div>
    <div class="col-10 blog_content">
        <div class="blog_heading">
            <h1>Bài viết nổi bật</h1>
            <p>Tổng hợp bài viết chia sẽ về kinh nghiệm học lập trình online</p>
        </div>
        <?php
        // require '../inc/truyvan.php';
        while ($row = mysqli_fetch_array($sql_post)) {
            // if ($row_post->num_rows > 0) {
            //     while ($row = $row_post->fetch_assoc()) {
        ?>
            <div class="Post_item">
                <div class="Post_item_header">
                    <div class="Post_item_header_author">
                        <i class="fa-sharp fa-solid fa-user ms-2"></i>
                        <b>admin</b>
                    </div>
                    <div class="Post_item_header_action">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <b> <i class="fa-solid fa-ellipsis"></i> </b>
                            </button>
                            <div class="dropdown-content">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.inithtml.com/">
                                    <i class="fa-brands fa-facebook"></i></i>Chia sẽ lên facebook</a>
                                <a href="https://twitter.com/share?text=&url=">
                                    <i class="fa-brands fa-twitter"></i></i>Chia sẽ lên Twitter</a>
                                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body=">
                                    <i class="fa-sharp fa-solid fa-envelope"></i></i>Gmail</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="Post_item_info">
                    <div class="Post_item_info_ct active">
                        <div class="Post_item_info_title">
                            <h3><?php echo $row['post_name'] ?></h3>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="Post_item_info_body">
                            <p><?php echo $row['post_mota'] ?></p>
                        </div>
                        <div class="Post_tags">
                            <span>#<?php echo $row['post_tags'] ?></span>
                        </div>
                    </div>
                    <div class="Post_item_info_image">
<<<<<<< Updated upstream
                        <img src="../assets/img/react_logo.png" alt="">
=======
                        <img src="../assets/img/blog_post_1.jpg" alt="">
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        <?php
        }
        // }
        ?>
        <?php
        $sql_trang = mysqli_query($conn, "SELECT*FROM tbl_blog");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count / 5);
        ?>
        <ul class="list-trang">
            <?php
            for ($i = 1; $i <= $trang; $i++) {
            ?>
                <li <?php if ($i == $page) {
                        echo 'style="background-color: #F05123; color: blue;"';
                    } else {
                        echo '';
                    } ?>><a <?php if ($i == $page) {
                                echo 'style="color: #fff;"';
                            } ?> href="blog.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
            }
            ?>
        </ul>
        <!----------------------->
    </div>
</section>