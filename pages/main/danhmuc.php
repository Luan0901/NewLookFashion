<?php
// Số sản phẩm trên mỗi trang
$products_per_page = 5;

// Trang hiện tại, mặc định là trang 1 nếu không có tham số truyền vào
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính chỉ số bắt đầu của sản phẩm trên trang hiện tại
$start_index = ($current_page - 1) * $products_per_page;

// Câu truy vấn sản phẩm với phân trang
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC LIMIT $start_index, $products_per_page";
$query_pro = mysqli_query($mysqli, $sql_pro);

// Câu truy vấn để đếm tổng số sản phẩm trong danh mục
$count_sql = "SELECT COUNT(*) AS total FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'";
$count_query = mysqli_query($mysqli, $count_sql);
$count_row = mysqli_fetch_assoc($count_query);
$total_products = $count_row['total'];

// Tính số trang cần thiết
$total_pages = ceil($total_products / $products_per_page);
?>

<!-- Hiển thị danh sách sản phẩm -->
<div class="row">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="grid__column-2-4">
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-item">
                <img class="img img-responsive" width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                <p class="price_product"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
        </div>
    <?php
    }
    ?>
</div>

<!-- Hiển thị phân trang -->
<div class="pagination">
    <?php if ($total_pages > 1) : ?>
        <?php if ($current_page > 1) : ?>
            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $_GET['id'] ?>&page=<?php echo ($current_page - 1) ?>" class="page-link">&laquo; Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $_GET['id'] ?>&page=<?php echo $i ?>" class="page-link <?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i ?></a>
        <?php endfor; ?>

        <?php if ($current_page < $total_pages) : ?>
            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $_GET['id'] ?>&page=<?php echo ($current_page + 1) ?>" class="page-link">Next &raquo;</a>
        <?php endif; ?>
    <?php endif; ?>
</div>

<style>
    .page-link.active {
        color: #fff;
        background: linear-gradient(0, #101010, #71716a);
        border-color: #fff;
    }
</style>