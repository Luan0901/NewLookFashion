<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa quyền</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .info-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        select {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            margin-bottom: 15px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        
        // Kiểm tra xem có ID tài khoản được gửi từ trang trước không
        if(isset($_GET['idtaikhoan'])) {
            $id_taikhoan = $_GET['idtaikhoan'];
            
            // Truy vấn để lấy thông tin quyền hiện tại của người dùng
            $sql_user_role = "SELECT role_id FROM tbl_dangky WHERE id_dangky = $id_taikhoan";
            $result_user_role = $mysqli->query($sql_user_role);
            
            // Kiểm tra xem truy vấn có kết quả không
            if ($result_user_role->num_rows > 0) {
                $row_user_role = $result_user_role->fetch_assoc();
                $current_role_id = $row_user_role['role_id'];

                // Truy vấn để lấy thông tin về các quyền từ bảng tbt_quyen
                $sql_quyen = "SELECT id, role, description FROM tbt_quyen";
                $result_quyen = $mysqli->query($sql_quyen);
                ?>
                <div class="info-box">
                    <h2>Thông tin chỉnh sửa quyền</h2>
                    <p>Dưới đây là danh sách các quyền:</p>
                    <ul>
                        <?php
                        // Kiểm tra nếu có dữ liệu trả về
                        if ($result_quyen->num_rows > 0) {
                            while ($row_quyen = $result_quyen->fetch_assoc()) {
                                $selected = ($row_quyen['id'] == $current_role_id) ? "selected" : "";
                                echo "<li><strong>[{$row_quyen['id']}] </strong> <strong>{$row_quyen['role']}:</strong> {$row_quyen['description']}</li>";
                            }
                        } else {
                            echo "<li>Không có quyền nào được tìm thấy.</li>";
                        }
                        ?>
                    </ul>
                </div>

                <h1>Chỉnh sửa quyền</h1>
                <form action="modules/taikhoan/xuly.php" method="POST">
                    <input type="hidden" name="id_taikhoan" value="<?php echo $id_taikhoan; ?>">
                    <label for="new_role">Chọn quyền mới:</label>
                    <select name="new_role" id="new_role">
                        <?php
                        // Reset con trỏ dữ liệu
                        $result_quyen->data_seek(0);

                        // Hiển thị các tùy chọn từ bảng tbt_quyen
                        if ($result_quyen->num_rows > 0) {
                            while ($row_quyen = $result_quyen->fetch_assoc()) {
                                $selected = ($row_quyen['id'] == $current_role_id) ? "selected" : "";
                                echo "<option value=\"{$row_quyen['id']}\" $selected>{$row_quyen['role']}</option>";
                            }
                        } else {
                            echo "<option value=\"\">Không có quyền nào được tìm thấy.</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" name="submit">Lưu</button>
                </form>
            <?php
            } else {
                echo "<p>Không tìm thấy thông tin quyền của người dùng.</p>";
            }
        } else {
            echo "<p>Không tìm thấy tài khoản.</p>";
        }
        ?>
    </div>
</body>
</html>