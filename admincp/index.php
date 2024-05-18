<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.cssv=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['dangnhap'])) {
        header('Location:login.php');
    }
    include("config/config.php");
    include("modules/menu.php");
    include("modules/main.php");

    $sql = "SELECT DATE_FORMAT(ngaydat, '%Y-%m-%d') AS ngaydat, donhang, doanhthu, soluongban FROM tbl_thongke";
    $result = $mysqli->query($sql);

    $data = array();

    // Lấy dữ liệu từ kết quả truy vấn và đưa vào mảng $data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Đóng kết nối
    // $mysqli->close();
    ?>

    <footer>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script>
            CKEDITOR.replace('thongtinlienhe');
            CKEDITOR.replace('tomtat');
            CKEDITOR.replace('noidung');
        </script>
        <script type="text/javascript">
            // Sử dụng json_encode để chuyển đổi mảng PHP thành một mảng JavaScript
            var chartData = <?php echo json_encode($data); ?>;

            new Morris.Bar({
                // Các thuộc tính của biểu đồ
                element: 'myfirstchart',
                data: chartData, // Dữ liệu được lấy từ cơ sở dữ liệu
                xkey: 'ngaydat',
                ykeys: ['donhang', 'doanhthu', 'soluongban'],
                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán']
            });
          
        </script>

    </footer>
    <?php

    // include("modules/header.php");
    // include("modules/footer.php");
    ?>

</body>

</html>