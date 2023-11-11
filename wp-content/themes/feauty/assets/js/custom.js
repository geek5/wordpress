jQuery(function($) {
	if( $('.testimonial-slider').length ){
        var testimonial = tns({
            "container": ".testimonial-slider",
            "mouseDrag": true,
            "autoplay": true,
            "rewind": true,
            "mode": "gallery",
            "controls": false,
            "nav": false,
            "autoplayButtonOutput": false,
            "controlsContainer": "#testimonial1-nav-wrapper",
        });

        $(function () {
            $(".next").click(function () {
                testimonial.goTo("next");
            });
            $(".prev").click(function () {
                testimonial.goTo("prev");
            });
        });
	}	
});