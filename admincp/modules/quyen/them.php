<h1>Quản lý phân quyền</h1>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php">
        <tr>
            <td>Tên quyền</td>
            <td><input type="text" name="tenquyen"></td>
        </tr>
        <tr>
            <td>Chức năng</td>
            <td><input type="text" name="chucnang"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
			<td><textarea rows="10" name="mota" style="resize: none"></textarea></td>
		</tr>  
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmucbaiviet" value="Thêm quyền"></td>
        </tr>
    </form>
</table>