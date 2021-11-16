<?php

$arrpasss = [
    "123456",
    "123456",
    'tranhuuthien',
    '01011991',
    '02011991',
];

foreach ($arrpasss as $key => $value) {
    // insert into password bank
    // mật khẩu md5
    // mật khẩu sha1
    $md5pass = md5($value);
    $sha1pass = sha1($value);
    // 'insert into password_bank (original, md5_hash, sha1_hash) values ($value, $md5pass, $sha1pass)';
}

$boss_password = "00c66aaf5f2c3f49946f15c1ad2ea0d3";
// select original from password_bank where md5_hash = $boss_password or sha1_hash = $boss_password;
// => mật khẩu gốc



?>