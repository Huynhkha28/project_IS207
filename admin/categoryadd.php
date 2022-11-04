<?php
    include "header.php";
    include "slider.php";
    include "category_class.php";
?>
<?php
    $category = new category;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $category_name = $_POST['category_name'];
        $insert_category = $category->insertIntoCategory($category_name);
    }
?>
<div class="col py-3 ">
                    <h3>Thêm danh mục</h3>
                    <form action="" method="POST">
                        <input required type="text" name="category_name" class="input__danhmuc" placeholder="Nhập để thêm danh mục">
                        <button type="submit" class="btn btn-outline-danger m-lg-2">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>