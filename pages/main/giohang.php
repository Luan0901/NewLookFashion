<div class="container-fluid p-3">
<h1 class="giohang-title">
  <?php
    if (isset($_SESSION['dangky'])) {
      echo 'Xin chào quý khách hàng: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
    }
    ?>
  </h1>
  <?php
  if (isset($_SESSION['cart'])) {
  }
  ?>
  <?php 
   if (isset($_SESSION['id_khachhang'])) {
  ?>
    
      <!-- Responsive Arrow Progress Bar -->
        <div class="arrow-steps clearfix">
          <div class="step current"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
          <div class="step"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
          <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a><span> </div>
          <!-- <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div> -->
        </div>

    
<?php
}
?>


<table class="table" style="width:100%;text-align: center;border-collapse: collapse; margin-top: 20px ;" >
  <thead class="thead-dark" style="font-size: 16px; ">
    <tr>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Mã sp</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá sản phẩm</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">Tùy chỉnh</th>
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
        <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
        <td style="vertical-align: middle;"><?php echo $cart_item['masp']; ?></td>
        <td style="vertical-align: middle;"><?php echo $cart_item['tensanpham']; ?></td>
        <td style="vertical-align: middle;">
          <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" style="font-size: 12px;" aria-hidden="true"></i></a>
          <?php echo $cart_item['soluong']; ?>
          <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" style="font-size: 12px;"  aria-hidden="true"></i></a>

        </td>
        <td style="vertical-align: middle;"><?php echo number_format($cart_item['giasp'], 0, ',', '.') ?><u class="dong">đ</u></td>
        <td style="vertical-align: middle;"><?php echo number_format($thanhtien, 0, ',', '.') ?><u class="dong">đ</u></td>
        <td style="vertical-align: middle;"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
      </tr>
    <?php
    }
    ?>
   <tr>
    <td colspan="8"  >
      <h2 style="float: left; padding:30px">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></h2>
      <p style="float: right; padding:30px"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
      <br> <!-- Thêm thẻ <br> để tạo dòng mới -->
      <div style="margin-top:100px">
      <?php
      if (isset($_SESSION['dangky'])) {
      ?>
        <p><a href="index.php?quanly=vanchuyen">Hình thức vận chuyển</a></p>
      <?php
      } else {
      ?>
        <p><a href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
      <?php
      }
      ?>
      </div>
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
</tbody>
</table>
</div>
<style>
  .giohang-title{
    margin-bottom: 20px;
  }
  .dong {
    font-size: smaller; /* Kích thước nhỏ hơn */
    text-decoration: underline; /* Gạch dưới */
    position: relative; /* Đặt vị trí tương đối */
    top: -2px; /* Dịch lên 2px */
}
</style>