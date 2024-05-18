<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<h3 style="font-weight: bold">Sửa sản phẩm</h3>

<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
 <div class="form-group">
		<div class="form-col">
			<div>
				<label class="form-label">Tên sản phẩm</label>
				<input type="text" class="form-control" value="<?php echo $row['tensanpham'] ?>" name="tensanpham">
			</div>
			<div>
				<label class="form-label">Mã sản phẩm</label>	
				<input type="text" class="form-control" value="<?php echo $row['masp'] ?>" name="masp">		
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="col-md-6">
				<label class="form-label">Số lượng</label>
				<input type="text" class="form-control" value="<?php echo $row['soluong'] ?>" name="soluong">
			</div>
			<div class="col-md-6">
				<label class="form-label">Giá sản phẩm</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" value="<?php echo $row['giasp'] ?>" name="giasp">
						<span class="input-group-text" >VND</span>
					</div>
			</div>
			
	    </div>

		<div class="form-row" >
			<div class="col-md-6">
				<label class="form-label">Tình trạng</label>
					<select class="form-select"name="tinhtrang">
							<?php
							if($row['tinhtrang']==1){ 
							?>
							<option value="1" selected>Kích hoạt</option>
							<option value="0">Ẩn</option>
							<?php
							}else{ 
							?>
							<option value="1">Kích hoạt</option>
							<option value="0" selected>Ẩn</option>
							<?php
							} 
							?>
					</select>
			</div>
			<div class="col-md-6">
        		<label class="form-label">Danh mục sản phẩm:</label>
        		<select class="form-select"  name="danhmuc">
						<?php
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
							if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
						?>
						<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
						<?php
							}else{
						?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
						<?php
							}
						} 
						?>
	    		</select>
     		</div>
		</div>
		
	</div>
	
  <div class="form-group">
    <label class="form-label">Hình ảnh</label>
    <input type="file" class="form-control-file" name="hinhanh">
	<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
  </div>
  <div class="form-group">
    <label class="form-label">Tóm tắt</label>
	<textarea type="text" name="tomtat" class="form-control"  ><?php echo $row['tomtat'] ?></textarea>
  </div>
  <div class="form-group">
    <label class="form-label">Nội dung</label>
    <textarea type="text" name="noidung" class="form-control"  ><?php echo  $row['noidung'] ?></textarea>
  </div>

  <button type="submit" name="suasanpham" class="btn btn-dark">Sửa sản phẩm</button>
	  
 </form>
 <?php
 } 
 ?>


