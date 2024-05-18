<?php
	$isBaiVietPage = isset($_GET['quanly']) && $_GET['quanly'] === 'baiviet';
	$isShowSidebar = (
		(isset($_GET['quanly']) && ($_GET['quanly'] === 'danhmucsanpham' || $_GET['quanly'] === 'sanpham')) 
		&& !$isBaiVietPage
	);
	?>

	<div id="main">
		<div class="app_container">
			<div class="grid">
				<div class="grid__row app_content">
				<?php if ($isShowSidebar) : ?>
					<div class="col-2 p-2">
							<nav class="category">
								<h3 class="category__heading">Danh mục</h3>
							<?php
							include("sidebar/sidebar.php");
							?>
							</nav>
					</div>
					<?php endif; ?>
					<?php if ($isShowSidebar) : ?>
					<div class="col-10 p-2">
						<div class="maincontent">
							<?php
							if (isset($_GET['quanly'])) {
								$tam = $_GET['quanly'];
							} else {
								$tam = '';
							}
							if ($tam == 'danhmucsanpham') {
								include("main/danhmuc.php");
							} elseif ($tam == 'giohang') {

								include("main/giohang.php");
							} elseif ($tam == 'danhmucbaiviet') {
								include("main/danhmucbaiviet.php");
							} elseif ($tam == 'baiviet') {
								include("main/baiviet.php");
							} elseif ($tam == 'tintuc') {
								include("main/tintuc.php");
							} elseif ($tam == 'lienhe') {
								include("main/lienhe.php");
							} elseif ($tam == 'sanpham') {
								include("main/sanpham.php");
							} elseif ($tam == 'dangky') {
								include("main/dangky.php");
							} elseif ($tam == 'thanhtoan') {
								include("main/thanhtoan.php");
							} elseif ($tam == 'dangnhap') {
								include("main/dangnhap.php");
							} elseif ($tam == 'timkiem') {
								include("main/timkiem.php");
							} elseif ($tam == 'camon') {
								include("main/camon.php");
							} elseif ($tam == 'thaydoimatkhau') {
								include("main/thaydoimatkhau.php");
							} elseif ($tam == 'vanchuyen') {
								include("main/vanchuyen.php");
							} elseif ($tam == 'thongtinthanhtoan') {
								include("main/thongtinthanhtoan.php");
							} elseif ($tam == 'donhangdadat') {
								include("main/donhangdadat.php");
							} elseif ($tam == 'lichsudonhang') {
								include("main/lichsudonhang.php");
							} elseif ($tam == 'xemdonhang') {
								include("main/xemdonhang.php");
							} else {
								include("main/index.php");
							}
							?>
						</div>
					</div>
					<?php endif; ?>
					<?php if (!$isShowSidebar) : ?>
					<div class="grid__full-width">
						<div class="maincontent">
							<?php
							if (isset($_GET['quanly'])) {
								$tam = $_GET['quanly'];
							} else {
								$tam = '';
							}
							if ($tam == 'danhmucsanpham') {
								include("main/danhmuc.php");
							} elseif ($tam == 'giohang') {

								include("main/giohang.php");
							} elseif ($tam == 'danhmucbaiviet') {
								include("main/danhmucbaiviet.php");
							} elseif ($tam == 'baiviet') {
								include("main/baiviet.php");
							} elseif ($tam == 'tintuc') {
								include("main/tintuc.php");
							} elseif ($tam == 'lienhe') {
								include("main/lienhe.php");
							} elseif ($tam == 'sanpham') {
								include("main/sanpham.php");
							} elseif ($tam == 'dangky') {
								include("main/dangky.php");
							} elseif ($tam == 'thanhtoan') {
								include("main/thanhtoan.php");
							} elseif ($tam == 'dangnhap') {
								include("main/dangnhap.php");
							} elseif ($tam == 'timkiem') {
								include("main/timkiem.php");
							} elseif ($tam == 'camon') {
								include("main/camon.php");
							} elseif ($tam == 'thaydoimatkhau') {
								include("main/thaydoimatkhau.php");
							} elseif ($tam == 'vanchuyen') {
								include("main/vanchuyen.php");
							} elseif ($tam == 'thongtinthanhtoan') {
								include("main/thongtinthanhtoan.php");
							} elseif ($tam == 'donhangdadat') {
								include("main/donhangdadat.php");
							} elseif ($tam == 'lichsudonhang') {
								include("main/lichsudonhang.php");
							} elseif ($tam == 'xemdonhang') {
								include("main/xemdonhang.php");
							} else {
								include("main/index.php");
							}
							?>
						</div>
					</div>
					<?php endif; ?>
				</div>

			</div>
		</div>