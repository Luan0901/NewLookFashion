<h3 style="font-weight: bold">Thêm sản phẩm</h3>
<form class="form-group" method="POST" action="modules/quanlysp/xuly.php"  enctype="multipart/form-data">
	<div class="form-group">
		<div class="form-col">
			<div>
				<label class="form-label">Tên sản phẩm</label>
				<input type="text" class="form-control" placeholder="Vd: Túi xách,balo,nón" name="tensanpham">
			</div>
			<div>
				<label class="form-label">Mã sản phẩm</label>	
				<input type="text" class="form-control" placeholder="" name="masp">		
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="col-md-6">
				<label class="form-label">Số lượng</label>
				<input type="text" class="form-control" placeholder="" name="soluong">
			</div>
			<div class="col-md-6">
				<label class="form-label">Giá sản phẩm</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="" name="giasp">
						<span class="input-group-text" >VND</span>
					</div>
			</div>
			
	    </div>

		<div class="form-row" >
			<div class="col-md-6">
				<label class="form-label">Tình trạng</label>
					<select class="form-select"name="tinhtrang">
						<option value="1">Kích hoạt</option>
						<option value="0">Ẩn</option>
					</select>
			</div>
			<div class="col-md-6">
        		<label class="form-label">Danh mục sản phẩm:</label>
        		<select class="form-select"  name="danhmuc">
					<?php
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
					?>
					<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
					<?php
					} 
	    			?>
	    		</select>
     		</div>
		</div>
		
	</div>
	
  <div class="form-group">
    <label class="form-label">Hình ảnh</label>
    <input type="file"  name="hinhanh">
  </div>
  <div class="form-group">
    <label class="form-label">Tóm tắt</label>
    <input type="text" name="tomtat" class="form-control"  name="tomtat">
  </div>
  <div class="form-group">
    <label class="form-label">Nội dung</label>
    <input type="text" name="noidung" class="form-control"  name="noidung">
  </div>

  <button type="submit" name="themsanpham" class="btn btn-dark">Thêm sản phẩm</button>
</form>

<script>
function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>