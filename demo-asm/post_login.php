<?php

session_start();
require_once './db.php';
// nhận dữ liệu từ form
$email = $_POST['email'];
$password = $_POST['password'];
$erros = "";
if(empty($email)){
    $erros .= "email=Hãy nhập email";
}else if( !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erros .= "email=Không đúng định dạng email";
}

if(empty($password)){
    $erros .= "&password=Hãy nhập mật khẩu";
}

if(strlen($erros) > 0){
    header("location: login.php?" . $erros);
    die;
}

// chuẩn bị sẵn 1 câu lệnh sql để lấy user dựa vào email nhận đc từ form
$getUserByEmail = "select * from users where email = '$email'";

$user = executeQuery($getUserByEmail, false);

// nếu có user và mk trong csdl khớp với mk người dùng điền vào => tạo phần tử auth của biến
// session và điều hướng website về trang a.php
if($user && password_verify($password, $user['password'])){
    $_SESSION['auth'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'role' => $user['role'],
    ];
    header('location: index.php');
    die;
}
// không thỏa mãn thì điều hướng ngược về trang login với 1 message
header("location: login.php?msg=Đăng nhập không thành công!");

?>