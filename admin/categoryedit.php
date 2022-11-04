<?php
    include "header.php";
    include "category_class.php";
?>
<?php
        $category = new category;
        if(!isset($_GET['category_id'])||$_GET['category_id']==NULL)
        {
            echo "<script>window.location = 'categorylist.php'</script>";
        }
        else
        {
            $category_id = $_GET['category_id'];
        }
        $get_category = $category -> get_category($category_id);
        if($get_category)
        {
            $result = $get_category->fetch_assoc();
        }
?>
<?php

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $category_name = $_POST['category_name'];
        $update_category = $category->updateIntoCategory($category_name, $category_id);
    }
?>
<div class="col py-3 ">
                    <h3>Sửa tên danh mục</h3>
                    <form action="" method="POST">
                        <input required type="text" name="category_name" class="input__danhmuc" placeholder="Nhập để sửa danh mục"
                         value="<?php echo $result['category_name']?>">
                        <button type="submit" class="btn btn-outline-danger m-lg-2">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>