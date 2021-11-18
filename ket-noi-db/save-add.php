<?php
// tạo kết nối
require_once './db.php';
// nhận dữ liệu từ form gửi lên
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$file = $_FILES['image'];
// echo "<pre>";
// var_dump($file);
// die;
$filename = "";
if($file['size'] > 0){
    $filename = uniqid() . '-' . $file['name'];
    move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
    $filename = 'uploads/' . $filename;
}

$sql = "insert into products
            (name, price, quantity, image)
        values 
            ('$name', $price, $quantity, '$filename')";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: index.php");


?>