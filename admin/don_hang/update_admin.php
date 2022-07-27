<?php
session_start();
require_once "./../../dao/don_hang.php";
$data = [
    'ma_ct_dh' => $_GET['ma_ct_dh'],
    'trang_thai' => "Đang giao",
];
update_ct_dh($data);
header("Location: index.php");
?>
