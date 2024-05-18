<style>
    .new-arrival {

        font-size: 40px;
        /* Kích thước chữ */
        font-weight: bold;
        /* Đậm */
        margin-left: 60px;
        margin-right: 60px;
        color: #222831;
        /* Màu chữ */
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .rounded-image {

        overflow: hidden;
        /* Đảm bảo hình ảnh không vượt ra ngoài khu vực bo góc */
    }

    .description-wrapper {
        display: flex;
        flex-direction: column;
        align-items: start;
        color: black;
        margin-top: 10px;
    }

    .description-content {
        color: #76ABAE;
        font-size: 16px;
        display: flex;
        align-items: start;
        margin-top: 5px;
    }

    .icon-wrapper {
        margin-left: 10px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        width: 50px;
        /* Độ rộng của phần biểu tượng */
        ;
        height: 50px;
        justify-content: center;
    }

    .icon-wrapper i {
        font-size: 25px;
        /* Kích thước icon */
    }

    /* Kiểu cho col-md-4 */
    .custom-col {
        position: relative;
        /* Tạo không gian tương đối cho con trực tiếp của nó */
        overflow: hidden;
        /* Ẩn nội dung vượt ra ngoài kích thước của col */
    }

    /* Kiểu cho ảnh và phần text */
    .custom-col .rounded-image img,
    .custom-col .description-wrapper,
    .custom-col .icon-wrapper {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Hiệu ứng chuyển đổi mượt mà khi hover */
    }

    /* Hiệu ứng khi hover vào col */
    .custom-col:hover .rounded-image img,
    .custom-col:hover .description-wrapper,
    .custom-col:hover .icon-wrapper {
        transform: translateY(-10px);
        /* Dịch chuyển lên trên khi hover */

    }

    /* Lớp đè cho hover */
    .hover-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        /* Ẩn lớp đè ban đầu */
        transition: opacity 0.3s ease;
        /* Hiệu ứng chuyển đổi mượt mà khi hover */
        background-color: rgba(0, 0, 0, 0.5);
        /* Màu nền cho lớp đè */
        z-index: 1;
        /* Đảm bảo lớp đè nằm phía trên các phần tử khác */
    }

    /* Hiển thị lớp đè khi hover vào col */
    .custom-col:hover .hover-layer {
        opacity: 0;
        /* Hiển thị lớp đè khi hover */
    }

    /* Kiểu cho phần text */
    .custom-col .description-wrapper h3,
    .custom-col .description-content span {
        color: black;
        /* Màu chữ trắng */
    }

    .best-seller {
        font-size: 50px;
        /* Kích thước chữ */
        font-weight: bold;
        /* Đậm */
        margin-left: 60px;
        margin-right: 60px;
        color: #EEEEEE;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
</style>

<!-- New Arrival -->
<div class="container-fluid" style="margin-top: 20px"> <!-- Container cao nhất với độ rộng 100% -->
    <div class="row p-3"> <!-- Dòng 1 -->
        <div class="col-md-12">
            <h1 class="new-arrival">New Arrival</h1>
        </div>
    </div>
    <div class="row p-3"> <!-- Dòng 2 -->
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/fashion-1.jpg" alt="Hình ảnh cột 1" style="width: 350px; height: 500px;">
            </div>
            <a href="index.php?quanly=trangchu" class="hover-layer"></a> <!-- Lớp đè -->
            <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/fashion-2.jpg" alt="Hình ảnh cột 1" style="width: 350px; height: 500px;">
            </div>
            <a href="index.php?quanly=trangchu" class="hover-layer"></a> <!-- Lớp đè -->
            <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Hãy đổi mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/fashion-3.jpg" alt="Hình ảnh cột 1" style="width: 350px; height: 500px;">
            </div>
            <a href="index.php?quanly=trangchu" class="hover-layer"></a> <!-- Lớp đè -->
            <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Bộ sưu tập mới từ Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Best Seller -->
<div class="container-fluid" style="margin-top: 20px">
    <div class="row p-3" style="background: black; height:100px; align-items:center"> <!-- Dòng 1 -->
        <div class="col-md-12">
            <h1 class="best-seller">Best Seller</h1>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-1.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=23" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-2.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=58" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-3.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=21" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-4.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=20" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-5.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=59" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
        <div class="col-md-4 custom-col" style="justify-items: center; display: flex; flex-direction: column; align-items: center; padding: 10px">
            <div class="rounded-image">
                <img src="./images/bestseller-6.png" alt="Hình ảnh cột 1" style="width: 400px; height: 400px;">
            </div>
            <a href="index.php?quanly=sanpham&id=24" class="hover-layer"></a> <!-- Lớp đè -->
            <!-- <div class="row align-items-center" style="width: 350px; justify-content: space-around; padding: 10px">
                <div class="description-wrapper ">
                    <h3>Phong cách mới với Newlook</h3>
                    <div class="description-content">
                        <span>Khám phá ngay!</span>
                    </div>
                </div>
                <div class="icon-wrapper ">
                    <i class="fa-solid fa-arrow-right "></i>
                </div>
            </div> -->
        </div>
    </div>

</div>