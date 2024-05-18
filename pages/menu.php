<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);


?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangky']);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%; font-size: 18px;">


	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto" style="margin-left: 60px;">
			<li class="nav-item active">
				<a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ<span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item"><a class="nav-link" href="index.php?quanly=tintuc"><i class="fa-regular fa-newspaper"></i> Tin tức</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?quanly=lienhe"><i class="fa-solid fa-phone"></i> Liên hệ</a></li>

		</ul>
		