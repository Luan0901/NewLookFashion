<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<p class="center-text">
    <a href="index.php?dangxuat=1" >ĐĂNG XUẤT 
    </a>
</p>
