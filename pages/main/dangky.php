<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '././mail/PHPMailer/src/Exception.php';
require '././mail/PHPMailer/src/PHPMailer.php';
require '././mail/PHPMailer/src/SMTP.php';

if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['name'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $role_id = 29;

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'newlookfashion009@gmail.com';
    $mail->Password = 'flnzojmwtffpobii';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('newlookfashion009@gmail.com');
    $mail->addAddress($email, $tenkhachhang);
    $mail->Subject = ("Bạn đã đăng ký thành công tài khoản trên website NewLookFashion");
    $mail->Body =  ("Chào mừng bạn đã là thành viên của chúng tôi");
    $mail->send();

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
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai,role_id) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "','" . $role_id . "')");
    if ($sql_dangky) {
        echo '<script>alert("Bạn đã đăng ký tài khoản thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
<form action="" autocomplete="off" method="POST" style="display: flex; justify-content: center;">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng ký</h3>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="name" placeholder="Họ tên của bạn">
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
                        <span style="font-size:1.4rem; margin-left:5px">Đã có tài khoản ?</span>
                        <a style="margin-left:5px"href="index.php?quanly=dangnhap" class="auth-form__help-link auth-form__help-forgot">Đăng nhập ngay</a>
                    </div>
                </div>

                <div class="auth-form__aside">
                    <label class="auth-form__policy-text">
                        <input type="checkbox" class="auth-form__checkbox" name="dieukhoan">
                        Bằng việc đăng kí, bạn đã đồng ý với Newlook về
                        <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                        <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                    </label>
                </div>

                <div class="auth-form__controls">
                    <input class="btn btn--primary btn-lg" type="submit" name="dangky" value="Đăng ký"></input>
                </div>
            </div>
        </div>
    </form>
    </div>


    <style>
    .container-fluid-dangky {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .auth-form__checkbox {
        margin-right: 5px;
    }
</style>

    <script>
        // JavaScript để quay lại trang index
        function goToIndex() {
            window.location.href = "./index.php";
        }
    </script>
</body>
</html>
