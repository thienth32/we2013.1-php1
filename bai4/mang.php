<?php
// tạo mảng
// $arr = [];
// $arr[] = 2;
// $arr[] = false;
// $arr[] = "something";

// $arr['name'] = 'fpt poly';
// echo "<pre>";
// var_dump($arr);
// tạo ra 1 mảng gồm 6 phần tử là số ngẫu nhiên nằm trong khoảng từ 1 => 20
$arr = [];
for ($i=1; $i <= 6; $i++) { 
    $arr[] = rand(1, 20);
}

echo "<pre>";
var_dump($arr);
// đếm số phần tử chẵn, lẻ trong mảng
$chan = 0;
$le = 0;
$tongChan = 0;
$tongLe = 0;
$max = $arr[0];
foreach ($arr as $key => $value) {
    if($max < $value){
        $max = $value;
    }
    if($value%2 == 0){
        $tongChan += $value;
        $chan++;
    }else{
        $tongLe += $value;
        $le++;
    }
}

echo "Số chẵn: $chan <br>Số lẻ: $le<br>";

// tính tổng các số chẵn, và các số lẻ trong mảng
echo "Tổng số chẵn: $tongChan <br>Tổng số lẻ: $tongLe <br>";
// tìm số lớn nhất trong mảng
echo "số lớn nhất trong mảng  = $max";
?>