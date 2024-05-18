<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>

<h3 style="font-weight: bold">Sửa danh mục bài viết</h3>

 <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
 	<?php
 		while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
 	?>
	  <div class="form-group">
		<div class="form-col">
			<div>
				<label class="form-label">Tên danh mục</label>
				<input type="text" class="form-control" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet">
			</div>
			<div>
				<label class="form-label">Thứ tự</label>	
				<input type="text" class="form-control" value="<?php echo $dong['thutu'] ?>" name="thutu">		
			</div>
		</div>
	</div>
  <button type="submit" name="suadanhmucbaiviet" class="btn btn-dark">Sửa danh mục bài viết</button>
	  <?php
	  } 
	  ?>
 </form>