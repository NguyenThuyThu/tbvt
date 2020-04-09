<div class="container-fluid" style="background: #f3f3f3; ">
    <div class="container" style="margin-top: 20px; ">
        <div class="row">
            <section class="content">
                <div class="row">
                    <div class="col-lg-12" style="background: #fff;padding: 20px;">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="nav-item active" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#activity"><b>Đơn hàng của bạn</b></a>
                                    </li>

                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline1"><b>Đơn hàng đã hủy</b></a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="activity">
                                        <!-- Post -->
                                        <div class="card-body">
                                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12" style="background: #fff;">
                                                        <table id="example1" 
                                                            class="table table-bordered table-striped dataTable table-hover"
                                                            >
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="text-center" width="5%">
                                                                        <center>STT</center>
                                                                    </th>
                                                                    <th width="8%">
                                                                        <center>Mã đơn hàng</center>
                                                                    </th>
                                                                    <th width="25%">
                                                                        <center>Ngày lập đơn hàng</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Hình thức thanh toán</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Ghi chú đơn hàng</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Trạng thái đơn hàng</center>
                                                                    </th>
                                                                    <th>
                                                                       
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                {foreach $hoadon as $key => $val}
                                                                    <tr>
                                                                        <td class="text-center"><b>{$key+1}</b> </td>
                                                                        <td class="text-center"><b><a class="ttdh" data-toggle="modal" data-target="#myModal" data-ttHD='{$val.thongtinHD}'>{$val.ma_hoadonmua}</a></b></td>
                                                                        <td class="text-center">{$val.ngaylap}</td>
                                                                        <td>{$val.ten_hinhthucthanhtoan}</td>
                                                                        <td>
                                                                            <i>{$val.ghichu}</i>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <span class="label label-success">{$val.ten_trangthai_giaohang}</span></td>
                                                                        
                                                                        <td class="text-center">
                                                                            <span class="label label-danger huyDH" data-ma = "{$val.ma_hoadonmua}"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                {/foreach}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade modal-ttdh" id="myModal" role="dialog">
   <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thông tin đơn hàng</h4>
          </div>
          <div class="modal-body">
               <table id="example1" 
               class="table table-bordered table-striped dataTable table-hover"
               >
                   <thead>
                        <tr role="row">
                            <th class="text-center">
                                <center>STT</center>
                            </th>
                            <th>
                                Tên sản phẩm
                            </th>
                            <th >
                                <center>Số lượng</center>
                            </th>
                            <th>
                                <center>Đơn giá</center>
                            </th>
                            <th>
                                <center>Thành tiền</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tbody_dh">

                    </tbody>
                </table>

            <tbody>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
<script type="text/javascript" src="{$url}public/js/danhmuc.js?time={time()}"></script>