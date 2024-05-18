<?php
$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli, $sql_bv);
$query_bv_all = mysqli_query($mysqli, $sql_bv);

$row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="container-fluid p-3 ">
    
<ul class="baiviet">
    <?php while ($row_bv = mysqli_fetch_array($query_bv_all)) { ?>
        <li style="display: flex; flex-direction: column; align-items: center;">
            <h1 class="baiviet-title"><?php echo $row_bv['tenbaiviet'] ?></h1>
            <h4 style="display:flex; justify-content: center; margin: 10px; font-size: 20px;">Tác giả: <p style="margin-left: 5px; padding: 0;"><?php echo $row_bv['tomtat']; ?></p></h4>
            <img class="baiviet-img" src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
             <span class="baiviet-content"><?php echo $row_bv['noidung'] ?></span>
        </li>
    <?php } ?>
</ul>
    
</div>
<style>
   .baiviet-content {
    padding: 10px;
    font-size: 25px;
    line-height: 1.6em; /* hoặc line-height: 1.6rem; */
    text-align: justify;
    margin: 10px;
}

    .baiviet-title {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 35px;
        
    }

    ul.baiviet {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    ul.baiviet li {
        padding: 10px;
    }

    .baiviet-img {
        max-width: 100%;
        max-height: 100%;
    }
</style>