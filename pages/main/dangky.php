<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];

    // Ràng buộc dữ liệu
    if (empty($tenkhachhang)) {
        echo '<script>alert("Bạn chưa nhập tên")</script>';
        echo '<script>window.location.href = "index.php?quanly=dangky";</script>';

        return;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Địa chỉ email không hợp lệ")</script>';
        echo '<script>window.location.href = "index.php?quanly=dangky";</script>';
        return;
    }
    if (strlen($matkhau) < 8) {
        echo '<script>alert("Mật khẩu phải có ít nhất 8 ký tự")</script>';
        echo '<script>window.location.href = "index.php?quanly=dangky";</script>';
        return;
    }

    // Kiểm tra email duy nhất
    $sql_check_email = mysqli_query($mysqli, "SELECT * FROM tbl_dangky WHERE email = '$email'");
    if (mysqli_num_rows($sql_check_email) > 0) {
        echo '<script>alert("Địa chỉ email đã được sử dụng")</script>';
        echo '<script>window.location.href = "index.php?quanly=dangky";</script>';
        return;
    }

    // Lưu trữ dữ liệu
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
    if ($sql_dangky) {
        echo '<script>alert("Bạn đã đăng ký tài khoản thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}
?>

<form action="" autocomplete="off" method="POST" style="margin: 5px 20%;">
    <div class="auth-form">
        <div class="auth-form__container">
            <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng ký</h3>
            </div>

            <div class="auth-form__form">
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" name="hovaten" placeholder="Họ tên của bạn">
                </div>
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" name="dienthoai" placeholder="Số điện thoại">
                </div>
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" name="diachi" placeholder="Địa chỉ">
                </div>
                <div class="auth-form__group">
                    <input type="email" class="auth-form__input" name="email" placeholder="Email của bạn">
                </div>
                <div class="auth-form__group">
                    <input type="password" class="auth-form__input" name="matkhau" placeholder="Mật khẩu của bạn">
                </div>
            </div>
            <div class="auth-form__aside">
                <div class="auth-form__help">
                    <a href="index.php?quanly=dangnhap" class="auth-form__help-link auth-form__help-forgot">Đã có tài khoản, đăng nhập</a>
                </div>
            </div>

            <div class="auth-form__aside">
                <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với Newlook về
                    <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                    <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
            </div>

            <div class="auth-form__controls">
                <input class="btn btn--primary" type="submit" name="dangky" value="Đăng ký"></input>
            </div>
        </div>
    </div>

</form>