<?php
require_once './db.php';
$id = $_GET['id'];
$sql = "delete from products where id = $id";

$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: index.php"); // điều hướng trình duyệt sang 1 url khác


?>