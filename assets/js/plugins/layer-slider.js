var LayerSlider = function () {

    return {

        //Layer Slider
        initLayerSlider: function () {
		    $(document).ready(function(){
		        jQuery("#layerslider").layerSlider({
			        skin: 'noskin',
			        responsive : true,
			        responsiveUnder : 960,
			        layersContainer : 960,
							pauseOnHover : false,
							showCircleTimer : false,
			        skinsPath: 'assets/plugins/layer-slider/layerslider/skins/'
			    });
		    });     
        }

    };
}();        