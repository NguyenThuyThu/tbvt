$(function() {
    $(".btn-giohang").click(function(event) {
        themgiohang();
        setTimeout(function() {
        success("Thêm giỏ hàng thành công");
            // window.location.href = 'giohang';
        }, 500);
    });

    function themgiohang(){
       giohang = $(".btn-giohang").val();
       soluong = $(".soluong_" + giohang).val();

       $.ajax({
        url: window.location.href,
        type: 'post',
        data: {
            'action': "addCart",
            'soluong': soluong,
            'code_product': giohang,
        },
        success: function(data) {
                // load_cart();
                if (data != "dacosp") {
                    $(".total_items").addClass('xuongCard');
                    setTimeout(function() {
                        $(".total_items").removeClass('xuongCard');
                    }, 1500);
                    $(".total_items").val(parseInt($(".total_items").val()) + 1);
                    $("#total_items").removeClass("total_items");
                }
            }
        });
    }
    $("#muangay").click(function(event) {
        giohang = $(".btn-giohang").val();
        soluong = $(".soluong_" + giohang).val();
        $.ajax({
            url: window.location.href,
            type: 'post',
            data: {
                'action': "buy_now",
                'code_product': $(this).val(),
            },
            success: function(data) {
                  if(data == 1){
                    setTimeout(function() {
                        window.location.href = 'thanhtoan?masp='+$.md5('sanpham1')+'_'+$.md5('sanpham')+"_"+giohang;
                    }, 500);
                  }else{
                    themgiohang();
                    success("Thêm giỏ hàng thành công");
                     setTimeout(function() {
                        window.location.href = 'thanhtoan?masp='+$.md5('sanpham1')+'_'+$.md5('sanpham')+"_"+giohang;
                    }, 500);
                  }
            }
        });
           
    });
    var md5 = function(value) {
        return CryptoJS.MD5(value).toString();
    }

    

    $(".ttdh").click(function(event) {
       ttdh = JSON.parse($(this).attr("data-ttHD"));
       var html = '';
       $("#tbody_dh").html("");
       $.map(ttdh, function(v, index) {
            html += '<tr>';
            html += '<td class="text-center"><b>'+[index+1]+'</b></td>';
            html += '<td><p><img src="public/images/anhsanpham/'+v['linkanh_sanpham']+'" width="130px"></p><p><i>'+v['ten_sanpham']+'</i></p></td>';
            html += '<td class="text-center">'+v['soluong_mua']+'</td>';
            html += '<td class="text-center">'+v['giaban']+'</td>';
            html += '<td class="text-center">'+v['tongtien']+'</td>';
            html += '</tr>';
       });
       $("#tbody_dh").html(html);
    });

    $(".huyDH").click(function(event) {
        maHD = $(this).attr("data-ma");
        if(confirm("Bạn có chắc chắn muốn hủy đơn hàng này không")){
            $.ajax({
                url: window.location.href,
                type: 'post',
                data: {
                    'action': "removeHD",
                    'maHD': maHD,
                },
                success: function(data) {
                    if(data =="thanhcong"){
                        $(this).remove();
                        success("Hủy đơn hàng thành công");
                        setTimeout(function(){
                            location.reload();                
                        },500);
                    }else{
                        error("Hủy đơn hàng thất bại");
                    }
                }
            });
        }
    });
    sl = parseInt($(".input_3cYn").val());
    if(parseInt($(".input_3cYn").val())<1){
        $(".tru").addClass("disabled_3ugQ");
    }
    $(".cong").click(function(event) {
        sl = parseInt($(".input_3cYn").val())+1;
        $(".input_3cYn").val(sl);
         $(".tru").removeClass("disabled_3ugQ");
    });

    $(".tru").click(function(event) {
        sl = parseInt($(".input_3cYn").val())-1;
        if(sl != 0){
            $(".input_3cYn").val(sl);
        }else{
            $(this).addClass("disabled_3ugQ");
        }
       
    });

});