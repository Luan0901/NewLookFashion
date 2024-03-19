<header class="header">
    <div class="grid">
        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                    Vào cửa hàng trên TiktokShop
                    <!-- header QRCode  -->
                    <div class="header__qr">
                        <img src="images/QR_code.png" alt="QR code" class="header__qr-img">
                        <div class="header__qr-apps">
                            <a href="" class="header__qr-link"> <img src="images/ch_play.png" alt="Google Play" class="header__qr-download-img">
                            </a>
                            <a href="" class="header__qr-link">
                                <img src="images/app_store.png" alt="App Store" class="header__qr-download-img">
                            </a>

                        </div>
                    </div>
                </li>
                <li class="header__navbar-item">
                    <span class="header__navbar-title--no-pointer">Kết nối</span>
                    <a href="" class="header__navbar-icon-link"><i class=" header_navbar-icon fa-brands fa-facebook"></i></a>
                    <a href="" class="header__navbar-icon-link"><i class=" header_navbar-icon fa-brands fa-instagram"></i></a>
                </li>
            </ul>

            <ul class="header__navbar-list">
                <?php
                if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                    unset($_SESSION['dangky']);
                }
                ?>
                <?php
                if (isset($_SESSION['dangky'])) {

                ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?quanly=lichsudonhang">Lịch sử đơn hàng</a></li>
                <?php
                } else {
                ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky">Đăng Ký</a></li>
                    <span class="auth-form__help-separate-1"></span>
                    <li class="nav-item "><a class="nav-link" href="index.php?quanly=dangnhap">Đăng Nhập</a></li>
                <?php
                }
                ?>

            </ul>
        </nav>

        <!-- Header with search -->
        <!-- <img style="width: 150px; height: 150px;" src="images/newlook.png" alt=""> -->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="index.php" class="header__logo">
                    <img src="images/newlook.png" alt="" class="header__logo-img">
                </a>
            </div>

            <div class="header__search">
                <div class="header__logo">
                    <a href="../index.php" class="header__logo">
                        <!-- <img src="/newlook/assets/img/newlook.png" alt="" class="header__logo-img"> -->
                    </a>
                </div>
                <div class="header__search-input-wrap">
                    <form style="display: flex;" action="index.php?quanly=timkiem" method="POST">
                        <input autocomplete="off" type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                        <input style="margin-right: 0;" class="timkiem header__cart-view-cart btn btn--primary" type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                    <!-- search history -->
                    <!-- <div class="header__search-history">
                                    <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                            <a href="">Túi xách</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="">Ví ngắn</a>
                                        </li>
                                    </ul>
                                </div> -->
                </div>
                <!-- <div class="header__search-select">
                                <span class="header__search-select-label">Trong shop</span>
                                <i class="header__search-select-icon fa-solid fa-angle-down"></i>

                                <ul class="header__search-option">
                                    <li class="header__search-option-item header__search-option-item--active">
                                        <span>Trong shop</span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                    <li class="header__search-option-item">
                                        <span>Ngoài shop</span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                </ul>
                            </div> -->
                <!-- <button class="header__search-btn">
                                <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                            </button > -->

            </div>

            <div class="header__cart">
                <div hre class="header__cart-wrap">
                    <a href="index.php?quanly=giohang"><i class="header__cart-icon fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

























