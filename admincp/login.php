<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
	$taikhoan = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$_SESSION['dangnhap'] = $taikhoan;
		header("Location:index.php");
	} else {
		echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
		header("Location:login.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập Admincp</title>
  <style type="text/css">
    body {
      background: #f2f2f2;
      /* Optional: Hide scrollbars for a cleaner popup effect */
      overflow: hidden;
    }

    .popup-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999; /* Ensure popup is displayed above other elements */
    }

    .popup-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      width: 300px; /* Adjust width as needed */
    }

    .table-login {
      width: 100%;
    }

    .table-login tr td {
      padding: 5px;
    }
  </style>
</head>

<body>
  <div class="popup-wrapper">
    <div class="popup-content">
      <h3>Đăng nhập Admin</h3>
      <form action="" autocomplete="off" method="POST">
        <table class="table-login" style="text-align: center; border-collapse: collapse;">
          <tr>
            <td colspan="2">
              </td>
          </tr>
          <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="username" required></td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password" required></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Trigger popup on page load or button click (replace "trigger_button_id" with the actual ID)
      // $("#trigger_button_id").click(function() {
      $(window).on('load', function() { // Popup displays on page load
        $('.popup-wrapper').fadeIn(300); // Animate popup appearance
      });

      // Close the popup when clicking outside or on a designated element
      $(document).on('click', function(e) {
        if ($(e.target).hasClass('popup-wrapper') || $(e.target).closest('.popup-close').length) {
          $('.popup-wrapper').fadeOut(300); // Animate popup disappearance
        }
      });
    });
  </script>
</body>

</html>