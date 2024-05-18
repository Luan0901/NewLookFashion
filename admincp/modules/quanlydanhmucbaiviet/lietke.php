<?php
	$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
<br><h3 style="font-weight: bold">Liệt kê danh mục bài viết</h3>
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
      <th class="th-center" scope="col">Quản lý</th>
    </tr>
    </thead>

  <?php
      $i = 0;
      while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
    	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td style="text-align: center;">
   		<a href="#" onclick="confirmDelete(<?php echo $row['id_baiviet'] ?>)"><i class="fa-solid fa-trash"></i></a> | <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="fa-solid fa-gear"></i></a> 
   	</td>

   
  </tr>
  <?php
  } 
  ?>
 
</table>
<script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
        window.location.href = "modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=" + id;
    }
}
</script>