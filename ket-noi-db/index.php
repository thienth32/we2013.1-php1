<?php
// tạo kết nối
require_once './db.php';
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
        <th>
            <a href="add-form.php">Tạo mới</a>
        </th>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><?= $value['quantity'] ?></td>
            <td>
                <a href="edit-form.php?id=<?= $value['id']?>">Sửa</a>
                <a href="remove.php?id=<?= $value['id']?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>