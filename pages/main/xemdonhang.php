<div class="container-fuild p-3">


<h1 class="margin-top: 20px;">Xem đơn hàng</h1>
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table class="table" style="width:100%;text-align: center;border-collapse: collapse; margin-top: 20px ;" >
 <thead class="thead-light" style="font-size: 16px;">
  <tr>
      <th>Mã đơn hàng</th>
      <th>Tên sản phẩm</th>
      <th>Số lượng</th>
      <th>Đơn giá</th>
      <th>Thành tiền</th>
  </tr>
  </thead>
  <tbody style="font-size: 14px;">
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['giasp']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
  ?>
  <tr>
  	
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6">
   		<h2 style="float:right; font-size:18px; padding:20px">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></h2>
   	</td>
   
  </tr>
  </tbody>
</table>
</div>