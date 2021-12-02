<?php
require_once './db.php';
$id = $_GET['id'];
$sql = "select * from products where id = $id";

$product = executeQuery($sql, false);
$getCategoryQuery = "select * from categories";
$cates = executeQuery($getCategoryQuery, true);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-edit.php?id=<?= $product['id']?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" value="<?= $product['name'] ?>">
        </div>
        <div>
            <label for="">Danh mục sp</label>
            <select name="cate_id" id="">
                <?php foreach($cates as $ca): ?>
                    <?php $selected = $ca["id"] == $product['cate_id'] ? "selected" : ""; ?>
                    <option <?= $selected ?> value="<?= $ca['id']?>"><?= $ca['name']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div>
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price" value="<?= $product['price']?>">
        </div>
        <div>
            <label for="">Số lượng</label>
            <input type="text" name="quantity" value="<?= $product['quantity']?>">
        </div>
        <div>
            <label for="">Ảnh sản phẩm</label>
            <input type="file" name="image">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>