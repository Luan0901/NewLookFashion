<div class="main--content">
    <div class="card-container">
        <?php
        // Hiển thị nội dung chính dựa trên action và query
        if (isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
            if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
                include("modules/quanlydanhmucsp/them.php");
                include("modules/quanlydanhmucsp/lietke.php");
            } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
                include("modules/quanlydanhmucsp/sua.php");
            } elseif ($tam == 'quanlysp' && $query == 'them') {
                include("modules/quanlysp/them.php");
                include("modules/quanlysp/lietke.php");
            } elseif ($tam == 'quanlysp' && $query == 'sua') {
                include("modules/quanlysp/sua.php");
            } elseif ($tam == 'quanlydonhang' && $query == 'lietke') {
                include("modules/quanlydonhang/lietke.php");
            } elseif ($tam == 'donhang' && $query == 'xemdonhang') {
                include("modules/quanlydonhang/xemdonhang.php");
            } elseif ($tam == 'quanlydanhmucbaiviet' && $query == 'them') {
                include("modules/quanlydanhmucbaiviet/them.php");
                include("modules/quanlydanhmucbaiviet/lietke.php");
            } elseif ($tam == 'quanlydanhmucbaiviet' && $query == 'sua') {
                include("modules/quanlydanhmucbaiviet/sua.php");
            } elseif ($tam == 'quanlybaiviet' && $query == 'them') {
                include("modules/quanlybaiviet/them.php");
                include("modules/quanlybaiviet/lietke.php");
            } elseif ($tam == 'quanlybaiviet' && $query == 'sua') {
                include("modules/quanlybaiviet/sua.php");
            } elseif ($tam == 'quanlyweb' && $query == 'capnhat') {
                include("modules/thongtinweb/quanly.php");
            } elseif ($tam == 'taikhoan' && $query == 'them') {
                include("modules/taikhoan/lietke.php");
                include("modules/taikhoan/them.php");
            } elseif ($tam == 'quyen' && $query == 'them') {
                include("modules/quyen/them.php");
            } else {
                include("modules/dashboard.php");
            }
        } else {
            include("modules/dashboard.php");
        }
        ?>
    </div>
</div>

