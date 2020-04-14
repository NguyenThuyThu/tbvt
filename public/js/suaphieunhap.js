$(document).ready(function($) {
	$(".suaPN").click(function(event) {
		data_sp = JSON.parse($(this).attr("data-sanpham"));
		var html = '';
       $("#tbody_pn").html("");
       $.map(data_sp, function(v, index) {
       	console.log(v['ma_sanpham']);
            html += '<tr class="hidden" id="row_productpn">';
            html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
			html += '<td><p><img src="public/images/anhsanpham/'+v['linkanh_sanpham']+'" width="130px"></p></td>';
			html += '<td>'+v['ten_sanpham']+'<input type="hidden" name="data[ma_sanpham][]" value="'+ v['ma_sanpham']+'"></td>';
			html += '<td><input type="number" name="data[soluong_nhap][]" value="' + v['soluong_nhap'] + '"class="form-control soluong"></td>';
			html += '<td><input type="text" name="data[dongia_nhap][]" value="' + v['dongia_nhap'] + '"class="form-control dongia"></td>';
			html += '<td><input type="text" name="dongiaban[]" value="' + v['dongia_sanpham'] + '"class="form-control dongiaban"></td>';
			html += '<td><input type="text" disabled value="' + v['tongtien'] + '"class="form-control thanhtien"></td>';
			html += '</tr>';
			$('input[name="data[soluong_nhap][]"]').val(v['soluong_nhap']);
			$('input[name="data[dongia_nhap][]"]').val(v['dongia_nhap']);
			$('input[name="dongiaban[]"]').val( v['dongia_sanpham']);
			$('input[name="data[ma_sanpham][]"]').val( v['ma_sanpham']);
       });
       $('button[name="suaPN"]').val($(this).attr("ma_phieunhap"));
	   $(".capnhatpn").val($(this).attr("ma_phieunhap"));
       $("#tbody_pn").html(html);
       sumMoney();
	});

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
			sl = $(this).parent().parent().find(".soluong").val();
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
		});
		$(".dongia").change(function(event) {
			dongiaban = $(this).parent().parent().find(".dongiaban");
			sl = $(this).parent().parent().find(".soluong").val();
			dg = $(this).val().trim().replace(/\,/g, '');
			dongia = parseInt(dg)*0.1 + parseInt(dg);
			dongiaban.val(dongia);
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
			thanhtien.val(tongtien);
		});

	}
});


