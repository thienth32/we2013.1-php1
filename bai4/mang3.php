<?php
// 1. sinh ra 1 mảng gồm 20 phần tử random nằm trong khoảng 1 - 30
// 2. tìm các giá trị xuất hiện >= 2 lần trong mảng
$arr = [];
for ($i=0; $i < 10; $i++) {
    $arr[] = rand(1, 7);
}

echo "<pre>";
var_dump($arr);
$kq = [];
foreach ($arr as $value) {
    $count = 0;
    foreach ($arr as $round2) {
        if($value == $round2){
            $count++;
        }
    }
    if($count > 1){
        $kq[$value] = $count;
    }
}

var_dump($kq);



?>