$(document).ready(function($) {
	$(".suaPN").click(function(event) {
		data_sp = JSON.parse($(this).attr("data-sanpham"));
		var html = '';
		// var option = '';
		console.log(data_sp);
		// $("select[name='data[ma_sanpham]']").html("");
       $("#tbody_pn").html("");
       $.map(data_sp, function(v, index) {
            html += '<tr class="hidden" id="row_productpn">';
            html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
			html += '<td><p><img src="public/images/anhsanpham/'+v['linkanh_sanpham']+'" width="130px"></p></td>';
			html += '<td>'+v['ten_sanpham']+'</td>';
			// html += '<td><select class="form-control item_unit"><option value="'+v['ma_sanpham']+'">'+v['ten_sanpham']+'</option></select></td>';
			html += '<td><input type="number" name="data[soluong_nhap][]" value="' + v['soluong_nhap'] + '"class="form-control soluong"></td>';
			html += '<td><input type="text" name="data[dongia_nhap][]" value="' + v['dongia_nhap'] + '"class="form-control dongia"></td>';
			html += '<td><input type="text" name="dongiaban[]" value="' + v['dongia_sanpham'] + '"class="form-control dongiaban"></td>';
			html += '<td><input type="text" disabled value="' + v['tongtien'] + '"class="form-control thanhtien"></td>';
			// html += '<td class="text-center"><button type="button" name="remove_pn" class="btn btn-danger btn-sm remove_pn"><i class="fa fa-minus-square" aria-hidden="true"></i></button></td>';
			html += '</tr>';
			// option += '<option value="'+v['ma_sanpham']+'">'+v['ten_sanpham']+'</option>';
       });
       $("#tbody_pn").html(html);

       // Code add, remove select box fiels dynamically
	// $(document).on('click', '.add_insert', function(){
	// 	tong_input = $("#tbody_pn").find("tr").length;
	// 	var tr = $("#row_product").html();
	// 	$("#row_product").parent().append("<tr>" + tr + "</tr>");
	// 	sumMoney();
	// });

	sumMoney();

	function sumMoney(){
		var sl = 0;
		var dg = 0;
		var thanhtien;
		$(".soluong").change(function(event) {
			sl = $(this).val().trim();
			dg =  $(this).parent().parent().find(".dongia").val();
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
			thanhtien.val(tongtien);
		});

		$(".dongia").keypress(function(event) {
			dg = $(this).val().trim();
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
		});
		$(".dongia").change(function(event) {
			dongiaban = $(this).parent().parent().find(".dongiaban");
			dg = $(this).val().trim().replace(/\,/g, '');
			dongia = parseInt(dg)*0.1 + parseInt(dg);
			dongiaban.val(dongia);
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
			thanhtien.val(tongtien);
			// console.log();
			// $(this).parent().parent().find(".thanhtien").simpleMoneyFormat(tongtien);
		});

	}

	// $(document).on('click', '.remove_pn', function(){
	// 	if($("#tbody_pn").find("tr").length > 1){
	// 		$(this).parent().parent().remove();
	// 	}else{
	// 		error("Phải có ít nhất một sản phẩm");
	// 		return;
	// 	}
	// });


	$(".suaPN").click(function(event) {
		$('input[name="data[soluong_nhap][]"]').val($(this).attr("soluong"));
		$('input[name="data[dongia_nhap][]"]').val($(this).attr("dongia"));
		$('input[name="dongiaban[]"]').val($(this).attr("dongiaban"));
		// $('button[name="suaPN"]').val($(this).attr("ma_phieunhap"));
		$(".capnhatpn").val($(this).attr("ma_phieunhap"));

		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
	});
	});
});


