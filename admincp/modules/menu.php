<div class="sidebar">
<<<<<<< HEAD
    <ul class="menu">
        <?php
        // Kiểm tra xem kết nối đến cơ sở dữ liệu đã được thiết lập chưa
        if ($mysqli->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $mysqli->connect_error);
        }

        // Truy vấn cơ sở dữ liệu để lấy dữ liệu menu
        $sql = "SELECT * FROM menu_features";
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
        ?>
        <li class="logout">
            <?php
            if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                unset($_SESSION['dangnhap']);
                header('Location:login.php');
            }
            ?>
            <a href="index.php?dangxuat=1">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>
=======
	<ul class="menu">
		<li class="click">
			<a href="index.php?action=1&query=thongke">
				<i class="fa-solid fa-house"></i>
				<span>Thống kê</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlydanhmucsanpham&query=them">
				<i class="fa-solid fa-list"></i>
				<span>Danh mục sản phẩm</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlysp&query=them">
				<i class="fa-solid fa-bag-shopping"></i>
				<span>Sản phẩm</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlydanhmucbaiviet&query=them">
				<i class="fa-solid fa-table-list"></i>
				<span>Danh mục bài viết</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlybaiviet&query=them">
				<i class="fa-solid fa-comment"></i>
				<span>Bài viết</span>
			</a>
		</li>

		<li class="click">
			<a href="index.php?action=quanlytaikhoan&query=quanly">
				<i class="fa-solid fa-user"></i>
				<span>Tài khoản</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlydonhang&query=lietke">
				<i class="fa-solid fa-cart-shopping"></i>
				<span>Đơn hàng</span>
			</a>
		</li>
		<li class="click">
			<a href="index.php?action=quanlyweb&query=capnhat">
				<i class="fa-solid fa-globe"></i>
				<span>Quản lý Website</span>
			</a>
		</li>
		<li class="logout">
			<?php
			if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
				unset($_SESSION['dangnhap']);
				header('Location:login.php');
			}
			?>
			<a href="index.php?dangxuat=1">
				<i class="fa-solid fa-arrow-right-from-bracket"></i>
				<span>Đăng xuất</span>
			</a>
		</li>
	</ul>
	<script>
		const menuItems = document.querySelectorAll('.menu li');

		function setActiveMenuItem() {
			const currentURL = new URL(window.location.href);
			const currentAction = currentURL.searchParams.get('action');
			const currentQuery = currentURL.searchParams.get('query');

			menuItems.forEach(menuItem => {
				const menuItemLink = menuItem.querySelector('a');
				const menuItemURL = new URL(menuItemLink.href);
				const menuItemAction = menuItemURL.searchParams.get('action');
				const menuItemQuery = menuItemURL.searchParams.get('query');

				if (menuItemAction === currentAction && (menuItemQuery === currentQuery || !menuItemQuery)) {
					menuItem.classList.add('active');
				} else {
					menuItem.classList.remove('active');
				}
			});
		}

		setActiveMenuItem(); // Call initially to set active state on page load

		menuItems.forEach(menuItem => {
			menuItem.addEventListener('click', () => {
				setActiveMenuItem(); // Update active state on click
			});
		});
	</script>

</div>
>>>>>>> 0c72b891b183e0e40642823411ba9b9d09a6fbc8
