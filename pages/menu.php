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

			<!-- <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list"></i>
					Danh mục sản phẩm
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 18px;">
					<?php
					while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					?>
						<a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
					<?php
					}
					?>
				</div>
			</li> -->



		</ul>
		<!-- <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Từ khóa..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="timkiem" type="submit">Tìm kiếm</button>
    </form> -->
	</div>
</nav>


<!-- 
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php
				while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
				?>
				<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				}
				?>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>

				<?php
				if (isset($_SESSION['dangky'])) {

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				} else {
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				}
				?>
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
				
					
				
			</ul>
			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
				</form>
			</p>
		</div> -->