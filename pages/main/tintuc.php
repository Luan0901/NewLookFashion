<div class="container-fluid ">
<h1 class="news-title">Bài viết mới nhất</h1>

<ul class="news-list">
	<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli, $sql_bv);

	while ($row_bv = mysqli_fetch_array($query_bv)) {
	?>
		<li class=" row news-item">
				<div class="news-item-image w-25">
					<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh']; ?>" alt="<?php echo $row_bv['tenbaiviet']; ?>" class="news-image">
				</div>
				<div class="news-item-content w-75 p-3">
					<p class="news-item-title"><?php echo $row_bv['tenbaiviet']; ?></p>
					<h4  style="display:flex; justify-content: center; margin: 0 ">Tác giả: <p style="margin-left: 5px; padding:0"><?php echo $row_bv['tomtat']; ?></p></h4>
					<div class="news-item-description">
						<p><?php echo $row_bv['noidung']; ?></p>
					</div>
					
					<a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']; ?>" class="read-more-link">Xem thêm</a>
					
				</div>
		</li>
	<?php
	}
	?>
</ul>
</div>

<style>
	/* ------------------------------------------------------------------Tag Bài viết-------------------------------------------- */
.news-title {
    text-align: center;
    text-transform: uppercase;
    margin-top: 20px;
	
}

.news-list {
    list-style: none;
    padding: 0;
    margin: 20px auto;
    max-width: 800px;
    /* Adjust as needed */
}

.news-item {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    /* Add border for each news item */
    border-radius: 5px;
    overflow: hidden;
    /* Ensure the image does not overflow */
}

.news-item a {
    text-decoration: none;
 
}

.news-item-image {
    float: left;
    width: 120px;
}

.news-image {
    width: 100%;
    height: auto;
    display: block;
}


.news-item-content a {
   
	text-decoration: none;
}

.news-item-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
	text-align: center;
}
.news-item-author {
	text-align: center;
	font-size: 15px;
	font-weight: bold;
}
.news-item-description {
		font-size: 16px;
		margin-left: 15px;
		margin-right: 15px;
        max-height: 40px;
        overflow: hidden;
    }
.read-more-link {
	color: #007bff;
	margin-top: 5px;
        display: block;
        text-align: center;
        text-decoration: none;
        color: #007bff; /* Màu chữ xanh dương */
}

.read-more-link:hover {
        text-decoration: underline;
}
/* ------------------------------------------------------------Bài viết--------------------------------------- */


.baiviet-container {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Thêm box shadow */
    padding: 20px;
}

.baiviet {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.baiviet li {
    margin-bottom: 20px;
}

.baiviet h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.baiviet p {
    font-size: 18px;
    line-height: 1.6;
}
</style>