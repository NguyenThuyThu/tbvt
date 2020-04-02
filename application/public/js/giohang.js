$(function() {
	 	$(".btn-giohang").click(function(event) {
            giohang = $(".btn-giohang").val();
            soluong = $(".soluong_"+giohang).val();
            $(".total_items").addClass('xuongCard');
            
            setTimeout(function(){
                $(".total_items").removeClass('xuongCard');
            }, 1500);
            $.ajax({
                url: window.location.href,
                type:'post',
                data:{
                    'action'        :"addCart",
                    'soluong'       : soluong,
                    'code_product'  : giohang, 
                },
                success:function(data){
                    load_cart();
                }
            });
        });
        load_cart();
        function load_cart(){
            giohang = $(".btn-giohang").val();
             $.ajax({
                url: window.location.href,
                type:'post',
                data:{
                    'action'        :"load_cart",
                    'code_product'  : giohang, 
                }, 
                success:function(data){
                    data = JSON.parse(data);
                    console.log(data);
                    if(data != ""){
                        soluong = $(".soluong_"+giohang).val(data[0]['soluong']);
                        $(".total_items").val( parseInt($(".total_items").val()) + 1);
                        $("#total_items").removeClass("total_items");
                    }
                }
            });
        }
});