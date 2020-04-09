$(document).ready(function(){
	// thêm sửa xóa sản phẩm
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
    	$('input[name="data[diachi]"]:last').val("");
    	$('input[name="data[sodienthoai]"]:last').val("");
    	$('input[name="data[email]"]:last').val("");
    	$('input[name="data[ghichu]"]:last').val("");
    	$('input[name="data[website]:last"]').val("");
    	$('button[name="capnhat"]').val("Them");
	});	
	$(".suanhacc").click(function(event) {
    	$('input[name="data[ten_nhacungcap]"]').val($(this).attr("ten_nhacungcap"));
    	$('input[name="data[diachi]"]').val($(this).attr("diachi"));
    	$('input[name="data[sodienthoai]"]').val($(this).attr("sodienthoai"));
    	$('input[name="data[email]"]').val($(this).attr("email"));
    	$('input[name="data[ghichu]"]').val($(this).attr("ghichu"));
    	$('input[name="data[website]"]').val($(this).attr("website"));
    	$('button[name="capnhat"]').val($(this).attr("ma_nhacungcap"));
    });
	/// change sản phẩm
	

	$(".huysp").hide();
	$(".huysp").click(function(event) {
		$(".capnhatsanpham").hide();
		$(".huysp").hide();
		$(".close").click();
	});
	$(".suasanpham").click(function(event) {
		$(".capnhatsanpham").show();
    	$('input[name="data[soluong]"]').val($(this).attr("soluong"));
    	$('input[name="data[ten_sanpham]"]').val($(this).attr("ten_sanpham"));
    	$('input[name="data[dongia_sanpham]"]').val($(this).attr("dongia_sanpham"));
    	$('input[name="data[thoigianbaohanh_sanpham]"]').val($(this).attr("thoigianbaohanh_sanpham"));
    	$('input[name="data[xuatxu_sanpham]"]').val($(this).attr("xuatxu_sanpham"));
    	$('select[name="data[ma_donvitinh]"]').val($(this).attr("ma_donvitinh")).trigger('change');
    	$('select[name="data[ma_loaisanpham]"]').val($(this).attr("ma_loaisanpham")).trigger('change');
    	$('select[name="data[ma_nhacungcap]"]').val($(this).attr("ma_nhacungcap")).trigger('change');
    	$('textarea[name="data[thongsokythuat_sanpham]"]').val($(this).attr("thongsokythuat_sanpham"));
    	$('textarea[name="data[ghichu]"]').val($(this).attr("ghichu"));
		$("#anh").attr("src",$(this).attr("linkanh_sanpham"));
		$(".huysp").show();
		$(".capnhatsanpham").val($(this).attr("ma_sanpham"));
		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
    });

	/*Kết thúc tổng tie*/
	$('.select2').select2({
      theme: 'bootstrap4'
    })
      //Initialize Select2 Elements
    $("#example1").DataTable();
    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
    });
    $('#example3').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	       "pageLength": 3
    });

    // Mua ngay sản phẩm
    // $(".muangay").click(function(event) {
    // 	$('input[name="data[hoten_thanhvien]"]').val($(this).attr("hoten_thanhvien"));
    // 	$('input[name="data[ngaysinh]"]').val($(this).attr("ngaysinh"));
    // 	$('input[name="data[gioitinh]"]').val($(this).attr("gioitinh"));
    // 	$('input[name="data[sodienthoai]"]').val($(this).attr("sodienthoai"));
    // 	$('input[name="data[email]"]').val($(this).attr("email"));
    // 	$('input[name="data[diachi_thanhvien]"]').val($(this).attr("diachi_thanhvien"));
    // 	$('button[name="dathang"]').val($(this).attr("ma_thanhvien"));
    // });

});
