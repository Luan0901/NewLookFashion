<div class="container-fluid p-3">

	<?php
	if (isset($_SESSION['id_khachhang'])) {
	?>
		<div class="arrow-steps clearfix" style="margin-top: 20px;">
			<div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
			<div class="step done"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
			<div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a><span> </div>
			<!-- <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div> -->
		</div>
	<?php
	}
	?>
	<h1 style="margin-top: 20px;">Hình thức thanh toán</h1>
	<form action="pages/main/xulythanhtoan.php" method="POST">
		<div class="col">
			<?php
			$id_dangky = $_SESSION['id_khachhang'];
			$sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
			$count = mysqli_num_rows($sql_get_vanchuyen);
			if ($count > 0) {
				$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
				$name = $row_get_vanchuyen['name'];
				$phone = $row_get_vanchuyen['phone'];
				$address = $row_get_vanchuyen['address'];
				$note = $row_get_vanchuyen['note'];
			} else {

				$name = '';
				$phone = '';
				$address = '';
				$note = '';
			}
			?>

			<div class="row">
				<div class="col delivery-info">
					<h2>Thông tin vận chuyển và giỏ hàng</h2>
					<ul>
						<li><b>Họ và tên vận chuyển:</b> <?php echo $name ?></li>
						<li><b>Số điện thoại:</b> <?php echo $phone ?></li>
						<li><b>Địa chỉ:</b> <?php echo $address ?></li>
						<li><b>Ghi chú:</b> <?php echo $note ?></li>
					</ul>
				</div>
				
				<div class="col payment-method">
					<h2>Phương thức thanh toán</h2>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
						<label class="form-check-label" for="exampleRadios1">
							Tiền mặt
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
						<label class="form-check-label" for="exampleRadios2">
							Chuyển khoản
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
						<img src="images/vnpay.png" height="20" width="64">
						<label class="form-check-label" for="exampleRadios4">
							Vnpay
						</label>
					</div>
					<input type="submit" value="Thanh toán ngay" name="redirect" class="payment-button">
					<?php
						$tongtien = 0;
						foreach ($_SESSION['cart'] as $key => $value) {
							$thanhtien = $value['soluong'] * $value['giasp'];
							$tongtien += $thanhtien;
						}
						$tongtien_vnd = $tongtien;
						$tongtien_usd = round($tongtien / 22667);
						?>
						<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
						<div id="paypal-button"></div>
						
						<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo.php">
							<input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
							<input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="payment-button">

						</form>

						

						<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo_atm.php">
							<input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
							<input type="submit" name="momo" value="Thanh toán MOMO ATM" class="payment-button">
						</form>
				</div>
			</div>

				<h2 style="margin-top:30px; font-size:24px">Giỏ hàng của bạn</h2>
				<table class="table" style="width:100%;text-align: center;border-collapse: collapse; margin-top: 20px ;" >
					<thead class="thead-dark" style="font-size: 16px; ">
						<tr>
						<th scope="col">Hình ảnh</th>
						<th scope="col">Mã sp</th>
						<th scope="col">Tên sản phẩm</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Giá sản phẩm</th>
						<th scope="col">Thành tiền</th>
						</tr>
					</thead>
					<tbody style="font-size: 14px;">
					<?php
					if (isset($_SESSION['cart'])) {
						$i = 0;
						$tongtien = 0;
						foreach ($_SESSION['cart'] as $cart_item) {
							$thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
							$tongtien += $thanhtien;
							$i++;
					?>
							<tr scope="row">
								<td style="vertical-align: middle;"><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
								<td style="vertical-align: middle;"><?php echo $cart_item['masp']; ?></td>
								<td style="vertical-align: middle;"><?php echo $cart_item['tensanpham']; ?></td>
								
								<td style="vertical-align: middle;">
									<!-- <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a> -->
									<?php echo $cart_item['soluong']; ?>
									<!-- <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a> -->

								</td>
								<td style="vertical-align: middle;"><?php echo number_format($cart_item['giasp'], 0, ',', '.') ?><u class="dong">đ</u></td>
        						<td style="vertical-align: middle;"><?php echo number_format($thanhtien, 0, ',', '.') ?><u class="dong">đ</u></td>
							</tr>
						<?php
						}
						?>
						<tr>
						<td colspan="8">
					
							<h2 style="float: right; padding:30px;">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') ?><u class="dong">đ</u></h2>
							
							
							
						</td>


						</tr>
					<?php
					} else {
					?>
						<tr>
							<td colspan="8">
								<p>Hiện tại giỏ hàng trống</p>
							</td>

						</tr>
					<?php
					}
					?>

				</table>
			
			<style type="text/css">
				.col-md-4.hinhthucthanhtoan .form-check {
					margin: 11px;
				}
				
			</style>

			
	</form>

	





</div>
<style>
	.delivery-info {
  padding: 20px;
}

.delivery-info h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
}

.delivery-info ul {
  list-style-type: none;
  padding: 0;
}

.delivery-info li {
  font-size: 18px;
  margin-bottom: 5px;
}

.delivery-info b {
  font-weight: bold;
}
.payment-method {
  margin-top: 20px;
}

.payment-method h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
}

.payment-method .form-check {
  margin-bottom: 10px;
}

.payment-method .form-check-label {
  font-size: 18px;
  color: #333;
  margin-left: 10px;
}

.payment-method img {
  margin-left: 10px;
  vertical-align: middle;
}
.payment-button {
  margin-top: 20px;
  background-color: #dc3545; /* Màu nền */
  color: #fff; /* Màu chữ */
  padding: 10px 20px; /* Kích thước */
  border: none; /* Không viền */
  border-radius: 5px; /* Bo góc */
  cursor: pointer; /* Con trỏ */
  font-size: 16px; /* Kích thước chữ */
}

.payment-button:hover {
  background-color: #c82333; /* Màu nền khi di chuột qua */
}

</style>