<div class="sidebar">

    <ul class="menu">
        <?php
        // Kiểm tra xem kết nối đến cơ sở dữ liệu đã được thiết lập chưa
        if ($mysqli->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $mysqli->connect_error);
        }

        // Truy vấn cơ sở dữ liệu để lấy dữ liệu menu
        $sql = "SELECT * FROM menu_features";
        $result = $mysqli->query($sql);

        // Kiểm tra nếu có dữ liệu trả về
        if ($result->num_rows > 0) {
            // Lặp qua từng mục và hiển thị chúng trong menu
            while ($row = $result->fetch_assoc()) {
                echo '<li class="click">';
                echo '<a href="' . $row['url'] . '">';
                echo '<i class="' . $row['icon'] . '"></i>';
                echo '<span>' . $row['name'] . '</span>';
                echo '</a>';
                echo '</li>';
            }
        }
        ?>
        <li class="logout">
            <?php
            if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                unset($_SESSION['dangnhap']);
                header('Location:login.php');
            }
            ?>
            <a href="index.php?dangxuat=1">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>
