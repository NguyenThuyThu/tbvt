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
                                                <th class="text-left" width="15%">Tổng tiền</th>
                                                <th class="text-left" width="15%">Trạng thái</th>
                                                <th class="text-center" width="20%">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $danhsachdonhang as $ds}
                                        <tr role="row" >
                                            <td class="text-left">{$ds.ma_hoadonmua}</td>
                                            <td class="text-left">{$ds.hoten_thanhvien}</td>
                                            <td class="text-left">{$ds.ngaylap}</td>
                                            <td class="text-left">{number_format($ds.tongtien, 0, ",", ",")}</td>
                                            <td class="text-left">{$ds.ten_trangthai_giaohang}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-arrow-right" aria-hidden="true" style="color: #fff"></i></button>
                                            <a class="btn-color" href="{$url}xemdonhang?chitiet={$ds.ma_hoadonmua}"><button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fa fa-eye"></i></button></a>
                                            <button type="button" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                                            <button type="submit" name="xoadh" class="btn btn-danger btn-sm" value="" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?');"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-print" aria-hidden="true"></i></button>
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
<style>
    thead tr th {
        font-size: 14px !important;
        vertical-align: middle;
    }
</style>