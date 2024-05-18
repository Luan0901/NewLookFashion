<h3 style="font-weight: bold">Quản lý thông tin website</h3>
<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>
<table class="table">
	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	?>
 	<form  class="form-group"  method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">
		<div class="form-group">
			<label class="form-label">Thông tin liên hệ</label>
			<textarea rows="10"  name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea>
		</div>
	  	<button type="submit" name="submitlienhe" class="btn btn-dark">Cập nhật</button>
	  	<?php 
			}
	 	 ?>
 	</form>
</table> 	