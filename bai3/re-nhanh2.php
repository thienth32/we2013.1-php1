<?php
$gender = rand(1, 5);
echo "$gender <br>";
switch($gender){
    case 1:
        echo "Giới tính nam";
        break;
    case 2:
        echo "Giới tính nữ";
        break;
    default:
        echo "Giới tính khác";
        break;
}

?>