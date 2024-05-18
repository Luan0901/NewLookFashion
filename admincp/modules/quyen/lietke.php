<?php
// Include the file where you establish the database connection
include('../../config/config.php');

// Truy vấn cơ sở dữ liệu để lấy dữ liệu quyền
$sql = "SELECT * FROM tbt_quyen";
$result = $mysqli->query($sql);

// Kiểm tra nếu có dữ liệu trả về
if ($result->num_rows > 0) {
    // Hiển thị bảng dữ liệu
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Tên quyền</th>
    <th>Mô tả</th>
    </tr>";
    // Lặp qua từng dòng dữ liệu và hiển thị trong bảng
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Role'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu quyền.";
}
// Đóng kết nối
$mysqli->close();
?>
