<?php
// $_GET
// $_POST
// http://localhost/php1/bai2/form.php?name=thienth&age=30&major=tkw
// tạo ra form điền thông tin cá nhân (họ tên, 
// mã sinh viên, khóa) 
// và điểm của các môn xd trang web (web1013), 
// php1 (web2033)
// sau đó submit lên file test.php => hiển thị thông tin của form


?>
<!-- <a href="test.php?name=someone&gender=2">Click me</a>
<form action="test.php" method="get">
    <input type="text" name="name">
    <br>
    <select name="gender" id="">
        <option value="1">Nam</option>
        <option value="2">Nữ</option>
        <option value="3">Khác</option>
    </select>
    <br>
    <button type="submit">Submit</button>
</form> -->
<form action="test.php" method="get">
    <div>
        <label for="">Họ và tên</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Mã sinh viên</label>
        <input type="text" name="roll_number">
    </div>
    <div>
        <label for="">Khóa</label>
        <input type="text" name="course_number">
    </div>
    <div>
        <label for="">Điểm môn Xây dựng trang web</label>
        <input type="text" name="web1013">
    </div>
    <div>
        <label for="">Điểm môn Lập trình PHP 1</label>
        <input type="text" name="web2033">
    </div>
    <div>
        <button type="submit">Gửi</button>
    </div>
</form>
