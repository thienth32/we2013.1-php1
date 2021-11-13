<?php

// nếu thỏa mãn điều kiện thì có 1 số lượng câu lệnh sẽ được thực thi
$num = rand(1, 10);
echo "$num <br>";

// điểm nếu nhỏ hơn 5 thì trạng là học lại
// điểm nếu nằm trong khoảng 5 -> <7 thì trạng thái là học lực trung bình
// điểm nếu nằm trong khoảng 7 -> <9 thì trạng thái là sv giỏi
// điểm nếu nằm trong khoảng >= 9 thì trạng thái là sv xuất sắc
// if($num < 5){
//     echo "Học lại";
// }else if($num < 7){
//     echo "Học lực trung bình";
// }else if($num < 9){
//     echo "Học lực khá";
// }else{
//     echo "Sinh viên xuất sắc";
// }

echo $num % 2 == 0 ? "Chẵn" : "lẻ";
if($num%2==0){
    echo "Chẵn";
}else{
    echo "Lẻ";
}


?>