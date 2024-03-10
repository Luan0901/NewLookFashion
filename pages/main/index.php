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
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
	$query_pro = mysqli_query($mysqli, $sql_pro);

	?>
	<!-- <h3>Sản phẩm mơí nhất</h3> -->
	<div class="row">
		<?php
		while ($row = mysqli_fetch_array($query_pro)) {
		?>
			<div class="grid__column-2-4">
				<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-item">
					<img class="img img-responsive" width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
					<p class="title_product"> <?php echo $row['tensanpham'] ?></p>
					<p class="price_product"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
				</a>
			</div>
		<?php
		}
		?>
	</div>
	<div style="clear:both;"></div>
	<style type="text/css">
		ul.list_trang {
			padding: 0;
			margin: 0;
			list-style: none;
		}

		ul.list_trang li {
			float: left;
			padding: 5px 13px;
			margin: 5px;
			background: burlywood;
			display: block;
		}

		ul.list_trang li a {
			color: white;
			text-align: center;
			text-decoration: none;

		}
	</style>
	<?php
	$sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
	$row_count = mysqli_num_rows($sql_trang);
	$trang = ceil($row_count / 10);
	?>
	<!-- <p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p> -->

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
	</nav>