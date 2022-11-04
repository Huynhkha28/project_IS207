<?php
    include "header.php";
    include "slider.php";
    include "category_class.php";
?>
<?php
    $category = new category;
    $showCategory = $category->showCategory();
?>
<div class="col py-3 category_list">
                    <h3>Danh sách danh mục</h3>
                    <table>
                        <tr>
                            <th>Stt</th>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                            if($showCategory)
                            {$i = 0;
                                while($result = $showCategory->fetch_assoc())
                                {
                                    $i++;
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $result['category_id']?></td>
                            <td><?php echo $result['category_name']?></td>
                            <td><a href="categoryedit.php?category_id= <?php echo $result['category_id']?>">Sửa</a> | <a href="categorydelete.php?category_id= <?php echo $result['category_id']?>">Xóa</a></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>