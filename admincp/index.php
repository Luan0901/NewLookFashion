<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.cssv=<?php echo time(); ?>">
</head>
<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location:login.php');
}
?>

<body>

    <?php
    include("config/config.php");
    include("modules/menu.php");
    include("modules/main.php");
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
            new Morris.Line({
                // ID of the element in which to draw the chart.
                element: 'myfirstchart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: [{
                        year: '22-11-2023',
                        order: 5,
                        sales: 15000,
                        quantity: 20
                    },
                    {
                        year: '20-11-2023',
                        order: 5,
                        sales: 30000,
                        quantity: 6
                    },
                    {
                        year: '19-11-2023',
                        order: 5,
                        sales: 27000,
                        quantity: 3
                    },

                ],
                // The name of the data record attribute that contains x-values.
                xkey: 'year',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['order', 'sales', 'quantity'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
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