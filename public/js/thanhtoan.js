$(document).ready(function() {
	$("#huy").hide();
	$("#xacnhan").click(function(event) {
		console.log(2);
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
					html += '<a class="btn btn-primary sua" data-info="'+el['ma_diachi']+'" data-ten="'+el['ten_diachi']+'">Sửa</a>';
					html += '<a class="btn btn-danger xoa" data-info="'+el['ma_diachi']+'">Xóa</a>';
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
	$("#capnhat").hide();
	function sua(){
		$("a.sua").click(function(event) {
			console.log(1);
			$("#huy").show();
			diachi = $("input[name='tendiachi']").val();
			madc = $(this).attr("data-info");
			tendc = $(this).attr("data-ten");
			$("input[name='tendiachi']").val(tendc);
		    $("#xacnhan").hide();
		    $("#capnhat").show();
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
							
						}else{
							$("#xacnhan").show();
		    				$("#capnhat").hide();
							load_diachi();
			            	huy();
			            	
						}
			        }
			    });
			});
		});
	}

	function huy(){
		$("input[name='tendiachi']").val("");
		$("#huy").hide();
		$("#capnhat").hide();
		if(data.length > 2){
	    	trangthai = false;
		}
	}

	$("#huy").click(function(event) {
		huy();
		if(trangthai == false){
			trangthai = false;
		}
	});
	xoa();
	function xoa(){
		$(".xoa").click(function(event) {
			if(confirm("Bạn có chắc chắn muốn xóa địa chỉ không?")){
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
							
						}else{
							load_diachi();
							huy();
						}
					}
				});
			}
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

