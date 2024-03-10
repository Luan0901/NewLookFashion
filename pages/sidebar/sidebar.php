<div id="danhmucsanpham">
	<ul class="list_sidebar" id="list_danhmucsanpham">
		<?php
		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
		$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
		while ($row = mysqli_fetch_array($query_danhmuc)) {
			$active_class = ""; // Reset 'active_class' before each iteration

			// Check if current category ID matches the requested category ID (from URL)
			if (isset($_GET['id']) && $_GET['id'] == $row['id_danhmuc']) {
				$active_class = "active"; // Add 'active' class if category matches
			}
		?>
			<li class="sidebar-item <?php echo $active_class; ?>" id="item_danhmucsanpham">
				<a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
			</li>
		<?php
		}
		?>
	</ul>
</div>