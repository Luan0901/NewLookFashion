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