<?php

// vòng lặp để thực hiện 1 đoạn lệnh nhiều lần mà không phải viết lại code
// echo ra danh sách các số từ 1 => 10
// $i = 1;
// while($i <= 1000){
//     echo $i . "<br>";
//     $i++;
// }
// các loại vòng lặp và cú pháp
// 1. Vòng lặp k biết trước số lần lặp
// while(đk){ } nếu điều kiện còn trả về true thì vòng lặp còn chạy
// do {} while(đk) thực hiện vòng lặp ít nhất 1 lần sau đó mới kiểm 
// tra điều kiện, nếu đk còn trả về true thì vòng lặp sẽ tiếp tục chạy
// 2. vòng lặp biết trước số lần lặp
// for($i = 0; $i < số; $i++){ }
// foreach($arr as $key => $value){ } - chỉ có thể dùng cho mảng/chuỗi 
// - tất cả các loại mảng đều có thể chạy đc

$arr = [
    'name' => 'poly',
    'age' => 12
];

for($i = 0; $i < count($arr); $i++){
    echo $arr[$i];
}


?>