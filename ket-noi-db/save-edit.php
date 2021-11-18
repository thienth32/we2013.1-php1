<?php
// tạo kết nối
require_once './db.php';
$id = $_GET['id'];
// nhận dữ liệu từ form gửi lên
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "update products
        set     name = '$name', 
                price = $price, 
                quantity = $quantity
        where id = $id";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: index.php");


?>