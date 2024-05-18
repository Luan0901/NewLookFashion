<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<br><h3 style="font-weight: bold">Liệt kê danh sách sản phẩm</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá sp</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Mã sp</th>
      <th scope="col" class="th-center" style="width: 35%;">Tóm tắt</th>
      <th class="th-center" scope="col">Trạng thái</th>
      <th class="th-center" scope="col">Quản lý</th>
    </tr>
    </thead>

  
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_sp)) {
    $i++;
  ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['tensanpham'] ?></td>
      <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
      <td><?php echo $row['giasp'] ?></td>
      <td><?php echo $row['soluong'] ?></td>
      <td><?php echo $row['tendanhmuc'] ?></td>
      <td><?php echo $row['masp'] ?></td>
      <td class="tomtat-sp"><?php echo $row['tomtat'] ?></td>
      <td><?php if ($row['tinhtrang'] == 1) {
            echo 'Kích hoạt';
          } else {
            echo 'Ẩn';
          }
          ?>

      </td>
      <td style="text-align: center;">
      <a href="#" onclick="confirmDelete(<?php echo $row['id_sanpham'] ?>)"><i class="fa-solid fa-trash"></i></a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fa-solid fa-gear"></i></a>
      </td>

    </tr>
  <?php
  }
  ?>

</table>
<script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
        window.location.href = "modules/quanlysp/xuly.php?idsanpham=" + id;
    }
}
</script>