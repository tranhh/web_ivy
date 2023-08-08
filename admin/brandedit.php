<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php 
    $brand = new brand;
    $brand_id = $_GET['brand_id'];
    $get_brand = $brand -> get_brand($brand_id);
    if($get_brand){
        $result2 = $get_brand -> fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $category_id = $_POST['category_id'];
        $brand_name = $_POST['brand_name'];
        $update_brand = $brand ->update_brand($category_id,$brand_name,$brand_id);
    }
?>
<style>
    select{
        height: 30px;
        width: 200px;

    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm Loại sản phẩm</h1> <br>
                <form action="" method="POST">
                    <Select name ="category_id" id = "">
                        <option value="#">--Chọn Danh mục</option>
                        <?php
                        $show_category = $brand -> show_category();
                        if($show_category){
                            while($result1 = $show_category -> fetch_assoc()){

                        ?>
                        <option <?php if($result2['category_id'] == $result1['category_id']){echo "SELECTED";} ?>
                         value="<?php echo $result1['category_id'] ?>"><?php echo $result1['category_name'] ?></option>
                        <?php
                            }}
                        ?>
                    </Select> <br>
                    <input required name ="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" 
                        value="<?php echo $result2['brand_name']?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>