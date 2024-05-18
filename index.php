<?php
session_start();
include("admincp/config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>" >    
    <link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo time(); ?>">    
    <link rel="stylesheet" type="text/css" href="css/base.css?v=<?php echo time(); ?>">
    <link
            rel="stylesheet"
            href="admincp/fonts/fontawesome-free-6.4.2/css/all.min.css?v=<?php echo time(); ?>"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap?v="
            rel="stylesheet"
        />

    
    <title>NewLook.Fashion</title>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include("pages/Header.php");

            // Kiểm tra xem trang hiện tại có phải là trang chủ không
            $isHomePage = !isset($_GET['quanly'] ) ;

            // Nếu là trang chủ, hiển thị slider
            if ($isHomePage) {
               
                include("pages/Slider.php");
                include("pages/IndexContent.php");
                include("pages/footer-email.php");
            } else {
              
              include("pages/main.php");
              
            }
            
            include("pages/footer.php");
            ?>
        </div>
    </div>

    <!-- Script cho việc chuyển tab -->
    <script type="text/javascript">
        // Hiện tab đầu tiên và ẩn phần còn lại
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav li').click(function(){
          $('#tabs-nav li').removeClass('active');
          $(this).addClass('active');
          $('.tab-content').hide();
          
          var activeTab = $(this).find('a').attr('href');
          $(activeTab).fadeIn();
          return false;
        });
    </script>

    <!-- Script cho việc thanh toán qua Paypal -->
    <script>
      paypal.Buttons({
        style: {
            layout:  'vertical',
            color:   'blue',
            shape:   'rect',
            label:   'paypal'
          },
        // Thiết lập giao dịch khi nhấp vào nút thanh toán
        createOrder: function(data, actions) {
            var tongtien = document.getElementById('tongtien').value;
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: tongtien // Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Hoàn tất giao dịch sau khi người thanh toán phê duyệt
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                window.location.replace('http://localhost/newlook/index.php?quanly=camon&thanhtoan=paypal');
          });
        },
        onCancle:function(data){
             window.location.replace('http://localhost/newlook/index.php?quanly=thongtinthanhtoan');
        }
      }).render('#paypal-button');
    </script>
</body>
</html>