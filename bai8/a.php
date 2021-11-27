<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}

// tạo session mới

?>
<h2>Xin chào <?= $_SESSION['auth']['name']?></h2>