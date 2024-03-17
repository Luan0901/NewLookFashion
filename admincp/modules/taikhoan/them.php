<h1>Quản lý tài khoản</h1>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php">
        <tr>
            <td>Tên tài khoản</td>
            <td><input type="text" name="tendanhmucbaiviet"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="thutu"></td>
        </tr>
        <tr>
            <td>Quyền</td>
            <td><input type="radio" name="gender" value="male" checked> Admin<br></td>
            <td>  <input type="radio" name="gender" value="female"> Staff<br></td>
            <td> <input type="radio" name="gender" value="other"> User<br></td>       
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmucbaiviet" value="Thêm tài khoản"></td>
        </tr>
    </form>
</table>