
<style>
    button{
        cursor: pointer;
        border: none;
        background: none;
        font-size: 16px;
        font-weight: bold;
        color: #d1ccc5;
    }
    button:hover{
        color: #000;
    }
</style>
<div class="admin_dm">
    <ul>
        <a href="/thoi_trang_adidas/admin/index.php">
            <li>
            <img src="" alt="">
                <p ><b>Trang chủ</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/thong_ke/index.php">
            <li>
            <img src="" alt="">
                <p ><b>Thống kê Web</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/hang_hoa/">
            <li><img src="" alt="">
                <p ><b>Tất Cả Sản Phẩm</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/danh_muc/">
            <li><img src="" alt="">
                <p><b>Quản Trị Danh Mục</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/binh_luan/">
            <li><img src="" alt="">
                <p><b>Quản Lí Bình Luận</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/khach_hang/">
            <li><img src="" alt="">
                <p><b>Quản Lí khách hàng</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/don_hang/">
            <li><img src="" alt="">
                <p><b>Quản Lí đơn hàng</b>
            </li>
        </a>
        <a href="/thoi_trang_adidas/admin/slider/">
            <li><img src="" alt="">
                <p><b>Quản Lí slider</b>
            </li>
        </a>
        
        <a>
            <li><img src="" alt="">
            <form action="" method="post">
                <?php 
                if (isset($_POST['thoat'])){
                    session_destroy();
                    header("Location: /thoi_trang_adidas/");
                    die;
                }
                ?>
                <b><button name="thoat">Đăng Xuất</button></b>
            </form>
            </li>
        </a>
    </ul>
</div>
