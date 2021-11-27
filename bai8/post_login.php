<?php

use function PHPSTORM_META\type;

session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_lab4;charset=utf8", "root", "12345678");
$getUserByEmail = "select * from users where email = '$email'";
$stmt = $connect->prepare($getUserByEmail);
$stmt->execute();
$user = $stmt->fetch();

if($user && password_verify($password, $user['password'])){
    $_SESSION['auth'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'role' => $user['role'],
    ];
    header('location: a.php');
    die;
}

header("location: login.php?msg=Đăng nhập không thành công!");

?>