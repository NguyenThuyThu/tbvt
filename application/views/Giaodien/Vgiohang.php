<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-giohang">Danh sách giỏ hàng</h3>
			</div>
			<br>
			<div class="col-md-12">
				<table id="cart" class="table table-hover table-bordered">
				    <thead>
				        <tr>
				            <th style="width:50%">Tên sản phẩm</th>
				            <th style="width:10%">Giá</th>
				            <th style="width:8%">Số lượng</th>
				            <th style="width:22%" class="text-center">Thành tiền</th>
				            <th style="width:10%"> </th>
				        </tr>
				    </thead>
				    <tbody id="tbody1">
				    	{foreach $details_prduct as $key => $val}
				        <tr>
				            <td data-th="Product">
				                <div class="row">
				                    <div class="col-sm-2 hidden-xs">
				                    	<a href>
				                    		<img src="{$url}public/images/anhsanpham/{$val.linkanh_sanpham}" width="100%">
				                    	</a>
				                    </div>
				                    <div class="col-sm-10">
				                        <h4 class="nomargin">{$val.ten_sanpham}</h4>
				                    </div>
				                </div>
				            </td>
				            <td data-th="Price"><small class="gia">{number_format($val.dongia_sanpham, 0, ",", ",")} đ</small></td>
				            <td data-th="Quantity">
				                <input type="number" value="{$val.soluong}" {if !empty($session)} data-masp = "{$val.ma_sanpham}"{else}disabled{/if} class="form-control soluong form-control text-center" step="1" min="1" max="9999" title="SL" size="4" pattern="[0-9]*">
				            </td>
				            <td data-th="Subtotal" class="text-center"><b>{number_format($val.dongia_sanpham * $val.soluong, 0, ",", ",")} </b> đ</td>
				            <td class="actions text-center">
				            	<button class="btn btn-danger btn-sm remove" data-info="{$val['ma_sanpham']}"><i class="fa fa-times" aria-hidden="true"></i></button>
				            </td>
				        </tr>
				    	{/foreach}
				    </tbody>
				    <tfoot>
				        <tr class="visible-xs">
				            <td class="text-center"><strong>Tổng 200.000 đ</strong>
				            </td>
				        </tr>
				        <tr>
				            <td><a href="{$url}trangsanpham" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
				            </td>
				            <td colspan="2" class="hidden-xs"> </td>
				            <td class="hidden-xs text-center"><strong>Tổng tiền {$thongke['tongDG']} đ</strong>
				            </td>
				            <td><a href="{$url}thanhtoan" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
				            </td>
				        </tr>
				    </tfoot>
				</table>

			</div>
		</div>
	</div>
</div>
<style type="text/css">
    .table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td{
        vertical-align: middle;
    }
</style>
<script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
<script type="text/javascript" src="{$url}public/js/danhmuc.js?time={time()}"></script>