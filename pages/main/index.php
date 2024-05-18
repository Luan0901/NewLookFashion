<?php
if (isset($_GET['quanly']) && $_GET['quanly'] == 'trangchu') {
    // Xác định trang hiện tại
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }

    // Số lượng sản phẩm trên mỗi trang
    $items_per_page = 15;

    // Truy vấn tổng số lượng sản phẩm
    $sql_count = "SELECT COUNT(*) AS total FROM tbl_sanpham";
    $query_count = mysqli_query($mysqli, $sql_count);
    $row_count = mysqli_fetch_assoc($query_count);
    $total_items = $row_count['total'];

    // Tính tổng số trang
    $total_pages = ceil($total_items / $items_per_page);

    // Tính vị trí bắt đầu của sản phẩm trong truy vấn dữ liệu
    $start_from = ($page - 1) * $items_per_page;

    // Truy vấn dữ liệu từ cơ sở dữ liệu
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $start_from, $items_per_page";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    // Hiển thị sản phẩm
    echo '<div class="row">';
    while ($row = mysqli_fetch_array($query_pro)) {
        echo '<div class="grid__column-2-4">';
        echo '<a href="index.php?quanly=sanpham&id=' . $row['id_sanpham'] . '" class="product-item">';
        echo '<img class="img img-responsive" width="100%" src="admincp/modules/quanlysp/uploads/' . $row['hinhanh'] . '">';
        echo '<p class="title_product">' . $row['tensanpham'] . '</p>';
        echo '<p class="price_product">' . number_format($row['giasp'], 0, ',', '.') . 'vnđ</p>';
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';

    // Hiển thị phân trang
    echo '<nav aria-label="Page navigation">';
    echo '<ul class="pagination">';
    echo '<li class="page-item ' . ($page <= 1 ? 'disabled' : '') . '">';
    echo '<a class="page-link" href="index.php?quanly=trangchu&trang=' . ($page - 1) . '">&laquo;</a>';
    echo '</li>';
    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '">';
        echo '<a class="page-link" href="index.php?quanly=trangchu&trang=' . $i . '">' . $i . '</a>';
        echo '</li>';
    }
    echo '<li class="page-item ' . ($page >= $total_pages ? 'disabled' : '') . '">';
    echo '<a class="page-link" href="index.php?quanly=trangchu&trang=' . ($page + 1) . '">&raquo;</a>';
    echo '</li>';
    echo '</ul>';
    echo '</nav>';
}
?>