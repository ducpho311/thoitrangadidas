<?php
// require_once "./../../dao/hang_hoa.php";
require_once "tk_khach_hang.php";
require_once "./../../dao/hang_hoa.php";
$tk_dm = thong_ke_dm();
$tk_hh = thong_ke_hh();
$gia_max = max_hh();
$gia_min = min_hh();
$ht_hht = top_10_hh();
// var_dump($gia_max); die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thống kê</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\admin.png" />
    <style>
        .tieude{
            text-align: center;
            font-size: 50px;
        }
    </style>
</head>
<body>
<div class="container">
        <main>
            <div class="text_account_admin">
                <img src="../../view/img/images.png" alt="">
                <h4>Trang Quản Trị</h4>
            </div>
            <hr>
            <div class="ft_admin">
                <?php
                /**
                 * menu chức năng
                 */
                require_once "../menu_qt.php";
                ?>
                <div class="admin_function">
                    <br>
                    <div class="tieude">
                    <p >Thống kê</p>
                    </div>
                    <div class="text_admin_funcition12">
                        <p>Theo danh mục</p>
                        <p style="color: blue;">
                    </div>
                    <br><br>
                    <table class="category_width">
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>giá thấp nhất</th>
                            <th>giá cao nhất</th>
                        </tr>
                        <?php for ($i = 0; $i < count($tk_dm); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $tk_dm[$i]['ten_dm'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_dm[$i]['sl'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_dm[$i]['gt'] ?>
                                </td>
                                
                                <td>
                                    <?php echo $tk_dm[$i]['gc'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table><br>
                    <div class="text_admin_funcition12">
                        <p>Top 10 sản phẩm</p>
                        <p style="color: blue;">
                    </div>
                    <br><br>
                    <table class="category_width">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Lượt xem</th>
                        </tr>
                        <?php for ($i = 0; $i < count($ht_hht); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $ht_hht[$i]['ten_hh'] ?>
                                </td>
                                
                                <td>
                                    <?php echo $ht_hht[$i]['luot_xem'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table><br>
                    
                    <div class="add_1">
                        <a href="bieu_do.php"><button type="submit" class="bnt" name="submit" style="cursor: pointer; border-radius: 10px; width:100px;">Biểu đồ</button></a>
                    </div>
                </div>
                
            </div>
            
    </div>
        
</body>
</html>