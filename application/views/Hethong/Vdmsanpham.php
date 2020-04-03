<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh mục sản phẩm</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý sản phẩm</a></li>
                        <li class="breadcrumb-item active">Danh mục sản phẩm</li>
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
                        <h3 class="card-title">Danh mục sản phẩm</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Loại sản phẩm*</label>
                                                <input type="text" class="form-control" name="data[ten_loaisanpham]" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">DM sản phẩm</label>
                                                <select class="form-control" name="data[ma_dmsanpham]" required>
                                                    {foreach $dmSP as $key => $val}
                                                    <option value="{$val.ma_dmsanpham}">{$val.ten_dmsanpham}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-block btn-primary" style="margin-top: 30px;" data-toggle="modal" data-target="#modal-default">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <hr>
                                <button type="submit" name="themloaisp" value="Thêm" class="btn btn-success btn-flat themloaisp">Thêm loại sản phẩm</button>
                                <button type="reset" class="btn btn-default huyloaisp"><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Hủy</button>
                            </div>
                            <br>
                            <br>
                        </form>

                        <div class="row">
                            <h3 class="text-center">Danh mục sản phẩm</h3>
                            <div class="col-lg-12">
                                <form method="post">
                                    <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr class="active">
                                                <th class="text-center" width="5%">STT</th>
                                                <th class="text-left" width="20%">Tên loại sản phẩm</th>
                                                <th class="text-left" width="20%">Tên DM sản phẩm</th>
                                                <th class="text-center" width="9%">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $loaiSP as $key => $val}
                                            <tr>
                                                <td class="text-center"><b>{$key+1}</b> </td>
                                                <td>{$val.ten_loaisanpham}</td>
                                                <td>{$tendm[$val.ma_dmsanpham]}</td>
                                                <td class="text-center">
                                                   <button 
                                                   type="button" 
                                                   class="btn btn-info sualoaisp"
                                                   ten_loaisanpham  = "{$val.ten_loaisanpham}"
                                                   ma_dmsanpham     = "{$val.ma_dmsanpham}"
                                                   ma_loaisanpham   = "{$val.ma_loaisanpham}"
                                                   >
                                                   <i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                                                   <button type="submit" name="xoa_loaisp" class="btn btn-danger" value="{$val.ma_loaisanpham}" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này không?');"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
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
                        <label for="exampleInputEmail1">Tên danh mục sản phẩm</label>
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
                            {foreach $dmSP as $key => $val}
                            <tr>
                                <td class="text-center"><b>{$key+1}</b></td>
                                <td>{$val.ten_dmsanpham}</td>
                                <td class="text-center">
                                    <button type="submit" name="xoa_dmsp" class="btn btn-danger" value="{$val.ma_dmsanpham}" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục sản phẩm này không?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                </td>
                            </tr>
                            {/foreach}
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