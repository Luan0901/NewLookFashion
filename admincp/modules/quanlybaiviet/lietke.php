<?php
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<br><h3 style="font-weight: bold">Liệt kê danh mục bài viết</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên bài viết</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Tác giả</th>
      <th class="th-center" scope="col">Trạng thái</th>
      <th class="th-center" scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_bv)){
        $i++;
      ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['tenbaiviet'] ?></td>
      <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    
      <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    
      <td><?php echo $row['tomtat'] ?></td>
      <td class="th-center"><?php if($row['tinhtrang']==1){
          echo 'Kích hoạt';
        }else{
          echo 'Ẩn';
        } 
        ?>
        
      </td>
      <td style="text-align: center;">
        <a href="#" onclick="confirmDelete(<?php echo $row['id'] ?>)"><i class="fa-solid fa-trash"></i></a> | <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>"><i class="fa-solid fa-gear"></i></a> 
      </td>
    
    </tr>
    <?php
    } 
    ?>
  </tbody>
</table>
<script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
        window.location.href = "modules/quanlybaiviet/xuly.php?idbaiviet=" + id;
    }
}
</script>