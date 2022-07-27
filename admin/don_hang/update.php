<?php
session_start();
require_once "./../../dao/don_hang.php";
$data = [
    'ma_ct_dh' => $_GET['ma_ct_dh'],
    'trang_thai' => "Đã hủy",
];
update_ct_dh($data);
$_SESSION['huy_tk'] = '<script>alert("Đơn hàng bạn đã hủy thành công!")</script>';
header("Location: /thoi_trang_adidas/");
?>
