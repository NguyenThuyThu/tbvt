<div class="container-fluid pd-17" style="background: #f0f0f0;">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-md-12">
                    <b>XÁC NHẬN - THANH TOÁN</b> 
                </div>
                <div class="col-md-7">
                    <br>
                    <div class="panel-heading" id="tieude_ac_splq1"> 
                        <h3 class="panel-title"> <b>Họ và tên</b></h3> 
                    </div> 
                    <div class="panel-body p-b"> 
                        <div class="row" id="row">
                            <h4><b>{$khachhang[0]['hoten_thanhvien']}</b></h4>
                        </div>
                    </div> 
                   <br>
                    <div class="panel-heading" id="tieude_ac_splq1"> 
                        <h3 class="panel-title"> <b> Số điện thoại</b></h3> 
                    </div> 
                    <div class="panel-body p-b"> 
                        <div class="row" id="row">
                            <input type="text" class="form-control"  value="{$khachhang[0]['sodienthoai']}">
                        </div>
                    </div> 
                    <br>
                    <div class="panel-heading" id="tieude_ac_splq1"> 
                        <h3 class="panel-title"> <b>Email</b></h3> 
                    </div> 
                    <div class="panel-body p-b"> 
                        <div class="row" id="row">
                            <h4>
                                <b>{$khachhang[0]['email']}</b>
                            </h4>
                        </div>
                    </div> 
                    <br>
                    <div class="panel-heading" id="tieude_ac_splq1"> 
                            <h3 class="panel-title"> <b>Địa chỉ</b></h3> 
                    </div> 
                    <div class="panel-body p-b"> 
                        <div class="row" id="row">
                            <select class="form-control" name="data[ma_diachi]" required>
                                {foreach $diachi as $key => $val}
                                <option value="{$val.ma_diachi}">{$val.ten_diachi}</option>
                                {/foreach}
                            </select>
                            <button type="button" class="btn btn-xs btn btn-info pull-right"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                        </div>
                    </div> 
                </div>

                <div class="col-md-5">
                    <br>
                   <div class="panel panel-primary"> 
                        <div class="panel-heading" id="tieude_ac_splq1"> 
                            <h3 class="panel-title"> <b>Thông tin đơn hàng</b></h3> 
                        </div> 
                        <div class="panel-body p-b"> 
                            <div class="row">
                                {foreach $details_prduct as $key => $val}
                                    <div class="col-md-3">
                                        <img src="{$url}public/images/anhsanpham/{$val.linkanh_sanpham}" width="100%">
                                    </div>
                                    <div class="col-md-9">
                                        <p><b>{$val.ten_sanpham}</b></p>
                                        <p>
                                            <span class="discountTag_11Tt">Giá sản phẩm:</span> <span class="product-price">{number_format($val.dongia_sanpham, 0, ",", ",")} vnđ</span>
                                            <span> x {$val.soluong}</span>
                                        </p>
                                      
                                    </div>
                                {/foreach}
                            </div>
                        </div> 
                        <br>
                        <div class="panel-heading" id="tieude_ac_splq1"> 
                            <h3 class="panel-title"> <b>Ghi chú</b></h3> 
                        </div> 
                        <div class="panel-body p-b"> 
                            <div class="row" id="row">
                               <textarea name="ghichu" class="form-control" rows="5" id="ghichu"></textarea>
                            </div>
                        </div> 

                        <br><br>
                        <div class="panel-body p-b"> 
                            <div class="row" id="row">
                                <div class="col-md-6">
                                    <h4 class="tongtt"><b>Tổng thanh toán:</b></h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <h4 class="tongtt" style="color: #db4444;">{$thongke}đ</h4>
                                    
                                </div>
                               <button class="btn btn-danger" id="dathang" value="{$masp}" style="width: 100%" >
                                Đặt hàng
                            </button>
                            </div>
                        </div> 
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
                                        <a class="btn btn-info" id="capnhat">Cập nhật</a>
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
<div class="dangtaidulieu">
    <span class="dangxuly">
        <i class="fa fa-spinner fa-spin"></i> <span class="text-xuly">Đang xử lý đơn hàng của bạn</span>
    </span>
</div>
<style>
    .panel-primary{
        border:none;
        /*background: #f5f5f5;*/
    }
    .p-b{
        border: 1px solid #e7e1e1 !important;
    }
    #tieude_ac_splq1{
        border-bottom: none !important;
    }
    #ghichu{
        border: 1px solid #f3f3f3 !important;
        border-top: none !important;
    }
    #row{
        padding: 8px;
    }
    #dathang{
        height: 46px !important;
        margin: 4px;
        font-weight: bold;
        font-size: 20px;
        font-family: none;
        text-transform: uppercase;
    }
    .tongtt{
        font-size: 16px;
    }
</style>
<script type="text/javascript" src="{$url}public/js/thanhtoan.js?time={time()}"></script>