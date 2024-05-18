<h3 style="font-weight: bold">Thêm bài viết</h3>
<form class="form-group" method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
	<div class="form-group">
		<div class="form-col">
			<div>
				<label class="form-label">Tên bài viết</label>
				<input type="text" class="form-control" placeholder="" name="tenbaiviet">
			</div>
			<div class="form-group">
				<label class="form-label">Hình ảnh</label>
				<input type="file" class="form-control-file" name="hinhanh">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-6">
				<label class="form-label">Tình trạng</label>
				<select class="form-select" name="tinhtrang">
					<option value="1">Kích hoạt</option>
					<option value="0">Ẩn</option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="form-label">Danh mục bài viết</label>
				<select class="form-select" name="danhmuc">
					<?php
					$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
					$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
					while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					?>
						<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
					<?php
					}
					?>
				</select>
			</div>
		</div>

	</div>

	<div class="form-group">
		<label class="form-label">Tác giả</label>
		<textarea type="text" name="tomtat" class="form-control" placeholder=""></textarea>
	</div>
	<div class="form-group">
		<label class="form-label">Nội dung</label>
		<textarea type="text" name="noidung" class="form-control" placeholder=""></textarea>
	</div>

	<button type="submit" name="thembaiviet" class="btn btn-dark">Thêm bài viết</button>
</form>