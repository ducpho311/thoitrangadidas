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
        .tieude {
            text-align: center;
            font-size: 50px;
        }

        #chart_div {
            margin-left: 30px;
            width: 1000px;
            height: 500px;
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
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Danh mục', 'Thống kê hàng hóa'],
                                <?php
                                $i = 1;
                                foreach ($tk_dm as $val) :
                                    if ($i == count($val)) $trong = "";
                                    else $trong = ",";
                                    echo "['" . $val['ten_dm'] . "', " . $val['sl'] . "]" . $trong;
                                endforeach;
                                ?>
                            ]);

                            var options = {
                                title: 'Biểu đồ thống kê sản phẩm theo danh mục',
                                is3D: true,
                                chartArea: {
                                    width: '60%'
                                },
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <div id="chart_div"></div>

                    <script>
                        google.charts.load('current', {
                            packages: ['corechart', 'bar']
                        });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {

                            var data = google.visualization.arrayToDataTable([
                                ['Hàng hóa', 'Lượt xem', ],
                                <?php
                                $i = 1;
                                foreach ($ht_hht as $val_10) :
                                    if ($i == count($ht_hht)) $trong = "";
                                    else $trong = ",";

                                    echo "['" . $val_10['ten_hh'] . "', " . $val_10['luot_xem'] . "]" . $trong;
                                endforeach;
                                ?>
                            ]);

                            var options = {
                                title: 'Top 10 sản phẩm có lượt xem cao nhất',
                                chartArea: {
                                    width: '50%'
                                },
                                hAxis: {
                                    title: 'Số lượt xem',
                                    minValue: 0
                                },
                                vAxis: {
                                    title: 'Tên sản phẩm'
                                }
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script><br>
                </div>
            </div>
    </div>

</body>

</html>