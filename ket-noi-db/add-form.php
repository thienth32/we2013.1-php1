<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-add.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="">Số lượng</label>
            <input type="text" name="quantity">
        </div>
        <div>
            <label for="">Ảnh sản phẩm</label>
            <input type="file" name="image">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>