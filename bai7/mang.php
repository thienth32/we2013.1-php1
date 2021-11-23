<?php

// mảng là tập hợp các phần tử (giá trị) - không phân biệt kiểu dữ liệu, và các phần tử được xác định
// theo cú pháp key => value
// hàm built-in xử lý mảng
// array_filter(): lọc các giá trị trong mảng => trả về 1 mảng sau khi lọc
$arr = [1,2,3,4,5,6,7,8,9,10];
$arr2 = array_filter($arr, function($item){
    return $item%3 == 0;
});
echo "<pre>";
// var_dump($arr, $arr2);

// array_key_exists(): kiểm tra xem key có tồn tại trong mảng hay không => true/false
$arr = [
    'name' => 'a',
    'age' => 30,
    'address' => 'c'
];
$keyword = 'ten';
$existed = array_key_exists($keyword, $arr);
// var_dump($existed);

// array_map(): thực hiện quét qua từng phần tử của mảng sau đó thực hiện biến 
// đổi giá trị của phần tử đó, gán toàn bộ giá trị sau khi biến đổi sang 1 mảng khác
$arr = [1,2,3,4,5,6,7,8,9,10];
$arr2 = array_map(function($item){
    if($item%2 == 0){
        return pow($item, 2);
    }

    return $item;
}, $arr);
// var_dump($arr, $arr2);
// array_push(): chèn 1 hoặc nhiều phần tử vào cuối mảng ()
// có bao nhiêu loại mảng
$arr = [
    'something',
    'name' => 'a',
    'age' => 30,
    'address' => 'c'
];
$arr['school'] = 'poly';
// array_push($arr, 1);
// var_dump($arr);
// array_pop(): xóa phần tử ở cuối mảng và return phần tử này

// array_replace(): thay thế các giá trị cần tìm bằng các giá trị mới

// array_reverse(): trả về 1 mảng có thứ tự ngược lại so với mảng gốc
$arr = [1,2,3,4,5];
$arr2 = array_reverse($arr);
// var_dump($arr2);

// array_splice(): loại bỏ các phần tử được chỉ định (dựa vào index và số lượng), thay thế chúng 
// bằng các phần tử truyền vào
$arr = [1,2,3,4,5];
array_splice($arr, 1, 2, [6, 7]);
// ts1: mảng cần biến đổi
// ts2: bỏ qua bao nhiêu phần tử
// ts3: tính từ phần tử sau khi bỏ qua, sẽ xóa đi bao nhiêu phần tử
// ts4: giá trị sẽ được thêm vào tại vị trí bị xóa
// var_dump($arr);

// count(): trả về số phần tử trong 1 mảng
// compact(): chuyển biến thành các phần tử trong mảng với key là tên biến, value là giá trị của biến
$name = 'aaa';
$age = 30;
$address = 'hà nội';
$arr2 = compact('name', 'age', 'address');

$arr = [
    'name' => $name,
    'age' => $age,
    'address' => $address
];

// extract(): ngược lại với hàm compact, chuyển các phần tử trong mảng thành biến 
$arr3 = [
    'ten' => $name,
    'tuoi' => $age,
    'diachi' => $address
];
extract($arr3);
// var_dump($ten);
// in_array(): kiểm tra xem 1 giá trị có xuất hiện trong mảng hay không => true/false
// var_dump(in_array('hà nam', $arr3));
// shuffle(): xáo trộn thứ tự các phần tử trong mảng
$arr = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr);
var_dump($arr);
// sort(): sắp xếp các phần tử của mảng theo thứ tự tăng dần


?>