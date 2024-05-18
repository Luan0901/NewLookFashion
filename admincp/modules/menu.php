<div class="sidebar">
<a href="../../newlook/index.php"><img class="logo" src="../images/newlook.png"></a>
    <ul class="menu">
    <?php
if (isset($_SESSION['role_id'])) {
    $user_role_id = $_SESSION['role_id'];

    $sql = "SELECT mf.* 
            FROM menu_features mf
            JOIN role_features rf ON mf.id = rf.feature_id
            JOIN tbt_quyen r ON rf.role_id = r.ID
            WHERE r.ID = $user_role_id";
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
}
?>
        <li class="logout">
            <?php
            if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                unset($_SESSION['dangnhap']);
                header('Location:../index.php');
            }
            ?>
            <a href="../index.php?dangxuat=1">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>