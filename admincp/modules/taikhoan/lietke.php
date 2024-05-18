<h1>Danh sách tài khoản</h1>
<?php
$sql = "SELECT tbl_dangky.id_dangky, tbl_dangky.tenkhachhang, tbl_dangky.email, tbl_dangky.diachi, tbl_dangky.dienthoai, tbt_quyen.Role AS tenquyen 
        FROM tbl_dangky 
        LEFT JOIN tbt_quyen ON tbl_dangky.role_id = tbt_quyen.ID";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
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
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_dangky'] . "</td>";
        echo "<td>" . $row['tenkhachhang'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['diachi'] . "</td>";
        echo "<td>" . $row['dienthoai'] . "</td>";
        echo "<td>" . $row['tenquyen'] . "</td>";
        echo "<td><a href='?action=taikhoan&query=sua&idtaikhoan=" . $row['id_dangky'] . "'><i class='fa-solid fa-gear'></i> Chỉnh sửa quyền</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu quyền.";
}
?>