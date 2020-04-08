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
		tong_input = $("#tbody").find("tr").length;
		var tr = $("#row_product").html();
		$("#row_product").parent().append("<tr>" + tr + "</tr>");
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
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
		});
		$(".dongia").change(function(event) {
			dg = $(this).val().trim();
			thanhtien = $(this).parent().parent().find(".thanhtien");
			tongtien = parseInt(sl)*parseInt(dg);
			thanhtien.val(tongtien);
			$(this).parent().parent().find(".thanhtien").simpleMoneyFormat(tongtien);
		});

		
	}
	

	$(document).on('click', '.remove', function(){
		if($("#tbody").find("tr").length > 1){
			$(this).parent().parent().remove();
		}else{
			error("Phải có ít nhất một sản phẩm");
			return;
		}
	});

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
	$(".them").click(function(event) {
		$('input[name="data[ten_nhacungcap]"]:last').val("");
    	$('input[name="data[diachi_nhacungcap]"]:last').val("");
    	$('input[name="data[sodienthoai_nhacungcap]"]:last').val("");
    	$('input[name="data[email_nhacungcap]"]:last').val("");
    	$('input[name="data[ghichu_nhacungcap]"]:last').val("");
    	$('input[name="data[website_nhacungcap]:last"]').val("");
    	$('button[name="capnhat"]').val("Them");
	});	
	$(".suanhacc").click(function(event) {
    	$('input[name="data[ten_nhacungcap]"]').val($(this).attr("ten_nhacungcap"));
    	$('input[name="data[diachi_nhacungcap]"]').val($(this).attr("diachi_nhacungcap"));
    	$('input[name="data[sodienthoai_nhacungcap]"]').val($(this).attr("sodienthoai_nhacungcap"));
    	$('input[name="data[email_nhacungcap]"]').val($(this).attr("email_nhacungcap"));
    	$('input[name="data[ghichu_nhacungcap]"]').val($(this).attr("ghichu_nhacungcap"));
    	$('input[name="data[website_nhacungcap]"]').val($(this).attr("website_nhacungcap"));
    	$('button[name="capnhat"]').val($(this).attr("ma_nhacungcap"));
    });
	/// change sản phẩm
	

	$(".huysp").hide();
	$(".huysp").click(function(event) {
		$(".themloaisp").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Thêm loại sản phẩm');
		$(".huysp").hide();
		$("button[name='capnhatsanpham']").attr("name","themloaisp");
	});
	$(".suasanpham").click(function(event) {
    	$('input[name="data[soluong_sanpham]"]').val($(this).attr("soluong_sanpham"));
    	$('input[name="data[ten_sanpham]"]').val($(this).attr("ten_sanpham"));
    	$('input[name="data[dongia_sanpham]"]').val($(this).attr("dongia_sanpham"));
    	$('input[name="data[thoigianbaohanh_sanpham]"]').val($(this).attr("thoigianbaohanh_sanpham"));
    	$('input[name="data[xuatxu_sanpham]"]').val($(this).attr("xuatxu_sanpham"));
    	$('select[name="data[ma_donvitinh]"]').val($(this).attr("ma_donvitinh")).trigger('change');
    	$('select[name="data[ma_loaisanpham]"]').val($(this).attr("ma_loaisanpham")).trigger('change');
    	$('select[name="data[ma_nhacungcap]"]').val($(this).attr("ma_nhacungcap")).trigger('change');
    	$('textarea[name="data[thongsokythuat_sanpham]"]').val($(this).attr("thongsokythuat_sanpham"));
    	$('textarea[name="data[ghichu_sanpham]"]').val($(this).attr("ghichu_sanpham"));
		$(".huysp").show();
		$(".themloaisp").val($(this).attr("ma_sanpham"));
		$(".themloaisp").attr("name","capnhatsanpham");
		$(".themloaisp").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Cập nhật sản phẩm');
		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
    });

    // Mua ngay sản phẩm
    // $(".muangay").click(function(event) {
    // 	$('input[name="data[hoten_thanhvien]"]').val($(this).attr("hoten_thanhvien"));
    // 	$('input[name="data[ngaysinh_thanhvien]"]').val($(this).attr("ngaysinh_thanhvien"));
    // 	$('input[name="data[gioitinh_thanhvien]"]').val($(this).attr("gioitinh_thanhvien"));
    // 	$('input[name="data[sodienthoai]"]').val($(this).attr("sodienthoai"));
    // 	$('input[name="data[email]"]').val($(this).attr("email"));
    // 	$('input[name="data[diachi_thanhvien]"]').val($(this).attr("diachi_thanhvien"));
    // 	$('button[name="dathang"]').val($(this).attr("ma_thanhvien"));
    // });

});
