<?php

$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_lab4;charset=utf8", "root", "12345678");
$sql = "select * from products";
$statement = $connect->prepare($sql);
$statement->execute();
$products = $statement->fetchAll(); // fetch: lấy 1 bản ghi đầu tiên thỏa mãn câu lệnh ssql
echo "<pre>";
var_dump($products);
// dựa vào mảng products hiển thị ra 1 table danh sách các sản phẩm 
?>