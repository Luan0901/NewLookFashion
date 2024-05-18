
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
	$soluong = $row_chitiet['soluong'];
	$het_hang_message = $soluong == 0 ? "<span style='color: red;'>Hết hàng</span>" : $soluong;
?>
	<div class="container-fluid"> <!-- Container cao nhất với độ rộng 100% -->
		<div class="row "> <!-- Dòng 1 -->
			<div class="hinhanh_sanpham col-5">
				<img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
			</div>
			<form class="col-7 p-3 w-100" method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
				<h3 class="productdetail-hd p-4"><?php echo $row_chitiet['tensanpham'] ?></h3>
				<div class="product-details p-4">
					<p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
					<p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
					<p>Số lượng: <?php echo $het_hang_message ?></p>
					<p style="font-weight: bold;">Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') ?> <span style="margin-right:5pxt;">VND</span></p>
				</div>
				<?php if ($soluong > 0) : ?>
					<div class="row justify-content-center">
						<button class="btn-themgiohang" name="themgiohang" type="submit">
							<span>Thêm vào giỏ hàng</span>
						</button>
					</div>
				<?php endif; ?>
			</form>
		</div>
		<div class="row" style="margin-top:20px;"> <!-- Dòng 2 -->
			<div class="tabs">
				<ul id="tabs-nav">
					<li><a href="#tab1">Thông số kỹ thuật</a></li>
					<li><a href="#tab2">Nội dung chi tiết</a></li>

				</ul> <!-- END tabs-nav -->
				<div id="tabs-content" class="tabs-content">
					<div id="tab1" class="tab-content">
						<?php echo $row_chitiet['tomtat'] ?>
					</div>
					<div id="tab2" class="tab-content">
						<?php echo $row_chitiet['noidung'] ?>
					</div>
				</div>
			</div>
		</div>
	<?php
}
	?>


	<style>
		.productdetail-hd {
			font-size: 24px;
			/* Kích thước chữ */
			font-weight: bold;
			/* Đậm */
			color: #222831;
			/* Màu chữ */
			text-align: start;
		}

		.product-details p,
		.tabs-content {
			justify-content: space-around;
			font-size: 20px;
			/* Cỡ chữ */
			color: #31363F;
			/* Màu chữ */
			margin-bottom: 18px;
			/* Khoảng cách giữa các thông số */
			text-align: start;
		}

		.tabs {
			width: 100%;

			border-radius: 5px 5px 5px 5px;
		}

		ul#tabs-nav {
			list-style: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			/* Loại bỏ scroll khi có nhiều tab */
			background-color: #222831;
			/* Màu nền của thanh nav */

		}

		ul#tabs-nav li {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			float: left;
			font-weight: normal;
			font-size: 18px;
			padding: 8px 12px;
			cursor: pointer;

			transition: background-color 0.3s ease;
			/* Hiệu ứng chuyển đổi màu nền */
		}

		ul#tabs-nav li:hover,
		ul#tabs-nav li.active {
			background: #76ABAE;

		}

		ul#tabs-nav li.active {
			font-weight: bold;

		}

		#tabs-nav li a {
			text-decoration: none;
			color: #fff;
		}

		.tab-content {

			padding: 10px;
			background-color: #EEEEEE;
		}
	</style>