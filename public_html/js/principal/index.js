'use strict';

// Class definition
var KTWidgets = (function () {
	var initMixedWidget2 = function () {
		var charts = document.querySelectorAll('.mixed-widget-2-chart');

		var color;
		var strokeColor;
		var height;
		var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
		var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
		var options;
		var chart;

		[].slice.call(charts).map(function (element) {
			height = parseInt(KTUtil.css(element, 'height'));
			color = KTUtil.getCssVariableValue('--bs-' + element.getAttribute('data-kt-color'));
			strokeColor = KTUtil.colorDarken(color, 15);

			options = {
				series: [
					{
						name: 'Net Profit',
						data: [0, 45, 32, 70, 40, 40, 40],
					},
				],
				chart: {
					fontFamily: 'inherit',
					type: 'area',
					height: height,
					toolbar: {
						show: false,
					},
					zoom: {
						enabled: false,
					},
					sparkline: {
						enabled: true,
					},
					dropShadow: {
						enabled: true,
						enabledOnSeries: undefined,
						top: 5,
						left: 0,
						blur: 3,
						color: strokeColor,
						opacity: 0.5,
					},
				},
				plotOptions: {},
				legend: {
					show: false,
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					type: 'solid',
					opacity: 0,
				},
				stroke: {
					curve: 'smooth',
					show: true,
					width: 3,
					colors: [strokeColor],
				},
				xaxis: {
					categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
					labels: {
						show: false,
						style: {
							colors: labelColor,
							fontSize: '12px',
						},
					},
					crosshairs: {
						show: false,
						position: 'front',
						stroke: {
							color: borderColor,
							width: 1,
							dashArray: 3,
						},
					},
				},
				yaxis: {
					min: 0,
					max: 80,
					labels: {
						show: false,
						style: {
							colors: labelColor,
							fontSize: '12px',
						},
					},
				},
				states: {
					normal: {
						filter: {
							type: 'none',
							value: 0,
						},
					},
					hover: {
						filter: {
							type: 'none',
							value: 0,
						},
					},
					active: {
						allowMultipleDataPointsSelection: false,
						filter: {
							type: 'none',
							value: 0,
						},
					},
				},
				tooltip: {
					style: {
						fontSize: '12px',
					},
					y: {
						formatter: function (val) {
							return '$' + val + ' thousands';
						},
					},
					marker: {
						show: false,
					},
				},
				colors: ['transparent'],
				markers: {
					colors: [color],
					strokeColor: [strokeColor],
					strokeWidth: 3,
				},
			};

			chart = new ApexCharts(element, options);
			chart.render();
		});
	};
	var initMixedWidget5 = function () {
		var charts = document.querySelectorAll('.mixed-widget-5-chart');

		[].slice.call(charts).map(function (element) {
			var height = parseInt(KTUtil.css(element, 'height'));

			if (!element) {
				return;
			}

			var color = element.getAttribute('data-kt-chart-color');

			var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-800');
			var strokeColor = KTUtil.getCssVariableValue('--bs-' + 'gray-300');
			var baseColor = KTUtil.getCssVariableValue('--bs-' + color);
			var lightColor = KTUtil.getCssVariableValue('--bs-light-' + color);

			var options = {
				series: [
					{
						name: 'Net Profit',
						data: [30, 30, 60, 25, 25, 40],
					},
				],
				chart: {
					fontFamily: 'inherit',
					type: 'area',
					height: height,
					toolbar: {
						show: false,
					},
					zoom: {
						enabled: false,
					},
					sparkline: {
						enabled: true,
					},
				},
				plotOptions: {},
				legend: {
					show: false,
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					type: 'gradient',
					opacity: 1,
					gradient: {
						type: 'vertical',
						shadeIntensity: 0.5,
						gradientToColors: undefined,
						inverseColors: true,
						opacityFrom: 1,
						opacityTo: 0.375,
						stops: [25, 50, 100],
						colorStops: [],
					},
				},
				stroke: {
					curve: 'smooth',
					show: true,
					width: 3,
					colors: [baseColor],
				},
				xaxis: {
					categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
					labels: {
						show: false,
						style: {
							colors: labelColor,
							fontSize: '12px',
						},
					},
					crosshairs: {
						show: false,
						position: 'front',
						stroke: {
							color: strokeColor,
							width: 1,
							dashArray: 3,
						},
					},
					tooltip: {
						enabled: true,
						formatter: undefined,
						offsetY: 0,
						style: {
							fontSize: '12px',
						},
					},
				},
				yaxis: {
					min: 0,
					max: 65,
					labels: {
						show: false,
						style: {
							colors: labelColor,
							fontSize: '12px',
						},
					},
				},
				states: {
					normal: {
						filter: {
							type: 'none',
							value: 0,
						},
					},
					hover: {
						filter: {
							type: 'none',
							value: 0,
						},
					},
					active: {
						allowMultipleDataPointsSelection: false,
						filter: {
							type: 'none',
							value: 0,
						},
					},
				},
				tooltip: {
					style: {
						fontSize: '12px',
					},
					y: {
						formatter: function (val) {
							return '$' + val + ' thousands';
						},
					},
				},
				colors: [lightColor],
				markers: {
					colors: [lightColor],
					strokeColor: [baseColor],
					strokeWidth: 3,
				},
			};

			var chart = new ApexCharts(element, options);
			chart.render();
		});
	};
	// Public methods
	return {
		init: function () {
			initMixedWidget2();
			initMixedWidget5();
		},
	};
})();

// Webpack support
if (typeof module !== 'undefined') {
	module.exports = KTWidgets;
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTWidgets.init();
});
