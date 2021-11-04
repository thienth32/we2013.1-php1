<?php
$name = $_GET['name'];
$roll_number = $_GET['roll_number'];
$course_number = $_GET['course_number'];
$web1013 = $_GET['web1013'];
$web2033 = $_GET['web2033'];

?>
<h2>Thông tin cá nhân</h2>
<p>
    <strong>Họ và tên: <?php echo $name ?></strong>
</p>
<p>Mã số sinh viên: <?php echo $roll_number?></p>
<p>Khóa: <?php echo $course_number?></p>
<p>Điểm môn XD Trang Web: <?php echo $web1013?></p>
<p>Điểm môn Lập trình PHP1: <?php echo $web2033?></p>