<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>
<div class="container-fluid p-3 ">
<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>	
		
			<div class="image-container"> <!-- Thêm một container cho hình ảnh -->
				<img src="./images/newlook.png">
			</div>
 			<span class="lienhe-content"><?php echo $dong['thongtinlienhe'] ?></span>
	  	
	  <?php 
		}
	  ?>
</div>
<style>
	.image-container {
		padding: 20px;
    text-align: center; /* Căn giữa theo chiều ngang */
}

	.lienhe-title {
    font-size: 36px; /* Kích thước font */
    font-weight: bold; /* Đậm */
    font-family: Arial, sans-serif; /* Font chữ */
    color: #333; /* Màu chữ */
    text-align: center; /* Căn giữa */
    margin-bottom: 20px; /* Khoảng cách dưới */
}

	.lienhe-content {
		text-align: center;
    font-size: 25px;
    font-family: Arial, sans-serif; /* Thay đổi font chữ nếu cần */
    color: #333; /* Màu chữ */
    line-height: 1.6; /* Khoảng cách giữa các dòng */
    
    margin: 0 auto; /* Đặt lề tự động để căn giữa nội dung */
    max-width: 800px; /* Giới hạn chiều rộng của nội dung */
}
</style>
