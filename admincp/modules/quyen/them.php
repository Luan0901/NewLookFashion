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

    <form id="addRoleForm" method="POST" action="modules/quyen/xuly.php">
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
    </form>
    <!-- 
<script>
    document.getElementById('addRoleForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = new FormData(this); // Get form data
        var xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object

        // Set up AJAX request
        xhr.open('POST', 'modules/quyen/xuly.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) { // Check if request was successful
                // Display success message
                alert('Thêm quyền thành công!');
                // Reset form
                document.getElementById('addRoleForm').reset();
            } else {
                alert('Đã xảy ra lỗi, vui lòng thử lại sau.');
            }
        };

        // Send form data
        xhr.send(formData);
    });
</script> -->

</body>

</html>