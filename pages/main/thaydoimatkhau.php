<div class="container-fluid-thaydoimatkhau">
<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='".$matkhau_moi."' WHERE email='" . $taikhoan . "' ");
			echo '<script>alert("Mật khẩu đã được thay đổi.")</script>';
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại.")</script>';
			
		}
	} 
?>

<form action="" autocomplete="off" method="POST" style="margin: 5px 20%;">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đổi mật khẩu</h3>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="email" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password_cu" placeholder="Mật khẩu cũ">
                    </div>
					<div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password_moi" placeholder="Mật khẩu mới">
                    </div>
                </div>

                <div class="auth-form__controls">
                    <input class="btn btn--primary btn-lg" type="submit" name="doimatkhau" value="Đổi mật khẩu">
                </div>
            </div>
        </div>
    </form>

</div>

<style>
    .container-fluid-thaydoimatkhau{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 500px;
    }
  </style>