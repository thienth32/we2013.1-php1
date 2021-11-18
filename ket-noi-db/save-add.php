<?php
// tạo kết nối
require_once './db.php';
// nhận dữ liệu từ form gửi lên
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "insert into products
            (name, price, quantity)
        values 
            ('$name', $price, $quantity)";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: index.php");


?>