<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<h3 style="font-weight: bold">Sửa danh mục sản phẩm</h3>
 <form class="form-group" method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
     <?php
     while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
     ?>

      <div class="form-group">
        <div class="form-col">
            <div>
                <label class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc">
            </div>
            <div>
                <label class="form-label">Thứ tự</label>
                <input type="text" class="form-control" value="<?php echo $dong['thutu'] ?>" name="thutu">
            </div>
        </div>
    </div>
    <button type="submit" name="suadanhmuc" class="btn btn-dark">Sửa danh mục sản phẩm</button>
      <?php
      } 
      ?>

 </form>