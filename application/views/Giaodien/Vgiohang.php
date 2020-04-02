<div class="container-fluid" style="background: #f3f3f3;">
<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Danh sách giỏ hàng</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-7">
					<form class="cart_form" method="post">
						<div class="cart-wrapper" style="background: #fff;">
							<table class="table table-bordered">
								<thead>
									<th class="product-name text-center" width="5%" ></th>
									<th class="product-name text-center" width="5%" >STT</th>
									<th class="product-name" width="20%" >Sản phẩm</th>
									<th class="product-price text-center" >Giá</th>
									<th class="product-quantity text-center" width="15%" >Số lượng</th>
									<th class="product-subtotal text-center" >Tổng</th>
								</thead>
								<tbody id="tbody">
									{foreach $details_prduct as $key => $val}
									<tr>
										<td style="vertical-align: middle;"><a class="remove" data-info="{$val.ma_sanpham}">x</a></td>
										<td class="text-center" style="vertical-align: middle;"><b>{$key+1}</b></td>
										<td class="text-center" style="vertical-align: middle;">
											<a href="">
												<img src="{$url}public/images/anhsanpham/{$val.linkanh_sanpham}" width="100%">
											</a>
										</td>
										<td class="text-center" style="vertical-align: middle;">
											{number_format($val.dongia_sanpham, 0, ",", ",")}
										</td>
										<td class="text-center" style="vertical-align: middle;">
											<input type="number" value="{$val.soluong}" {if !empty($session)} data-masp = "{$val.ma_sanpham}"{else}disabled{/if} class="form-control soluong">
										</td>
										<td class="text-center" style="vertical-align: middle;">
											<b>{number_format($val.dongia_sanpham * $val.soluong, 0, ",", ",")} VNĐ</b>
										</td>
									</tr>
									{/foreach}
								</tbody>
							</table>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<div class="checkout"  style="background: #fff;">
						<table class="table table-bordered table-responsive table-striped">
							<thead>
									<tr>
										<th width="75%">
										Tổng số lượng  <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
										</th>
										<th  width="25%">
											{$thongke['tongSL']}
										</th>
									</tr>
								</thead>
								<tbody id="tbody1">
									{foreach $details_prduct as $key => $val}
									<tr>
										<td>
											<a class="tensp">{$val.ten_sanpham}</a>
										</td>
										<td>
											<small class="gia">{$val.soluong} x {$val.dongia_sanpham} VNĐ</small>
										</td>
									</tr>
									{/foreach}
									<tr>
										<td colspan ="2" class="text-right" style="color: #fff; background-image: linear-gradient(90deg,#d2dee596,#355c6e);">
											<p>Tổng tiền: <span class="price"><b>{$thongke['tongDG']} VNĐ</b></span></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
		.tensp, #tbody tr td{
			font-size: 14px;
			font-family: cursive;
		}
		.app__content{
			padding: 31px;
			box-shadow: 0px 0px 10px 0px #6e6e6e;
			margin-top: 19px;
		}
		thead tr th, tbody tr td{
			vertical-align: middle; 
			font-size: 12px !important;
		}
		.panel-primary>.panel-heading {
		    color: #fff;
		    background-color: #1f4e79;
		    border-color: #1f4e79;
		}
		.gia{
			color: #ce0448;
		    font-size: 10px;
		    font-weight: 600;
		}
		.remove{
			cursor: pointer;
		}
	</style>
	<script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
	<script type="text/javascript" src="{$url}public/js/danhmuc.js?time={time()}"></script>
</div>
