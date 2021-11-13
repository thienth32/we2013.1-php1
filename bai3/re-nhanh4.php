<?php
// localhost/php1/bai3/re-nhanh4.php
// isset(): kiểm tra 1 biến hoặc 1 phần tử có tồn tại hay không
$name = isset($_GET['name']) == true ? $_GET['name'] : "";


echo $name;


?>