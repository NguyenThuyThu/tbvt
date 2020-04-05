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
                                                <th class="text-center" width="5%">STT</th>
                                                <th class="text-left" width="10%">Mã đơn hàng</th>
                                                <th class="text-left" width="20%">Khách hàng</th>
                                                <th class="text-left" width="20%">Ngày mua</th>
                                                <th class="text-left" width="15%">Tổng tiền</th>
                                                <th class="text-center" width="30%">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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
    <div class="modal fade show" id="modal-default" style="padding-right: 16px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Danh sách đơn hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
             <form method="post">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Danh sách đơn hàng</label>
                        <input type="text" class="form-control" name="data[ten_dmsanpham]" >
                        <hr>
                        <button type="submit" class="btn btn-primary themdmSP" name="themdmSP" value="1">Cập nhật</button>
                    </div>
                </div>
                <div class="col-12">
                    <table id="example3" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr class="active">
                                <th class="text-center" width="5%">STT</th>
                                <th class="text-left" width="20%">Tên DM sản phẩm</th>
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
<style>
    thead tr th {
        font-size: 14px !important;
        vertical-align: middle;
    }
</style>