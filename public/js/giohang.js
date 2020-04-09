$(function() {
    remove();

    function remove() {
        $(".remove").click(function() {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
                $.ajax({
                    url: window.location.href,
                    type: 'post',
                    data: {
                        'action': "remove_cart",
                        'masp': $(this).attr("data-info"),
                    },
                    success: function(data) {
                        if(data =="thanhcong"){
                            success("Xóa sản phẩm thành công");
                            setTimeout(function() {
                                window.location.reload();
                            }, 500);
                        }else{
                            error("Xóa sản phẩm thất bại");
                        }
                    }
                });
            }
        });
    }
    changeSL();
    function changeSL(){
        $(".soluong").change(function(event) {
            soluong = parseInt($(this).val().trim());
            masp = $(this).attr("data-masp");
            $.ajax({
                url: window.location.href,
                type: 'post',
                data: {
                    'action': 'changeSLSP',
                    'soluong': soluong,
                    'masp': masp,
                },
                success: function(data) {
                    index = JSON.parse(data);
                    data = JSON.parse(data);
                    var url = window.location.origin + "/" + window.location.pathname.split("/")[1] + '/';
                    var html = '';
                    console.log(index['details_prduct']);
                    for(i = 0; i < index['details_prduct'].length; i++){
                        html +='<tr>';
                        html +='<td >';
                        html +='<div class="row">';
                        html +='<div class="col-sm-2">';
                        html +='<a>';
                        html +='<img src="' + url + 'public/images/anhsanpham/' + index['details_prduct'][i]['linkanh_sanpham'] + '" width="100%">';
                        html +='</a>';
                        html +='</div>';
                        html +='<div class="col-sm-10">';
                        html +='<h4 class="nomargin">' + index['details_prduct'][i]['ten_sanpham'] + '</h4>';
                        html +='</div>';
                        html +='</div>';
                        html +='</td>';
                        html +='<td ><small class="gia">' + index['details_prduct'][i]['dongiasanpham'] + ' đ</small></td>';
                        html +='<td>';
                        html +='<input type="number" value="' + index['details_prduct'][i]['soluong'] + '"class="form-control soluong form-control text-center" data-masp="'+index['details_prduct'][i]['ma_sanpham'] +'">';
                        html +='</td>';
                        html +='<td class="text-center"><b>' + index['details_prduct'][i]['thanhtien'] + '</b> đ</td>';
                        html +='<td class="actions text-center">';
                        html +='<button class="btn btn-danger btn-sm remove" data-info="' +index['details_prduct'][i]['ma_sanpham']+ '"><i class="fa fa-times" aria-hidden="true"></i></button>';
                        html +='</td>';
                        html +='</tr>';
                    }
                    $("#tbody1").html(html);
                },
            })
        });
    } 

});