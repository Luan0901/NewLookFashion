<header class="header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-4 text-center">
                <a href="index.php" class="header__logo">
                    <img src="./images/newlook.png" alt="" class="header__logo-img">
                </a>
            </div>
            <!-- Thanh Trang chủ, Tin tức, Liên hệ -->
            <div class="col-md-5">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item <?php if (isset($_GET['quanly']) && $_GET['quanly'] == 'trangchu') echo 'active'; ?>">
                                <a class="nav-link" href="index.php?quanly=trangchu" style="font-size: 20px; margin-right: 10px;">Trang chủ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?php if (isset($_GET['quanly']) && $_GET['quanly'] == 'tintuc') echo 'active'; ?>">
                                <a class="nav-link" href="index.php?quanly=tintuc" style="font-size: 20px; margin-right: 10px;">Tin tức</a>
                            </li>
                            <li class="nav-item <?php if (isset($_GET['quanly']) && $_GET['quanly'] == 'lienhe') echo 'active'; ?>">
                                <a class="nav-link" href="index.php?quanly=lienhe" style="font-size: 20px; margin-right: 10px;">Liên hệ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px; margin-right: 10px;">
                                    Danh mục sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul class="list_sidebar" id="list_danhmucsanpham">
                                        <?php
                                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                        while ($row = mysqli_fetch_array($query_danhmuc)) {
                                            $active_class = ""; // Reset 'active_class' before each iteration

                                            // Check if current category ID matches the requested category ID (from URL)
                                            if (isset($_GET['id']) && $_GET['id'] == $row['id_danhmuc']) {
                                                $active_class = "active"; // Add 'active' class if category matches
                                            }
                                        ?>
                                            <li class="sidebar-item <?php echo $active_class; ?>" id="item_danhmucsanpham">
                                                <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Thanh Tìm kiếm và Giỏ hàng -->
            <div class="col-md-3">
                <div class="row justify-content-center">
                    <div class="mr-3">
                        <a href="#" type="button" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="mr-4">
                            <lord-icon src="https://cdn.lordicon.com/unukghxb.json" trigger="hover" stroke="bold" colors="primary:#ffffff,secondary:#ffffff" style="font: size 2.4em;">
                            </lord-icon>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                            <!-- Form tìm kiếm -->
                            <form class="header__search-form " style="display: flex;" action="index.php?quanly=timkiem" method="POST">
                                <input autocomplete="off" type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                <button class="btn btn--primary " type="submit" name="timkiem">
                                    Tìm kiếm
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="mr-3">
                        <a href="index.php?quanly=giohang" class="mr-4">
                            <lord-icon src="https://cdn.lordicon.com/odavpkmb.json" trigger="hover" stroke="bold" colors="primary:#ffffff,secondary:#ffffff" style="font: size 2.4em;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="mr-3">
                        <a href="#" type="button" id="dropdownLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <lord-icon src="https://cdn.lordicon.com/hrjifpbq.json" trigger="hover" colors="primary:#ffffff" style="font: size 2.4em;">
                            </lord-icon>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownLogin">
                            <?php
                            if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                                unset($_SESSION['dangky']);
                                unset($_SESSION['cart']);
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['dangky'])) {
                            ?>
                                <a class="dropdown-item" href="index.php?dangxuat=1">Đăng xuất</a>
                                <a class="dropdown-item" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a>
                                <a class="dropdown-item" href="index.php?quanly=lichsudonhang">Lịch sử đơn hàng</a>
                            <?php
                            } else {
                            ?>
                                <a class="dropdown-item" href="index.php?quanly=dangky">Đăng Ký</a>
                                <a class="dropdown-item" href="index.php?quanly=dangnhap">Đăng Nhập</a>
                            <?php
                            }
                            ?>
                        </div>

                        `
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>