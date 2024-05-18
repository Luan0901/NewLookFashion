<?php
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>
<p>Sửa bài viết</p>

	<?php
	while ($row = mysqli_fetch_array($query_sua_bv)) {
	?>
		<form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
		<div class="form-group">
			<div class="form-col">
				<div>
					<label class="form-label">Tên bài viết</label>
					<input type="text" class="form-control" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet">
				</div>
				<div class="form-group">
					<label class="form-label">Hình ảnh</label>
					<img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
				</div>
			</div>

		<div class="form-row" >
			<div class="col-md-6">
				<label class="form-label">Tình trạng</label>
					<select class="form-select"name="tinhtrang">
						<?php
						if ($row['tinhtrang'] == 1) {
						?>
							<option value="1" selected>Kích hoạt</option>
							<option value="0">Ẩn</option>
						<?php
						} else {
						?>
							<option value="1">Kích hoạt</option>
							<option value="0" selected>Ẩn</option>
						<?php
						}
						?>
					</select>
			</div>
			<div class="col-md-6">
        		<label class="form-label">Danh mục bài viết</label>
        		<select class="form-select"  name="danhmuc">
						<?php
						$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
						$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
						while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {

							if ($row_danhmuc['id_baiviet'] == $row['id_danhmuc']) {
						?>
								<option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
							<?php
							} else {
							?>
								<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
						<?php
							}
						}
						?>
	    		</select>
     		</div>
		</div>
		
	</div>
	
	<div class="form-group">
		<label class="form-label">Tác giả</label>
		<textarea type="text" name="tomtat" class="form-control"  placeholder=""><?php echo $row['tomtat'] ?></textarea>
	</div>
	<div class="form-group">
		<label class="form-label">Nội dung</label>
		<textarea type="text" name="noidung" class="form-control"  placeholder=""><?php echo  $row['noidung'] ?></textarea>
	</div>

  	<button type="submit" name="suabaiviet"  class="btn btn-dark">Sửa bài viết</button>
		</form>
	<?php
	}
	?>
