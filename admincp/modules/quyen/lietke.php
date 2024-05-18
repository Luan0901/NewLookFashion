<?php

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
    <th>Quản lý</th>
    </tr>";
    // Lặp qua từng dòng dữ liệu và hiển thị trong bảng
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Role'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td style='text-align: center;'><a href='modules/quyen/xuly.php?id=" . $row['ID'] . "' onclick='return confirm(\"Bạn có chắc chắn muốn xóa quyền này?\");'><i class='fa-solid fa-trash'></i></a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu quyền.";
}

?>