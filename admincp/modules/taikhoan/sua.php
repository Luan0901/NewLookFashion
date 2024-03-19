<?php
// Kiểm tra xem action và query được truyền qua URL không
if(isset($_GET['action']) && isset($_GET['query']) && $_GET['action'] == 'taikhoan' && $_GET['query'] == 'sua') {
    // Kiểm tra xem có tham số idtaikhoan được truyền qua URL không
    if(isset($_GET['idtaikhoan'])) {
        $idtaikhoan = $_GET['idtaikhoan'];
        
        include('../../config/config.php');


        // Truy vấn cơ sở dữ liệu để lấy thông tin của tài khoản với ID tương ứng
        $sql = "SELECT * FROM tbl_dangky WHERE id_dangky = $idtaikhoan";
        $result = $mysqli->query($sql);

        // Kiểm tra xem có dữ liệu trả về không
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Hiển thị form sửa thông tin tài khoản
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Sửa thông tin tài khoản</title>
            </head>
            <body>
                <h1>Sửa thông tin tài khoản</h1>
                <form action="xuly_sua.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id_dangky']; ?>">
                    <label for="tenkhachhang">Tên tài khoản:</label><br>
                    <input type="text" id="tenkhachhang" name="tenkhachhang" value="<?php echo $row['tenkhachhang']; ?>"><br>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
                    <label for="diachi">Địa chỉ:</label><br>
                    <input type="text" id="diachi" name="diachi" value="<?php echo $row['diachi']; ?>"><br>
                    <label for="dienthoai">Điện thoại:</label><br>
                    <input type="text" id="dienthoai" name="dienthoai" value="<?php echo $row['dienthoai']; ?>"><br>
                    <label for="role">Quyền:</label><br>
                    <input type="text" id="role" name="role" value="<?php echo $row['role']; ?>"><br><br>
                    <input type="submit" value="Lưu">
                </form>
            </body>
            </html>
            <?php
        } else {
            echo "Không tìm thấy thông tin tài khoản.";
        }

        // Đóng kết nối
        $mysqli->close();
    } else {
        echo "ID tài khoản không được cung cấp.";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
