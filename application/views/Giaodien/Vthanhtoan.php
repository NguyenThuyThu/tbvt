<div class="container-fluid" style="background: #f3f3f3;">
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin thanh toán</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-7">
                        <form class="cart_form" method="post">
                            <div class="cart-wrapper" style="background: #fff;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-md-3">Họ và tên</label>
                                                <div class="col-md-9"><input type="text" class="form-control" disabled
                                                        value="{$khachhang[0]['hoten_thanhvien']}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-md-3">Số điện thoại</label>
                                                <div class="col-md-9"><input type="text" class="form-control" disabled
                                                        value="{$khachhang[0]['sodienthoai']}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-md-3">Email</label>
                                                <div class="col-md-9"><input type="text" class="form-control" disabled
                                                        value="{$khachhang[0]['email']}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group" style="display: flex;">
												<label class="control-label col-md-3">Địa chỉ nhận hàng</label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-10">
															<div class="form-group">
																<select class="form-control" name="data[ma_diachi]" required>
																	{foreach $diachi as $key => $val}
																		<option value="{$val.ma_diachi}">{$val.ten_diachi}</option>
																	{/foreach}
																</select>
															</div>
														</div>
														<div class="col-md-2">
															<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">
																<i class="fa fa-plus-square" aria-hidden="true"></i>
                                                            </button>
                                                            
                                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
														</div>
													</div>
												</div>
                                                    <!-- <input type="text" class="form-control" disabled value="{$khachhang[0]['diachi']}"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="checkout" style="background: #fff;">
                            <table class="table table-bordered table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th width="75%">
                                            Đơn hàng của bạn <span class="price" style="color:black"><i
                                                    class="fa fa-shopping-cart"></i>
                                        </th>
                                        <th width="25%">
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
                                        <td colspan="2" class="text-right"
                                            style="color: #fff; background-image: linear-gradient(90deg,#d2dee596,#355c6e);">
                                            <p>Tổng tiền: <span class="price"><b>{$thongke['tongDG']} VNĐ</b></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment">
                            <p>Trả tiền mặt khi nhận hàng</p>
                            <a href="" class="checkout-button">
                                <div class="wc-proceed-to-checkout">Đặt hàng</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="modal-default" style="padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Danh mục sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ nhận hàng</label>
                                <input type="text" class="form-control" name="data[ten_dmsanpham]">
                                <hr>
                                <button type="submit" class="btn btn-primary themdmSP" name="themdmSP" value="1">Cập
                                    nhật</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <table id="example3" class="table table-bordered table-hover dataTable" role="grid"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr class="active">
                                        <th class="text-center" width="5%">STT</th>
                                        <th class="text-left" width="20%">Địa chỉ</th>
                                        <th class="text-center" width="9%">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <style>
        .tensp,
        #tbody tr td {
            font-size: 14px;
            font-family: cursive;
        }

        .app__content {
            padding: 31px;
            box-shadow: 0px 0px 10px 0px #6e6e6e;
            margin-top: 19px;
        }

        thead tr th,
        tbody tr td {
            vertical-align: middle;
            font-size: 12px !important;
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #1f4e79;
            border-color: #1f4e79;
        }

        .gia {
            color: #ce0448;
            font-size: 10px;
            font-weight: 600;
        }
    </style>
</div>