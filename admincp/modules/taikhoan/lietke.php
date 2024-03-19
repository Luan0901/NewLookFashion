<h1>Danh sách tài khoản</h1>
<?php

// Truy vấn cơ sở dữ liệu để lấy dữ liệu quyền
$sql = "SELECT * FROM tbl_dangky";
$result = $mysqli->query($sql);

// Kiểm tra nếu có dữ liệu trả về
if ($result->num_rows > 0) {
    // Hiển thị bảng dữ liệu
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Tên tài khoản</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>
    <th>Quyền</th>
    <th>Quản lý</th>
    </tr>";
    // Lặp qua từng dòng dữ liệu và hiển thị trong bảng
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_dangky'] . "</td>";
        echo "<td>" . $row['tenkhachhang'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['diachi'] . "</td>";
        echo "<td>" . $row['dienthoai'] . "</td>";
        echo "<td>" . $row['role_id'] . "</td>";
        echo "<td><a href='?action=taikhoan&query=sua&idtaikhoan=" . $row['id_dangky'] . "'><i class='fa-solid fa-screwdriver-wrench'></i> Chỉnh sửa quyền</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu quyền.";
}
// Đóng kết nối
$mysqli->close();
?>