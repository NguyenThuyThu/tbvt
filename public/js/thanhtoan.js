$(document).ready(function() {
	$("#huy").hide();
	$("#xacnhan").click(function(event) {
		diachi = $("input[name='tendiachi']").val();
		if(diachi == ""){
			alert("Địa chỉ không được để giỗng");
			return false;
		}
	   	$.ajax({
	        url: window.location.href,
	        type: 'post',
	        data: {
	            'action': "add_address",
	            'diachi': diachi,
	        },
	        success: function(data) {
	            if(data != "thanhcong"){
	             	error("Thất bại");
	            }
	            load_diachi();
	            huy();
	        }
		});
    });
	var trangthai = true;
	load_diachi();
	function load_diachi(){
		$.ajax({
		    url: window.location.href,
		    type: 'post',
		    data: {
		        'action': "load_address",
		    },
		    success: function(data) {
		        data = JSON.parse(data);
		        var html = '';
		        var option = '';
		        $("select[name='data[ma_diachi]']").html("");
		        $("#tbody").html("");
		        $.each(data, function(index, el) {
					html += '<tr>';
					html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
					html += '<td>'+el['ten_diachi']+'</td>';
					html += '<td class="text-center">';
					html += '<a id="sua" class="btn btn-primary" data-info="'+el['ma_diachi']+'" data-ten="'+el['ten_diachi']+'">Sửa</a>';
					html += '<a id="xoa" class="btn btn-danger" data-info="'+el['ma_diachi']+'">Xóa</a>';
					html += '</td>';
					html += '</tr>';
					option += '<option value="'+el['ma_diachi']+'">'+el['ten_diachi']+'</option>';
		        });
		        $("select[name='data[ma_diachi]']").html(option);
		        $("#tbody").html(html);
		        sua();
				xoa();
		        if(data.length > 2){
		        	trangthai = false;
		        	$("#xacnhan").remove();
		        }
		    }
		});
	}
	// end load địa chỉ

	/*Sửa địa chỉ*/ 
	
	sua();
	function sua(){
		$("a#sua").click(function(event) {
			$("#huy").show();
			diachi = $("input[name='tendiachi']").val();
			madc = $(this).attr("data-info");
			tendc = $(this).attr("data-ten");
			$("input[name='tendiachi']").val(tendc);
			if(trangthai == false){
				$("#huy").parent().find("#capnhat").remove();	
				$("#huy").parent().append('<a class="btn btn-info" id="xacnhan">Xác nhận</a>');
				trangthai = false;
			}
		    $("#xacnhan").attr("id","capnhat");
		    $("#capnhat").text("Cập nhật");
		    capnhat(madc);
		});
	}

	function capnhat(madc){
		$("#capnhat").click(function(event) {
			diachi = $("input[name='tendiachi']").val();
			if(diachi == ""){
				alert("Địa chỉ không được để giỗng");
				return false;
			}
			$.ajax({
				url: window.location.href,
				type: 'post',
				data: {
					'action': "capnhat_address",
					'diachi': diachi,
					'madc'	: madc,
				},
				success: function(data) {
					if(data != "thanhcong"){
						error("Thất bại");
					}
					load_diachi();
	            	huy();
	            	success("Cập nhật thành công!");
		        }
		    });
		});
	}

	function huy(){
		$("input[name='tendiachi']").val("");
		$("#xacnhan").text("Xác nhận");
		$("#capnhat").attr("id","xacnhan");
		$("#xacnhan").text("Xác nhận");
		$("#huy").hide();
	}

	$("#huy").click(function(event) {
		huy();
		if(trangthai == false){
			$("#xacnhan").remove();
			trangthai = false;
		}
	});
	xoa();
	function xoa(){
		$("#xoa").click(function(event) {
			madc = $(this).attr("data-info");
			$.ajax({
				url: window.location.href,
				type: 'post',
				data: {
					'action': "delete_address",
					'madc'	: madc,
				},
				success: function(data) {
					if(data != "thanhcong"){
						error("Thất bại");
					}else{
						load_diachi();
						huy();
						success("Cập nhật thành công!");
					}
				}
			});
		});
	}

	$("#dathang").click(function(event) {
		if(confirm('Bạn có chắc chắn muốn đặt hàng không?')){
			$(".dangtaidulieu").addClass('dangtaidulieu_moda');
			setTimeout(function(){
				$(".dangtaidulieu").removeClass('dangtaidulieu_moda');
			}, 2200);
			xulydonhang($(this).val());
		}
	});
	// $(".dangtaidulieu").click(function(event) {
	// 	$(".dangtaidulieu").removeClass('dangtaidulieu_moda');
	// });
	// 
	
	function xulydonhang(masp){
		ghichu = $("textarea[name='ghichu']").val();
		$.ajax({
			url: window.location.href,
			type: 'post',
			data: {
				'action': "xulydonhang",
				'masp'	: masp,
				'ghichu': ghichu
			},
			success: function(data) {
				if(data == "thanhcong"){
					success("Đặt hàng thành công")
					setTimeout(function(){
						location.href = "donmua";
					}, 1000);
				}	
			}
		});
	}

});

