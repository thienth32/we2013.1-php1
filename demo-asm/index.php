<?php
session_start();
require_once './db.php';
$searchCateId = isset($_GET['cate_id']) ? $_GET['cate_id'] : "";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
// lấy ra danh sách các sản phẩm và danh mục của từng sản phẩm
$getProductsQuery = "SELECT
                        p.*,
                        c.NAME AS cate_name 
                    FROM
                        products p
                        JOIN categories c ON p.cate_id = c.id
                    where p.name like '%$keyword%' ";

if(empty($searchCateId) == false){
    $getProductsQuery .= " and cate_id = $searchCateId";
}
$products = executeQuery($getProductsQuery, true);
// lấy ra danh sách danh mục
$getCategoryQuery = "select * from categories";
$categories = executeQuery($getCategoryQuery, true);


?>
<?php if(isset($_SESSION['auth'])):?>
    <h3>Hello, <?= $_SESSION['auth']['name']?></h3>
<?php endif?>
<form action="" method="get">
    <div>
        <label for="">Từ khóa</label>
        <input type="text" name="keyword" value="<?= $keyword ?>">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            <option value="">Chọn tất cả</option>
            <?php foreach($categories as $ca): ?>
                <?php
                    $selected = $ca['id'] == $searchCateId ? "selected" : "";
                ?>
                <option <?= $selected ?> value="<?= $ca['id'] ?>"><?= $ca['name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <button type="submit">Tìm kiếm</button>
    </div>
</form>

<table>
    <thead>
        <th>ID</th>
        <th>Tên sp</th>
        <th>Danh mục</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>
            <?php if(isset($_SESSION) && $_SESSION['auth']['role'] == 1): ?>
                <a href="">Tạo mới</a>
            <?php endif ?>
        </th>
    </thead>
    <tbody>
        <?php foreach($products as $p): ?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['name']?></td>
                <td><?= $p['cate_name']?></td>
                <td>
                    <img src="<?= $p['image']?>" width="100">
                </td>
                <td><?= $p['price']?></td>
                <td><?= $p['quantity']?></td>
                <td>
                    <?php if(isset($_SESSION) && $_SESSION['auth']['role'] == 1): ?>
                        <a href="edit-form.php?id=<?= $p['id'] ?>">Sửa</a>
                        <a href="">Xóa</a>
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>