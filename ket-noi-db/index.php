<?php
// tạo kết nối
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1_lab4;charset=utf8", "root", "12345678");
// tạo câu lệnh sql
$sql = "select * from products";
// nạp câu sql vào kết nối
$statement = $connect->prepare($sql);
// thực thi câu sql với db
$statement->execute();
// thu lại kết quả trả về từ csdl
$products = $statement->fetchAll(); // fetch: lấy 1 bản ghi đầu tiên thỏa mãn câu lệnh ssql
// echo "<pre>";
// var_dump($products);
// dựa vào mảng products hiển thị ra 1 table danh sách các sản phẩm 

?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><?= $value['quantity'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>