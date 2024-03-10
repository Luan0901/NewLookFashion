<h3 class="news-title">Bài viết mới nhất</h3>

<ul class="news-list">
	<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli, $sql_bv);

	while ($row_bv = mysqli_fetch_array($query_bv)) {
	?>
		<li class="news-item">
			<a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']; ?>">
				<div class="news-item-image">
					<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh']; ?>" alt="<?php echo $row_bv['tenbaiviet']; ?>" class="news-image">
				</div>
				<div class="news-item-content">
					<h4 class="news-item-title"><?php echo $row_bv['tenbaiviet']; ?></h4>
					<p class="news-item-summary"><?php echo $row_bv['tomtat']; ?></p>
				</div>
			</a>
		</li>
	<?php
	}
	?>
</ul>