<?php

// tạo 1 mảng gồm 5 phần tử được sinh ra ngẫu nhiên có giá trị nằm trong khoảng 1-20;
// yêu cầu các phần tử không được phép lặp lại giá trị của nhau
$arr = [];
for ($i=0; $i < 5; $i++) { 
    if($i == 0){
        $arr[] = rand(1, 5);
        continue;
    }
    $flag = true;
    while($flag == true){
        $randomValue = rand(1, 5);
        $count = 0;
        foreach($arr as $value) {
            if($value == $randomValue){
                $count++;
            }
        }
        if($count == 0){
            $arr[] = $randomValue;
            $flag = false;
        }
    }
}
echo "<pre>";
var_dump($arr);



?>