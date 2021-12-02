<?php
// tạo kết nối
require_once './db.php';
$id = $_GET['id'];
// lấy lại giá trị cũ của sản phẩm dựa vào id
$getProductById = "select * from products where id = $id";
$product = executeQuery($getProductById, false);
// nhận dữ liệu từ form gửi lên
$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$filename = $product['image'];
$file = $_FILES['image'];
if($file['size'] > 0){
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
        $filename = 'uploads/' . $filename;
}

$sql = "update products
        set     name = '$name', 
                price = $price, 
                cate_id = $cate_id,
                quantity = $quantity,
                image = '$filename'
        where id = $id";  
executeQuery($sql, false);
header("location: index.php");


?>