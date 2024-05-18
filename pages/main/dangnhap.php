<?php
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    // Prepare a join query to get the role name
    $stmt = $mysqli->prepare("
        SELECT tk.*, tq.Role 
        FROM tbl_dangky tk
        JOIN tbt_quyen tq ON tk.role_id = tq.id 
        WHERE tk.email = ? AND tk.matkhau = ? 
        LIMIT 1
    ");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['dangnhap'] = $username;
        $role_name = $row['Role'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['role_name'] = $role_name; // Store the role name in the session
        $_SESSION['dangky'] = $row['tenkhachhang'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id_khachhang'] = $row['id_dangky'];

        if ($role_name == "User") { // Check the role name instead of role ID
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            echo '<script>window.location.href = "../../newlook/admincp/index.php";</script>';
            exit();
        }
    } else {
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
        header("Location: login.php");
        exit();
    }
}
?>
<div class="container-fluid-dangnhap">
    <form action="" autocomplete="off" method="POST">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                </div>
                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="username" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn">
                    </div>
                </div>
                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <span style="font-size:1.4rem; margin-left:5px">Chưa có tài khoản ?</span>
                        <a style="margin-left:5px" href="index.php?quanly=dangky" class="auth-form__help-link auth-form__help-forgot">Đăng ký ngay!</a>
                    </div>
                </div>
                <div class="auth-form__controls">
                    <input class="btn btn--primary btn-lg" type="submit" name="dangnhap" value="Đăng Nhập">
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .container-fluid-dangnhap {
        display: flex;
        justify-content: center;
        align-items: center;
height: 500px;
    }
</style>