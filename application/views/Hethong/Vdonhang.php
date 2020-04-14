<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post">
                                    <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr class="active">
                                                <th class="text-left" width="10%">Mã đơn hàng</th>
                                                <th class="text-left" width="20%">Khách hàng</th>
                                                <th class="text-left" width="20%">Ngày mua</th>
                                                <th class="text-left" width="15%">Trạng thái</th>
                                                <th class="text-center" width="20%">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $danhsachdonhang as $key => $ds}

                                        <tr role="row" >
                                            <td class="text-left">{$ds.ma_hoadonmua}</td>
                                            <td class="text-left">{$ds.hoten_thanhvien}</td>
                                            <td class="text-left">{$ds.ngaylap}</td>
                                            <td class="text-left">{$ds.ten_trangthai_giaohang}</td>
                                            <td class="text-center">
                                               <button type="submit" title="Xử lý đơn hàng" class="btn btn-warning btn-sm capnhatTTXL" 
                                                        ma_hoadonmua   = "{$ds.ma_hoadonmua}" 
                                                        ma_trangthai_giaohang = "{$ds.ma_trangthai_giaohang}"
                                               name="capnhatTTXL"><i class="fa fa-arrow-right" aria-hidden="true" 
                                               style="color: #fff"></i></button>
                                               <button type="submit" title="Đang giao hàng" class="btn btn-info btn-sm capnhatTTGH"
                                                        ma_hoadonmua   = "{$ds.ma_hoadonmua}" 
                                                        ma_trangthai_giaohang = "{$ds.ma_trangthai_giaohang}"
                                               name="capnhatTTGH"><i class="fa fa-arrow-right" aria-hidden="true" 
                                               style="color: #fff"></i></button>
                                               <button type="submit" title="Đã giao hàng" class="btn btn-success btn-sm capnhatTTHT" 
                                                        ma_hoadonmua   = "{$ds.ma_hoadonmua}" 
                                                        ma_trangthai_giaohang = "{$ds.ma_trangthai_giaohang}"
                                               name="capnhatTTHT"><i class="fa fa-arrow-right" aria-hidden="true" 
                                               style="color: #fff"></i></button>

                                                <button type="button" class="btn btn-primary btn-sm xemchitiet" 
                                                    ma_hoadonmua               = "{$ds.ma_hoadonmua}"
                                                    data-ctdh                  = '{$ds.ctdonhang}'
                                                    data-toggle="modal" data-target="#modal-default1"
                                                title="Xem chi tiết"><i class="fa fa-eye"></i></button>
                                              <!--   <button type="button" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button> -->
                                                <button type="submit" name="xoadh" title="Xóa đơn hàng" class="btn btn-danger btn-sm" value="" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?');"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
                                                <a class="btn-color" href="{$url}printhd?hoadon={$ds.ma_hoadonmua}"><button type="button" target="_blank" 
                                                    ma_hoadonmua               = "{$ds.ma_hoadonmua}"
                                                    data-indh                  = '{$ds.ctdonhang}'
                                                 class="btn btn-secondary btn-sm inhoadon" title="In hóa đơn"><i class="fa fa-print" aria-hidden="true"></i></button></a>
                                            </td>
                                        </tr>
                                        
                                        {/foreach}
                                       </tbody>
                                   </table>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>


<div class="modal fade show" id="modal-default1" style="padding-right: 16px;" aria-modal="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Chi tiết đơn hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Khách hàng:</label>
                                                <input type="text" class="form-control" name="data[hoten_thanhvien]"
                                                value="{$danhsachdonhang.hoten_thanhvien}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <!--   {foreach $danhsachdonhang as $ds}
                                        <label>Trạng thái đơn hàng:</label>
                                        <input type="text" class="form-control" name="data[ten_trangthai_giaohang]" 
                                        value="{$ds.ten_trangthai_giaohang}" disabled>
                                        {/foreach}
 -->
                                        <select class="form-control" name="data[ten_trangthai_giaohang]" disabled required>
                                            {foreach $danhsachdonhang as $key => $val}
                                            <option value="{$val.ma_trangthai_giaohang}">{$val.ten_trangthai_giaohang}
                                            </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center" style="width: 5%;">STT</th>
                                                <th class="text-center" style="width: 19%;">Tên sản phẩm</th>
                                                <th class="text-center" style="width: 10%;">Số lượng</th>
                                                <th class="text-center" style="width: 10%;">Đơn giá</th>
                                                <th class="text-center" style="width: 10%;">Thành tiền</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tbody_ctdh">
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    <br>
                    <br>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<style>
    thead tr th {
        font-size: 14px !important;
        vertical-align: middle;
    }
</style>
