<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_login.php" method="post">
        <div class="">
            <label for="">Email</label>
            <input type="text" name="email">
            <?php if(isset($_GET['email'])):?>
                <p style="color: red;"><?= $_GET['email'] ?></p>
            <?php endif?>
        </div>
        <div class="">
            <label for="">Password</label>
            <input type="password" name="password">
            <?php if(isset($_GET['password'])):?>
                <p style="color: red;"><?= $_GET['password'] ?></p>
            <?php endif?>
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</body>
</html>