<?php
require_once './db.php';
// lấy ra danh sách các sản phẩm và danh mục của từng sản phẩm
$getProductsQuery = "SELECT
                        p.*,
                        c.NAME AS cate_name 
                    FROM
                        products p
                        JOIN categories c ON p.cate_id = c.id";
$products = executeQuery($getProductsQuery, true);
// lấy ra danh sách danh mục
$getCategoryQuery = "select * from categories";
$categories = executeQuery($getCategoryQuery, true);


?>
<form action="" method="get">
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            <option value="">Chọn tất cả</option>
            <?php foreach($categories as $ca): ?>
                <option value="<?= $ca['id'] ?>"><?= $ca['name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
</form>

<table>
    <thead>
        <th>ID</th>
        <th>Tên sp</th>
        <th>Danh mục</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>
            <a href="">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($products as $p): ?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['name']?></td>
                <td><?= $p['cate_name']?></td>
                <td><?= $p['price']?></td>
                <td><?= $p['quantity']?></td>
                <td>
                    <a href="">Sửa</a>
                    <a href="">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>