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

	function thuvien1(){
        $('.select2').select2();
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
    	$('input[name="data[phantram_khuyenmai]"]').val($(this).attr("phantram_khuyenmai"));
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
	
	
	$(".capnhatDVT").click(function(event) {
		$('input[name="data[ten_donvitinh]"]').val($(this).attr("ten_donvitinh"));
		$(".themDVT").val($(this).attr("ma_donvitinh"));
		$(".themDVT").attr("name","capnhatDVT");
		$(".themDVT").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Cập nhật');

		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
	});
	
	$(".capnhatquyen").click(function(event) {
		$('input[name="data[ten_quyen]"]').val($(this).attr("ten_quyen"));
		$(".themquyen").val($(this).attr("ma_quyen"));
		$(".themquyen").attr("name","capnhatquyen");
		$(".themquyen").html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Cập nhật');
	});

	// Xử lý phiếu nhập
	$(".xoaPN").click(function(event) {
		maPN = $(this).attr("data-ma");
		console.log(maPN);
        if(confirm("Bạn có chắc chắn muốn xóa phiếu nhập này không?")){
            $.ajax({
                url: window.location.href,
                type: 'post',
                data: {
                    'action': "xoaphieunhap",
                    'maPN': maPN,
                },
                success: function(data) {
                    if(data =="thanhcong"){
                        $(this).remove();
                        success("Xóa thành công");
                        setTimeout(function(){
                            location.reload();                
                        },500);
                    }else{
                        error("Xóa thất bại");
                    }
                }
            });
        }
	});
	
	// Xử lý đơn hàng
	$(".xemchitiet").click(function(event) {
		data_ctdh = JSON.parse($(this).attr("data-ctdh"));
		var html = '';
		console.log(data_ctdh);
		// $("select[name='data[ma_sanpham]']").html("");
       $("#tbody_ctdh").html("");
       var url = window.location.origin + "/" + window.location.pathname.split("/")[1] + '/';
       $.map(data_ctdh, function(v, index) {
            html += '<tr role="row" class="odd">';
            html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
			html += '<td>'+v['ten_sanpham']+'</td>';
			html += '<td class="text-center">'+ v['soluong_mua'] +'</td>';
			html += '<td class="text-center">'+ v['giaban'] +'</td>';
			html += '<td class="text-center">'+ v['tongtien'] +'</td>';
			html += '</tr>';
       });
       $("#tbody_ctdh").html(html);
	});

	$(".inhoadon").click(function(event) {
		data_indh = JSON.parse($(this).attr("data-indh"));
		var html = '';
		console.log(data_indh);
		// $("select[name='data[ma_sanpham]']").html("");
       $("#tbody_xuathd").html("");
       var url = window.location.origin + "/" + window.location.pathname.split("/")[1] + '/';
       $.map(data_indh, function(v, index) {
            html += '<tr role="row" class="odd">';
            html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
			html += '<td>'+v['ten_sanpham']+'</td>';
			html += '<td class="text-center">'+ v['soluong_mua'] +'</td>';
			html += '<td class="text-center">'+ v['giaban'] +'</td>';
			html += '<td class="text-center">'+ v['tongtien'] +'</td>';
			html += '</tr>';
       });
       $("#tbody_xuathd").html(html);
	});

	// $(".capnhatTTGH").hide();
	// $(".capnhatTTGH").click(function(event) {
	// 	$(".capnhatTTGH").html('<i class="fa fa-arrow-right" aria-hidden="true" style="color: #fff"></i>');
	// 	$(".capnhatTTXL").hide();
	// });

	$(".capnhatTTXL").click(function(event) {
		$(".capnhatTTXL").val($(this).attr("ma_hoadonmua"));
		// $(".capnhatTTGH").html('<i class="fa fa-arrow-left" aria-hidden="true" style="color: #fff"></i>');
		$(".capnhatTTXL").attr("name","capnhatTTXL");
		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
	});
	$(".capnhatTTGH").click(function(event) {
		$(".capnhatTTGH").val($(this).attr("ma_hoadonmua"));
		// $(".capnhatTTGH").html('<i class="fa fa-arrow-left" aria-hidden="true" style="color: #fff"></i>');
		$(".capnhatTTGH").attr("name","capnhatTTGH");
		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
	});

	$(".capnhatTTHT").click(function(event) {
		$(".capnhatTTHT").val($(this).attr("ma_hoadonmua"));
		// $(".capnhatTTHT").html('<i class="fa fa-arrow-left" aria-hidden="true" style="color: #fff"></i>');
		$(".capnhatTTHT").attr("name","capnhatTTHT");
		$('html').animate({scrollTop: $(".breadcrumb-item").offset().top}, 0, "easeInCubic");
	});
	
	$(".xoaDH").click(function(event) {
		maDH = $(this).attr("data-ma");
		console.log(maDH);
        if(confirm("Bạn có chắc chắn muốn xóa đơn hàng này không?")){
            $.ajax({
                url: window.location.href,
                type: 'post',
                data: {
                    'action': "xoadonhang",
                    'maDH': maDH,
                },
                success: function(data) {
                    if(data =="thanhcong"){
                        $(this).remove();
                        success("Xóa thành công");
                        setTimeout(function(){
                            location.reload();                
                        },500);
                    }else{
                        error("Xóa thất bại");
                    }
                }
            });
        }
	});
	

});
