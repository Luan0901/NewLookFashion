<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);

    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        echo'<script>alert("Đăng nhập thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    } else {
        echo '<script>alert("Email hoặc mật khẩu sai, vui lòng đăng nhập lại!!!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<header>
</header>

<body>
    <form action="" autocomplete="off" method="POST" style="margin: 5px 20%;">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="email" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn">
                    </div>
                </div>
                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="index.php?quanly=dangky" class="auth-form__help-link auth-form__help-forgot">Đăng ký tài khoản</a>
                    </div>
                </div>

                <div class="auth-form__controls">
                    <input class="btn btn--primary" type="submit" name="dangnhap" value="Đăng Nhập">
                </div>
            </div>
        </div>
    </form>
</body>