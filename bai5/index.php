<?php
// require_once './thu_vien.php';
// $arr = tao_mang(10, 1, 20, true);
// echo "<pre>";
$a = 5;
$b = 'something';
$c = false;
var_dump($a, $b, $c, 'thienth', [1,2,3]);
function test2(){
    $data_arr = func_get_args();
    echo "<pre>";
    var_dump($data_arr);
}
test2(1,2,false,'something',[1,2,3]);
// $a = 5;
// function test(){
//     global $a;
//     $a = 10;
    
// }
// test();

// echo $a;

/**
 * Lab 2: 
 * b1: Tạo hàm nhận 1 tham số là chuỗi
 * Kiểm tra chuỗi nhập vào có bao nhiêu ký tự
 * Kiểm tra chuỗi nhập vào có bao nhiêu từ
 * kiểm tra số lượng ký tự (không bao gồm khoảng trắng) được lặp lại trong chuỗi
 * b2: Tạo hàm nhận tham số là 1 mảng, ts2 là true/false
 * return 1 mảng mà các phần tử được sắp xếp theo thứ tự tăng dần khi ts2 = true và giảm dần khi ts2 = false
 * b3: Tạo 1 hàm nhận giá trị là số năm (số)
 * return true khi năm truyền vào là năm nhuận
 * return false khi năm truyền vào k phải năm nhuận
 */

?>