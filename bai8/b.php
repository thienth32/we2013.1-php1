<?php
session_start();

if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
echo "Nội dung file B";
?>