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


	// $("#carousel__prev").click(function () {
	// 	jq_carousel.prev();
	// });
	// $("#carousel__next").click(function () {
	// 	jq_carousel.next();
	// });

	// Code add, remove select box fiels dynamically
	$(document).on('click', '.add', function(){
		var tr = $("#row_product").html();
		$("#row_product").parent().append("<tr>" + tr + "</tr>");
	});
	$(".tt_search").slideUp(300);
	$(document).on('keyup', '.header__search-input', function(){
		var timkiem = $(this).val();
		search(timkiem);			
	});
	$( ".tt_search" ).mouseleave(function(event) {
		$(".tt_search").slideUp(300);
	});

	function search(timkiem){

		if($(".header__search-input").val() == ""){
			$(".tt_search").slideUp(500);
		}else{
			$(".tt_search").slideDown(500);
		}
		$.ajax({
			url:  window.location.origin + "/" + window.location.pathname.split("/")[1] + '/timkiem',
			type: 'post',
			dataType: 'text',
			data: {
				'timkiem': timkiem
			},
		})
		.done(function(data) {
			data = JSON.parse(data);
			var url = window.location.origin + "/" + window.location.pathname.split("/")[1] + '/';
			var html = "";
			$.map(data, function(index, elem) {
				html += '<a target="_blank" href="'+url+'trangchitiet?product=' + index['ten_sanpham'] + '_' + index['ma_sanpham'] + '">';
				html += '<div class="col-md-12" style="padding-bottom: 10px;padding-top: 10px;border-bottom: 1px dotted #ccc;">';
				html += '<div class="col-md-4">';
				html +='<img src="' + url + 'public/images/anhsanpham/' + index['linkanh_sanpham'] + '" width="100%" class="anhsearch">';
				html += '</div>';
				html += '<div class="col-md-8"><p class="tensp_Se"><b> '+ index['ten_sanpham']+'</b></p>';
				html += '<p class="xuatxuaa">Xuất xứ: '+ index['xuatxu_sanpham']+'</p>';
				html += '<p  class="discountTag_11Tt">Giá sản phẩm: '+ index['dongia_sanpham']+' đ</p>';
				html += '</div>';
				html += '</div>';
				html += '</a>';
			});
			$(".tt_search").html(html);
			
		})
		.fail(function() {
			console.log("error");
		})
	}

});
