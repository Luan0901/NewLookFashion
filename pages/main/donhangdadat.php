<div class="container-fluid p-3">


<?php 
if(!isset($_SESSION['id_khachhang']) && !isset($_SESSION['cart'])){
    header('Location:index.php');
} 
?>


    <?php
  if(isset($_SESSION['id_khachhang'])){
  ?>

  <div class="arrow-steps clearfix" style="margin-top:20px">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=thanhtoan" >Thanh toán</a><span> </div>
    <!-- <div class="step current"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div> -->
  </div>
     <?php
     } 
     ?>
  <h1  style="margin-top: 20px;">Chi tiết đơn hàng đã đặt</h1>

</div>