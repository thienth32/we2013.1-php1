<?php

// explode(): chia chuỗi thành mảng, dựa vào ký tự nào đó do chúng ta quy định (separate)
$str = "cao dang fpt poly";
$arr = explode(" ", $str);
echo "<pre>";
// var_dump($str, $arr);
// var_dump($arr);
// implode(): chuyển mảng thành chuỗi
$str2 = implode(",", $arr);
// var_dump($str2);
// htmlentities(): chuyển toàn bộ chuỗi trong text (có thể bao gồm code html) thành ký tự để hiển thị ra, tránh lỗi xss
// $str3 = "<script>document.write('website cua ban đã bị hack, hãy nộp tiền chuộc!')</script>";
// echo htmlentities($str3);
// trim(): cắt toàn bộ các khoảng trắng (hoặc ký tự mong muốn) ở đầu hoặc cuối chuỗi
$str4 = ",,,,,,,something,,,,,,,,,,,";
$str5 = rtrim($str4, ',');
// var_dump($str5);
// ltrim(): giống như hàm trim tuy nhiên chỉ cắt chuỗi ở bên tay trái

// rtrim(): giống như hàm trim tuy nhiên chỉ cắt chuỗi ở bên tay phải
// strtolower()
$str6 = "tran huu thien";
// echo strtolower($str6);
// strtoupper()
// ucwords(): chuyển tất cả các chữ cái đầu tiên của mỗi từ thành viết hoa
// ucfirst(): chuyển ký tự đầu tiên của chuỗi thành chữ viết hoa
// echo ucwords($str6);

// strlen(): trả về số lượng ký tự trong chuỗi
// str_split(): chuyển chuỗi thành mảng, dựa vào số lượng ký tự
$str7 = str_split($str6, 5);
// var_dump($str7);

// str_replace(): tìm kiếm và thay thế ký tự trong chuỗi
$str8 = "cao dang fpt polytechnic thuoc tap doan fpt";
$str9 = str_replace("fpt", "microsoft", $str8);
// echo $str9;
// substr()
$str10 = "123456789";
$str11 = substr($str10, 4, 3);
// echo $str11;
$str12 = "cao dang fpt polytechnic thuoc tap doan fpt";
$index = strpos($str12, "fpt", 10);
// var_dump($index);
$str14 = "123456";
// password_hash(): mã hóa mật khẩu, có thể cùng 1 đoạn mật khẩu nhưng mỗi lần mã hóa sẽ ra chuỗi khác nhau
echo password_hash($str14, PASSWORD_DEFAULT);
echo "<br>";
// password_verify(): kiểm tra chuỗi nhập vào và mật khẩu được lưu trữ có khớp nhau hay không
var_dump(password_verify($str14, '$2y$10$1Vk4oi7ASnnxnp8oPxf0UOMjhyVJou57thcYnGtew4vtzBIER4k62'));
/**
password_hash()

password_verify()
 */
?>