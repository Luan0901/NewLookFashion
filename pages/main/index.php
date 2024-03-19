<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 10) - 10;
}
// Thực hiện truy vấn SQL chỉ lấy sản phẩm có tình trạng khác 0
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tinhtrang != 0 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

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

<div style="clear:both;"></div>

<?php
// Tính lại số lượng sản phẩm và số lượng trang
$sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham WHERE tinhtrang != 0");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count / 10);

// Đảm bảo rằng trang hiện tại không vượt quá số lượng trang mới tính được
if ($page > $trang) {
    $page = $trang;
}
?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item <?php if ($page <= 1) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="index.php?trang=<?php echo $page - 1; ?>">&laquo;</a>
        </li>
        <?php
        for ($i = 1; $i <= $trang; $i++) {
        ?>
            <li class="page-item <?php if ($i == $page) {
                                        echo 'active';
                                    } ?>">
                <a class="page-link" href="index.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
        <?php
        }
        ?>
        <li class="page-item <?php if ($page >= $trang) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="index.php?trang=<?php echo $page + 1; ?>">&raquo;</a>
        </li>
    </ul>
<<<<<<< HEAD
</nav>
=======
</nav>
>>>>>>> 0c72b891b183e0e40642823411ba9b9d09a6fbc8
