<?php
session_start();
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/khach_hang.php";
$ht_hh = getAll_hh();
$ht_hhm = getAll_hhm();
$ht_dm = getAll_dm();
$dskhachhang = getAll_kh();

require_once "../dao/slider.php";
$ht_slider = getAll_slider();

?>

<?php require_once "../dao/slider.php";
$ht_slider = getAll_slider(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời trang ADIDAS</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\logo_white.png" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .swiper {
        width: 100%;
        height: 662px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 90%;
        object-fit: cover;
    }

    .seach_sanpham input {
        border-radius: 4px;
        height: 27px;
        border: 1.6px solid black;
        margin-top: 75px;
        padding: 3px;
    }

    .fs_ftrow_clearfix {
        display: grid;
        grid-template-columns: 265px 247px 255px 403px;
        float: right;
        margin: 30px 0px;
    }

    menu nav ul {
        padding-top: 75px;
        width: 345px;
    }
</style>
</head>

<body>
    <div class="container">
        <?php require_once "./layout/header.php"; ?>
        <hr>

        <div class="contact-area pt-115 pb-120">
            <div class="container">
                <div class="contact-info-wrap-3 pb-85">
                    <h3>Thông tin liên lạc</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-location-pin "></i>
                                <h4>Địa chỉ của chúng tôi</h4>
                                <p> Phố Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                                <ul>
                                    <li><i class="icon-screen-smartphone"></i> 0965 868 686 </li>
                                    <li><i class="icon-envelope "></i> <a href=""> thoitrangadidas980@gamil.com </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-clock "></i>
                                <h4>Giờ mở cửa</h4>
                                <p>Thứ 2 - Thứ 7: 7:00 sáng - 5:00 chiều </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <hr>
        <br>
        <br>
        <hr>

        <footer>
            <div class="fs-footer">
                <div class="fs_ftrow_clearfix">
                    <div class="fs-ftcol fs-ftcol1">
                        <ul class="fs-ftul">
                            <li><a target="_blank" rel="nofollow noopener" href="#">Giới thiệu về công ty</a></li>
                            <li><a href="" title="Câu hỏi thường gặp mua hàng">Câu hỏi thường gặp mua hàng</a></li>
                            <li><a href="" title="">Chính sách bảo mật</a></li>
                            <li><a href="" title="">Quy chế hoạt động</a></li>
                            <li><a href="" title="">Kiểm tra hóa đơn điện tử</a></li>
                            <li><a href="" title="">Tra cứu thông tin bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="fs-ftcol fs-ftcol1">
                        <ul class="fs-ftul">
                            <li><a href="https://www.facebook.com/congtuyen.791/">liên hệ chủ cửa hàng cơ sở 1</a></li>
                            <li><a href="https://www.facebook.com/duc.mattoyi" title="">liên hệ chủ cửa hàng cơ sở 2</a></li>
                            <li><a href="https://www.facebook.com/ducpho311" title="">liên hệ chủ cửa hàng cơ sở 3</a></li>
                        </ul>
                    </div>
                    <div class="fs-ftcol  fs-ftcol2">
                        <ul class="fs-ftr2 clearfix">
                            <li>
                                <p class="fs-ftrtit" style="font-size: 15px;">Tư vấn mua hàng (Miễn phí)</p>
                                <a href="tel:0978942425" title="">0983.358.791 </a> <span>(Nhánh 1)</span>
                                <p class="fs-ftrtit">Hỗ trợ kỹ thuật</p>
                                <a href="tel:0702288806" title="">070.22.88806 </a><span>(Nhánh 2)</span>
                            </li>
                            <li>
                                <p class="fs-ftrtit" style="font-size: 15px;">Góp ý, khiếu nại dịch vụ (8h00-22h00)</p>
                                <a href="tel:18006616" title="">09.789.42425</a><br>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-ftrright">
                        <div class="fs-ftr1">
                            <p class="fs-ftrtit">Vị trí cửa hàng:</p>
                            <ul class="fs-frgbhg">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044335!2d105.7445984147235!3d21.03812778599325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1638782205017!5m2!1svi!2s" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/images/icon-img/pin.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
</body>


</html>