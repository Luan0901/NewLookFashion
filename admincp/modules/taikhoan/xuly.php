<?php
include('../../config/config.php');

if(isset($_POST['id_taikhoan'])) {
    $id_taikhoan = $_POST['id_taikhoan'];
    $new_role = $_POST['new_role'];

    $update_sql = "UPDATE tbl_dangky SET role_id = $new_role WHERE id_dangky = $id_taikhoan";
    if ($mysqli->query($update_sql)) {
        header("Location: http://localhost/newlook/admincp/index.php?action=taikhoan&query=them");
        exit(); 
    } else {
        echo "Lỗi khi cập nhật quyền: " . $mysqli->error;
    }
} else {
    echo "Không có dữ liệu được gửi.";
}
?>