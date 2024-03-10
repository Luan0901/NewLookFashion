<?php
	require('../../../tfpdf/tfpdf.php');
	require('../../config/config.php');

	$pdf = new tFPDF();
	$pdf->AddPage("0");
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',11);
	
	$pdf->SetFillColor(255, 255, 255); // White background
	$pdf->SetDrawColor(204, 204, 204); // Light grey border

	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

	$pdf->Write(10,'Chi tiết đơn hàng:');
	$pdf->Ln(10);

	$width_cell = array(15, 25, 70, 20, 30, 30);

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

	$pdf->Cell(array_sum($width_cell), 0, '', 'T'); // Add bottom border to the table
	
	$pdf->Ln(10);
	$pdf->Cell(array_sum($width_cell), 10, 'Tổng tiền: ' . number_format($total) . ' VND', 0, 1, 'R');

	$pdf->Write(10,'Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.');
	$pdf->Ln(10);

	$pdf->Output(); 
?>
