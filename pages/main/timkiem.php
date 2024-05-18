<div class="container-fluid p-3">
<div class="row">
<?php


if(isset($_POST['timkiem'])){
    $_SESSION['tukhoa'] = $_POST['tukhoa'];
} else if(isset($_SESSION['tukhoa'])) {
    // Nếu không có yêu cầu tìm kiếm mới, sử dụng từ khóa đã lưu trong session
    $_POST['tukhoa'] = $_SESSION['tukhoa'];
}
?>


<?php
    // Khởi tạo biến $tukhoa từ session hoặc từ yêu cầu POST
    $tukhoa = isset($_POST['tukhoa']) ? $_POST['tukhoa'] : '';

    // Logic phân trang
    $items_per_page = 5;
    $sql_count = "SELECT COUNT(*) AS total FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_count = mysqli_query($mysqli, $sql_count);
    $row_count = mysqli_fetch_assoc($query_count);
    $total_items = $row_count['total'];
    $total_pages = ceil($total_items / $items_per_page);
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start_from = ($page - 1) * $items_per_page;

    // Lấy dữ liệu sản phẩm
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' LIMIT $start_from, $items_per_page";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h2>Từ khoá tìm kiếm : <?php echo $tukhoa; ?></h2>
    <ul class="product_list">
        <?php
        while($row = mysqli_fetch_array($query_pro)){ 
        ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
                <p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                <p style="text-align: center;color:#d1d1d1"><?php echo $row['tendanhmuc'] ?></p>
            </a>
        </li>
        <?php
        } 
        ?>
    </ul>
	</div>


      <!-- Các liên kết phân trang -->
	  <div class="row justify-content-center">
	  <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php if ($page > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?quanly=timkiem&page=<?php echo ($page - 1); ?>&tukhoa=<?php echo urlencode($tukhoa); ?>">&laquo;</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="index.php?quanly=timkiem&page=<?php echo $i; ?>&tukhoa=<?php echo urlencode($tukhoa); ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($page < $total_pages) : ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?quanly=timkiem&page=<?php echo ($page + 1); ?>&tukhoa=<?php echo urlencode($tukhoa); ?>">&raquo;</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
	</div>
</div>