$(document).ready(function(){
	$(".huyloaisp").hide();
	$(".huyloaisp").click(function(event) {
		$(".themloaisp").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Thêm loại sản phẩm');
		$(".huyloaisp").hide();
	});
	$(".sualoaisp").click(function(event) {
    	$('input[name="data[ten_loaisanpham]"]').val($(this).attr("ten_loaisanpham"));
    	$('select[name="data[ma_dmsanpham]"]').val($(this).attr("ma_dmsanpham")).trigger('change');
		$(".huyloaisp").show();
		$(".themloaisp").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Cập nhật loại sản phẩm');
		$(".themloaisp").val($(this).attr("ma_loaisanpham"));
		$(".themloaisp").attr("name","capnhatsanpham");

		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
    });

	
	// Code add, remove select box fiels dynamically
	$(document).on('click', '.add', function(){
		var tr = $("#row_product").html();
		$("#row_product").parent().append("<tr>" + tr + "</tr>");

	});

	$(document).on('click', '.remove', function(){
		$(this).parent().parent().remove();
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
