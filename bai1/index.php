<?php 

    $name = "tran huu thien";
    $age = 30;
    $birthDate = "1991-02-03";

    $isMarried = true;

    $fa21Class = [
        'php1' => [
            'WEB2013.1'
        ],
        'WEB1013' => [
            'EC17202', 'EC17203'
        ],
        'PRO1014' => [
            'WE16301', 'WE16302'
        ]
    ];

    foreach($fa21Class as $mon => $danh_sach_lop){
        echo "<p>Tên môn: $mon </p>";
        echo "<p>Danh sách lớp:</p>";
        foreach ($danh_sach_lop as $ten_lop) {
            echo "<li>$ten_lop</li>";
        }
    }

?>
<!-- hiển thị thông tin cá nhân -->
<!-- hiển thị danh sách các lớp đang dạy trong kỳ fall 2021 -->

