<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<br><h3 style="font-weight: bold">Liệt kê danh mục sản phẩm</h3>
<table class="table"   style="width:100%" border="1" style="border-collapse: collapse;">
<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên danh mục</th>
      <th class="th-center" scope="col">Quản lý</th>
    </tr>
  </thead>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
      $i++;
  ?>
  <tr>
      <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
       <td style="text-align: center;">
           <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">
      <i class="fa-solid fa-trash"></i></a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa-solid fa-gear"></i></a> 
       </td>

  </tr>
  <?php
  } 
  ?>

</table>