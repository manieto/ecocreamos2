var ContactPage = function () {

	return {
		//Basic Map
		initMap: function () {
			var map;
			$(document).ready(function () {
				map = new GMaps({
					div: '#map',
					scrollwheel: true,
					lat: 39.6222119,
					lng: 2.7182737
				});

				var marker = map.addMarker({
					lat: 39.6222119,
					lng: 2.7182737,
					title: "EcoCreamos"
				});
			});
		},
		//Panorama Map
		initPanorama: function () {
			var panorama;
			$(document).ready(function () {
				panorama = GMaps.createPanorama({
					el: '#panorama',
					lat: 39.6222119,
					lng: 2.7182737
				});
			});
		}

	};
}();