var ContactPage = function () {

	return {
		//Basic Map
		initMap: function () {
			var map;
			$(document).ready(function () {
				map = new GMaps({
					div: '#map',
					scrollwheel: true,
					lat: 39.6084056,
					lng: 2.672692
				});

				var marker = map.addMarker({
					lat: 39.6084056,
					lng: 2.672692,
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
					lat: 39.6084056,
					lng: 2.672692
				});
			});
		}

	};
}();