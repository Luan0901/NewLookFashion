<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Quyền</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: none;
            /* Xóa viền của bảng */
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type=text],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: none;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Quản lý phân quyền</h1>
    <!-- <form id="addRoleForm" method="POST" action="modules/quyen/xuly.php">
        <table>
            <tr>
                <td>Tên quyền</td>
                <td><input type="text" name="Role" required></td>
            </tr>
            <tr>
                <td>Chức năng</td>
                <td>
                    <?php
                    // Truy vấn cơ sở dữ liệu để lấy tên các menu
                    $sql_menu = "SELECT name FROM menu_features";
                    $result_menu = $mysqli->query($sql_menu);

                    // Kiểm tra nếu có dữ liệu trả về
                    if ($result_menu->num_rows > 0) {
                        // Lặp qua từng mục và hiển thị chúng trong danh sách checkbox
                        while ($row_menu = $result_menu->fetch_assoc()) {
                            echo '<input type="checkbox" name="MenuNames[]" value="' . $row_menu['name'] . '"> ' . $row_menu['name'] . '<br>';
                        }
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Mô tả</td>
                <td><textarea rows="5" name="Description" style="resize: none" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themquyen" value="Thêm quyền"></td>
            </tr>
        </table>
    </form> -->
    <form id="addRoleForm" method="POST" action="modules/quyen/xuly.php">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên quyền</label>
            <div class="col-sm-10">
            <input type="text" name="Role"  class="form-control" id="inputEmail3" placeholder="VD: nhân viên bán hàng" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Chức năng</div>
            <div class="col-sm-10">
            <div class="form-check">
            <?php
                    // Truy vấn cơ sở dữ liệu để lấy tên các menu
                    $sql_menu = "SELECT name FROM menu_features";
                    $result_menu = $mysqli->query($sql_menu);

                    // Kiểm tra nếu có dữ liệu trả về
                    if ($result_menu->num_rows > 0) {
                        // Lặp qua từng mục và hiển thị chúng trong danh sách checkbox
                        while ($row_menu = $result_menu->fetch_assoc()) {
                            echo '<input type="checkbox" name="MenuNames[]" value="' . $row_menu['name'] . '"> ' . $row_menu['name'] . '<br>';
                        }
                    }
                    ?>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Mô tả</div>
            <div class="col-sm-10">
            <textarea rows="5" name="Description" style="resize: none" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-dark" name="themquyen">Thêm quyền</button>
            </div>
        </div>
    </form>
</body>

</html>