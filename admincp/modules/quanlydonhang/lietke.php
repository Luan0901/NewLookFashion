<h3 style="font-weight: bold">Liệt kê đơn hàng</h3>
<?php
    $sql_lietke_dh = "SELECT *
    FROM tbl_cart
    INNER JOIN tbl_dangky ON tbl_cart.id_khachhang = tbl_dangky.id_dangky
    INNER JOIN tbl_shipping ON tbl_cart.cart_shipping = tbl_shipping.id_shipping
    WHERE tbl_dangky.id_dangky = tbl_shipping.id_dangky
    ORDER BY tbl_cart.id_cart DESC;
    ";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<table class="table">
  <thead class="thead-dark">
   <tr>
      <th scope="col">ID</th>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Note</th>
      <th scope="col">Số điện thoại</th>
      <th class="th-center" scope="col">Tình trạng</th>
      <th scope="col">Ngày đặt</th>
      <th class="th-center" scope="col">Quản lý</th>
    </tr>
  </thead>
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
      $i++;
  ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['code_cart'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['note'] ?></td>
      <td><?php echo $row['dienthoai'] ?></td>
      <td>
        <?php if ($row['cart_status'] == 1) {
          echo '<a href="modules/quanlydonhang/xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
        } else {
          echo 'Đã duyệt';
        }
        ?>
      </td>
      <td><?php echo $row['cart_date'] ?></td>
      <td style="text-align: center;">
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>"><i class="fa-solid fa-eye"></i></a> | <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>"><i class="fa-solid fa-print"></i></a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>
