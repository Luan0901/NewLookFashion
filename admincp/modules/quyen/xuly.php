<?php

include('../../config/config.php');

// Kiểm tra xem biểu mẫu đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['themquyen'])) {
    // Lấy dữ liệu từ biểu mẫu
    $tenquyen = $_POST['Role'];
    $chucnang = $_POST['MenuNames'];
    $mota = $_POST['Description'];

    // Thêm dữ liệu vào bảng roles
    $sql_them_quyen = "INSERT INTO tbt_quyen(Role, Description) VALUES ('$tenquyen', '$mota')";
    if ($mysqli->query($sql_them_quyen) === TRUE) {
        $role_id = $mysqli->insert_id; // Lấy ID của vai trò vừa thêm

        // Thêm dữ liệu vào bảng role_features cho mỗi chức năng được chọn
        foreach ($chucnang as $feature_name) {
            // Lấy ID của chức năng từ bảng features
            $sql_get_feature_id = "SELECT ID FROM menu_features WHERE name = '$feature_name'";
            $result_feature_id = $mysqli->query($sql_get_feature_id);

            if ($result_feature_id->num_rows > 0) {
                $row_feature_id = $result_feature_id->fetch_assoc();
                $feature_id = $row_feature_id['ID'];

                // Thêm vào bảng role_features
                $sql_them_chucnang = "INSERT INTO role_features (role_id, feature_id) VALUES ('$role_id', '$feature_id')";
                $mysqli->query($sql_them_chucnang);
            }
        }

        // Chuyển hướng đến lietke.php
        header("Location: ../../index.php?action=quyen&query=them");
        exit(); // Đảm bảo không có mã HTML hoặc mã PHP nào được thực thi sau khi chuyển hướng
    } else {
        echo "Lỗi: " . $sql_them_quyen . "<br>" . $mysqli->error;
    }
}
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Lấy ID và lưu vào biến
    $id_quyen = $_GET['id'];

    // Xóa các bản ghi liên quan từ bảng role_features trước
    $sql_xoa_role_features = "DELETE FROM role_features WHERE role_id = $id_quyen";
    $mysqli->query($sql_xoa_role_features);

    // Kiểm tra xem có lổi nếu xóa role_features không
    if ($mysqli->error) {
        echo "Lỗi khi xóa role_features: " . $mysqli->error;
        exit;
    }

    // Tiếp theo, xóa quyền từ bảng tbt_quyen
    $sql_xoa_quyen = "DELETE FROM tbt_quyen WHERE ID = $id_quyen";
    if ($mysqli->query($sql_xoa_quyen) === TRUE) {
        // Chuyển hướng người dùng về trang liệt kê quyền sau khi xóa thành công
        header("Location: ../../index.php?action=quyen&query=them");
        exit;
    } else {
        echo "Lỗi khi xóa quyền: " . $mysqli->error;
        exit;
    }
} else {
    echo "Không tìm thấy ID quyền để xóa.";
    exit;
}
?>