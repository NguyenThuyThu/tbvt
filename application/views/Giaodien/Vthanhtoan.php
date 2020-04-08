<div class="container-fluid" style="background: #fff;">
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thông tin thanh toán</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-7 ">
                        <form class="cart_form" method="post">
                            <div class="cart-wrapper" style="background: #fff;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputName2">Họ và tên</label>
                                        <input type="text" class="form-control" disabled value="{$khachhang[0]['hoten_thanhvien']}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName2">Số điện thoại</label>
                                        <input type="text" class="form-control"  value="{$khachhang[0]['sodienthoai']}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName2">Email</label>
                                       <input type="text" class="form-control" disabled
                                                    value="{$khachhang[0]['email']}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Địa chỉ nhận hàng</label>
                                            <select class="form-control" name="data[ma_diachi]" required>
                                                {foreach $diachi as $key => $val}
                                                <option value="{$val.ma_diachi}">{$val.ten_diachi}</option>
                                                {/foreach}
                                            </select>
                                        <button type="button" class="btn btn-xs btn btn-info pull-right"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputName2">Ghi chú</label>
                                        <textarea name="ghichu" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5 border">
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
                            <p class="alert alert-success" role="alert">Trả tiền mặt khi nhận hàng</p>
                            <button class="wc-proceed-to-checkout " id="dathang" value="{$masp}" style="width: 100%" >
                                Đặt hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Địa chỉ</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form action="" method="post" autocomplete="off">
                                <div class="col-md-12">
                                    <label class="control-label col-md-3">Tên địa chỉ<span class="text-danger required">*</span></label>
                                    <div class="col-md-8">
                                        <input name="tendiachi" type="text" value="" class="form-control" required>
                                    </div>
                                    <div class="col-md-12 text-center" style="padding: 20px;">
                                        <a class="btn btn-default" id="huy">Hủy</a>
                                        <a class="btn btn-info" id="xacnhan">Xác nhận</a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr class="active">
                                                <th class="text-center">STT</th>
                                                <th>Địa chỉ</th>
                                                <th class="col-sm-3 text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="dangtaidulieu">
    <span class="dangxuly">
        <i class="fa fa-spinner fa-spin"></i> <span class="text-xuly">Đang xử lý đơn hàng của bạn</span>
    </span>
</div>
<script type="text/javascript" src="{$url}public/js/thanhtoan.js?time={time()}"></script>

