$(function() {
  $(".btn-giohang").click(function(event) {
    giohang = $(".btn-giohang").val();
    soluong = $(".soluong_"+giohang).val();

    $.ajax({
      url: window.location.href,
      type:'post',
      data:{
        'action'        :"addCart",
        'soluong'       : soluong,
        'code_product'  : giohang, 
      },
      success:function(data){
                // load_cart();
                if(data != "dacosp"){
                  $(".total_items").addClass('xuongCard');
                  setTimeout(function(){
                    $(".total_items").removeClass('xuongCard');
                  }, 1500);
                  $(".total_items").val( parseInt($(".total_items").val()) + 1);
                  $("#total_items").removeClass("total_items");
                  setTimeout(function(){
                    success("Thêm giỏ hàng thành công");
                    window.location.href = 'giohang';
                  }, 500);
                }
              }
            });
  });
remove();
  function remove(){
    $(".remove").click(function(){
      if(confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")){
        $.ajax({
          url: window.location.href,
          type:'post',
          data:{
            'action' :"remove_cart",
            'masp'   : $(this).attr("data-info"), 
          },
          success:function(data){
            success("Xóa sản phẩm thành công");

            setTimeout(function(){
              window.location.reload();
            }, 500);
          }
        });
      }
    });
  }

  keyupInput();
  function keyupInput() {
    $(".soluong").change(function(event) {
      soluong = parseInt($(this).val().trim());
      masp = $(this).attr("data-masp");
      $.ajax({
        url: window.location.pathname,
        type:'post',
        data:{
          'action'  : 'changeSLSP',
          'soluong' : soluong,
          'masp'    : masp,
        }, 
        success:function(data){
         data = JSON.parse(data);
         url = window.location.origin+"/"+window.location.pathname.split("/")[1]+'/';
         var html = '';
         $("#tbody").html("");
         $.each(data['details_prduct'], function(elem, index) {
          html += '<tr>';
          html += '<td style="vertical-align: middle;"><a class="remove" data-info="'+index['ma_sanpham']+'">x</a></td>';
          html += '<td class="text-center" style="vertical-align: middle;"><b>'+[elem+1]+'</b></td>';
          html += '<td class="text-center" style="vertical-align: middle;">';
          html += '<a href="">';
          html += '<img src="'+url+'public/images/anhsanpham/'+ index['linkanh_sanpham'] +'" width="100%">';
          html += '</a>';
          html += '</td>';
          html += '<td class="text-center" style="vertical-align: middle;">';
          html += '<span class="money"> '+index['dongia_sanpham']+'</span>';
          html += '</td>';
          html += '<td class="text-center" style="vertical-align: middle;">';
          html += '<input type="number" value="'+index['soluong']+'"data-masp = "'+index['ma_sanpham']+'" class="form-control soluong">';
          html += '</td>';
          html += '<td class="text-center" style="vertical-align: middle;">';
          tong  = (parseInt(index['dongia_sanpham'])*parseInt(index['soluong']));
          html += '<b><span class="tong">'+tong+' VNĐ</span>';
          html += '</td>';
          html += '</tr>';
        });
         $("#tbody").html(html);
         console.log( $('span.tong').simpleMoneyFormat());
         keyupInput();
         var html = '';
         $.each(data['details_prduct'], function(elem, index) {
          html += '<tr>';
          html += '<td>';
          html += '<a class="tensp">'+index['ten_sanpham']+'</a>';
          html += '</td>';
          html += '<td>';
          html += '<small class="gia">'+index['soluong']+' x '+index['dongia_sanpham']+' VNĐ</small>';
          html += '</td>';
          html += '</tr>';
        });
         html += '<tr>';
         html += '<td colspan ="2" class="text-right" style="color: #fff; background-image: linear-gradient(90deg,#d2dee596,#355c6e);">';
         html += '<p>Tổng tiền: <span class="price"><b>'+data['thongke']['tongDG']+' VNĐ</b></span></p>';
         html += '</td>';
         html += '</tr>';
         $("#tbody1").html(html);
         remove();
         $('.money').simpleMoneyFormat();

       }, 
     });
    });
  }

});