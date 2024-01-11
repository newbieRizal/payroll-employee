$(document).ready(function() {

	// Bar Chart

	Morris.Bar({
		element: 'bar-charts',
		data: [
			{ y: '2018', a: 50, b: 90 },
			{ y: '2019', a: 75,  b: 65 },
			{ y: '2020', a: 50,  b: 40 },
			{ y: '2021', a: 75,  b: 65 },
			{ y: '2022', a: 50,  b: 40 },
			{ y: '2023', a: 75,  b: 65 },
			{ y: '2024', a: 100, b: 50 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Income', 'Total Outcome'],
		lineColors: ['#f43b48','#453a94'],
		lineWidth: '3px',
		barColors: ['#f43b48','#453a94'],
		resize: true,
		redraw: true
	});

	// Line Chart

	Morris.Line({
		element: 'line-charts',
		data: [
			{ y: '2018', a: 50, b: 90 },
			{ y: '2019', a: 75,  b: 65 },
			{ y: '2020', a: 50,  b: 40 },
			{ y: '2021', a: 75,  b: 65 },
			{ y: '2022', a: 50,  b: 40 },
			{ y: '2023', a: 75,  b: 65 },
			{ y: '2024', a: 100, b: 50 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Sales', 'Total Revenue'],
		lineColors: ['#f43b48','#453a94'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});

});
