<?php
    require('../../../tfpdf/tfpdf.php');
    require('../../config/config.php');

    $pdf = new tFPDF();
    $pdf->AddPage("0");
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',11);
    
    $pdf->SetFillColor(255, 255, 255); // White background
    $pdf->SetDrawColor(204, 204, 204); // Light grey border
    $imageWidth = 60; // Độ rộng của hình ảnh
    $pageWidth = $pdf->GetPageWidth(); // Lấy chiều rộng của trang
    $imageX = ($pageWidth - $imageWidth) / 2; // Tính toán vị trí x để hình ảnh nằm giữa trang
    
    $pdf->Image('../../../images/newlook.png', $imageX, 10, $imageWidth); 

    // Kiểm tra và xử lý biến $code để tránh SQL injection
    $code = isset($_GET['code']) ? mysqli_real_escape_string($mysqli, $_GET['code']) : '';

    $sql_order = "SELECT tbl_cart.cart_date 
              FROM tbl_cart 
              WHERE tbl_cart.code_cart = '$code' LIMIT 1";
    $query_order = mysqli_query($mysqli, $sql_order);
    $order = mysqli_fetch_assoc($query_order);
    $order_date = date('d/m/Y', strtotime($order['cart_date']));

    $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
    // Thiết lập các thông tin cần in ra PD

    $pdf->SetY(30); // Đặt lại vị trí Y để bắt đầu từ dưới hình ảnh
    $pdf->Cell(0, 10, 'CỬA HÀNG THỜI TRANG NEWLOOK', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận Bình Thạnh', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Số điện thoại: 0908.808.501', 0, 1, 'C');
    $pdf->Ln(10);
    // $pdf->SetX(($pageWidth - $pdf->GetStringWidth('Ngày in: ' . date('d/m/Y'))) / 10);
    // $pdf->Cell(0, 10, 'Ngày: ' . date('d/m/Y'), 0, 1, 'L');
    $pdf->SetX(($pageWidth - $pdf->GetStringWidth('Ngày mua hàng: ' . $order_date)) / 10);
    $pdf->Cell(0, 10, 'Ngày mua hàng: ' . $order_date, 0, 1, 'L');

    $pdf->SetX(($pageWidth - $pdf->GetStringWidth('Mã đơn hàng: ' . $code)) /10);
    $pdf->Cell(0, 10, 'Mã đơn hàng: ' . $code, 0, 1, 'L');
    $pdf->Ln(10);
    $pdf->SetX(($pageWidth - $pdf->GetStringWidth('Chi tiết đơn hàng: ')) /10);
    $pdf->Cell(0, 10, 'Chi tiết đơn hàng: ');
    $pdf->Ln(10);

    $width_cell = array(15, 25, 100, 20, 30, 30);

    // Đặt vị trí cho bảng table
    $tableX = ($pageWidth - array_sum($width_cell)) / 2;

    $pdf->Cell($width_cell[0], 10, 'STT', 1, 0, 'C', true);
    $pdf->Cell($width_cell[1], 10, 'Mã SP', 1, 0, 'C', true);
    $pdf->Cell($width_cell[2], 10, 'Tên sản phẩm', 1, 0, 'C', true);
    $pdf->Cell($width_cell[3], 10, 'Số lượng', 1, 0, 'C', true); 
    $pdf->Cell($width_cell[4], 10, 'Giá', 1, 0, 'C', true);
    $pdf->Cell($width_cell[5], 10, 'Thành tiền', 1, 1, 'C', true); 
	
    $fill = false;
    $total = 0;
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
        $pdf->Cell($width_cell[0], 10, $i, 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[1], 10, $row['code_cart'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[2], 10, $row['tensanpham'], 1, 0, 'L', $fill);
        $pdf->Cell($width_cell[3], 10, $row['soluongmua'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[4], 10, number_format($row['giasp']), 1, 0, 'R', $fill);
        $tongtien = $row['soluongmua'] * $row['giasp'];
        $pdf->Cell($width_cell[5], 10, number_format($tongtien), 1, 1, 'R', $fill);
        $total += $tongtien;
        $fill = !$fill;
    }

	$pdf->Ln(10);
	$pdf->SetTextColor(255, 0, 0); // Màu đỏ   
	$pdf->Cell(0, 10, 'Tổng tiền: ' . number_format($total) . ' VND', 0, 0, 'L'); // Sửa cách canh từ 'R' thành 'L' để nằm bên trái
	$pdf->Ln(10);
    $pdf->SetTextColor(0, 0, 0); // Màu đen

    // Đặt vị trí cho dòng "Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi."
    $pdf->SetXY(($pageWidth - $pdf->GetStringWidth('Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.')) / 7, $pdf->GetY());
    $pdf->Cell(0, 29, 'Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->Output(); 
?>