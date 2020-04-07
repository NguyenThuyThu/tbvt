$(document).ready(function(){
	// Carousel
	$("#jq_carousel").featureCarousel({
            autoPlay: 5000,             // sets auto-play slideshow with rotation every 2 seconds
            largeFeatureWidth: 600,     // width of image in center
            largeFeatureHeight: 350,    // height of image in center
            smallFeatureWidth: .70,     // width of the other images (42% of original width)
            smallFeatureHeight: .40,     // height of the other images (35% of original height)
            trackerIndividual: false,
            trackerSummation: false
        });


	$("#carousel__prev").click(function () {
		jq_carousel.prev();
	});
	$("#carousel__next").click(function () {
		jq_carousel.next();
	});

	
	// Code add, remove select box fiels dynamically
	$(document).on('click', '.add', function(){
		var tr = $("#row_product").html();
		$("#row_product").parent().append("<tr>" + tr + "</tr>");
	});

	$(document).on('click', '.remove', function(){
		// $(this).parent().parent().remove();
	});
	// var inputs = $('input[name="item_name[]"]');

	// inputs.click(function() {
	//     alert(inputs.index(this));
	// });
	// $(document).on(inputs, "keyup", function(){
	// 	console.log(inputs.index(this));
	// });
	
	function tinhtongTien(){
		
	}

});
