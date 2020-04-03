<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách nhà cung cấp</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý nhập hàng</a></li>
                        <li class="breadcrumb-item active">Danh sách nhà cung cấp</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12" style="background: #fff;">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Danh sách
                                    nhà cung cấp</a></li>
                            <li class="nav-item"><a class="nav-link them" href="#timeline" data-toggle="tab">Thêm - Sửa nhà
                                    cung cấp</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <!-- Post -->
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1"
                                                    class="table table-bordered table-striped dataTable" role="grid"
                                                    aria-describedby="example1_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="text-center" style="width: 2%;">
                                                                <center>STT</center>
                                                            </th>

                                                            <th>
                                                                <center>Tên nhà cung cấp</center>
                                                            </th>

                                                            <th>
                                                                <center>Địa chỉ</center>
                                                            </th>

                                                            <th>
                                                                <center>Số điện thoại</center>
                                                            </th>

                                                            <th>
                                                                <center>Email</center>
                                                            </th>

                                                            <th>
                                                                <center>Website</center>
                                                            </th>

                                                            <th>
                                                                <center>Ghi chú</center>
                                                            </th>

                                                            <th class="text-center" width="15%">
                                                                <center>Tác vụ</center>
                                                            </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <form method="post">
                                                        {foreach $nhacungcap as $key => $val}
                                                            <tr>
                                                                <td class="text-center"><b>{$key+1}</b></td>
                                                                <td class="text-center">{$val.ten_nhacungcap}</td>
                                                                <td class="text-center">{$val.diachi_nhacungcap}</td>
                                                                <td class="text-center">{$val.sodienthoai_nhacungcap}</td>
                                                                <td class="text-center">{$val.email_nhacungcap}</td>
                                                                <td class="text-center">{$val.website_nhacungcap}</td>
                                                                <td class="text-center">{$val.ghichu_nhacungcap}</td>
                                                                <td class="text-center">
                                                                    <button 
                                                                       type="button" 
                                                                       class="btn btn-info suanhacc"
                                                                       ten_nhacungcap = "{$val.ten_nhacungcap}"
                                                                       diachi_nhacungcap = "{$val.diachi_nhacungcap}"
                                                                       sodienthoai_nhacungcap =" {$val.sodienthoai_nhacungcap}"
                                                                       email_nhacungcap = "{$val.email_nhacungcap}"
                                                                       ghichu_nhacungcap = "{$val.ghichu_nhacungcap}"
                                                                       ma_nhacungcap = "{$val.ma_nhacungcap}"
                                                                       website_nhacungcap = "{$val.website_nhacungcap}"
                                                                        data-toggle="modal" data-target="#modal-default"
                                                                       >
                                                                       <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                                    </button>&nbsp;
                                                                    <button type="submit" name="xoa_nhacc" class="btn btn-danger" value="{$val.ma_nhacungcap}" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này không?');" ><i class="far fa-trash-alt" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        {/foreach}
                                                        </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>

                            <div class="modal fade show" id="modal-default" style="padding-right: 16px;" aria-modal="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Danh mục sản phẩm</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post">
                                                <div class="row">
                                                   <div class="col-12">
                                                        <div class="form-group" style="display: flex;">
                                                            <label class="control-label col-4">Tên nhà cung cấp*</label>
                                                            <div class="col-7"><input type="text" class="form-control" name="data[ten_nhacungcap]"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group" style="display: flex;">
                                                            <label class="control-label col-4">Số điện thoại</label>
                                                            <div class="col-7"><input type="text" class="form-control" name="data[sodienthoai_nhacungcap]"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group" style="display: flex;">
                                                            <label class="control-label col-4">Website</label>
                                                            <div class="col-7"><input type="text" class="form-control" name="data[website_nhacungcap]"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" style="display: flex;">
                                                        <label class="control-label col-4">Địa chỉ</label>
                                                        <div class="col-7"><input type="text" class="form-control" name="data[diachi_nhacungcap]"></div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group" style="display: flex;">
                                                        <label class="control-label col-4">Email</label>
                                                        <div class="col-7"><input type="text" class="form-control" name="data[email_nhacungcap]"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" style="display: flex;">
                                                        <label class="control-label col-4">Ghi chú</label>
                                                       <textarea class="form-control col-7" rows="4" cols="100"
                                                            name="data[ghichu_nhacungcap]" placeholder="" ></textarea>
                                                    </div>
                                                </div>
                                               <div class="col-12 text-center">
                                                   <hr>
                                                     <button type="submit" name="capnhat" value="Thêm" class="btn btn-success btn-flat capnhat">Cập nhật</button>
                                               </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div> 
                            <!-- end modal -->

                            <div class="tab-pane" id="timeline">
                                <form method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Tên nhà cung cấp*</label>
                                                    <div class="col-7"><input type="text" class="form-control" name="data[ten_nhacungcap]"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Số điện thoại</label>
                                                    <div class="col-7"><input type="text" class="form-control" name="data[sodienthoai_nhacungcap]"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Website</label>
                                                    <div class="col-7"><input type="text" class="form-control" name="data[website_nhacungcap]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Địa chỉ</label>
                                                    <div class="col-7"><input type="text" class="form-control" name="data[diachi_nhacungcap]"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Email</label>
                                                    <div class="col-7"><input type="text" class="form-control" name="data[email_nhacungcap]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-2">Ghi chú</label>
                                            <div class="col-9"><textarea class="form-control" rows="4" cols="100"
                                                    name="data[ghichu_nhacungcap]" placeholder="" ></textarea></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" name="themNhaCC" value="Thêm"
                                            class="btn btn-primary btn-flat" style="margin-left: 300px;">Thêm nhà cung
                                            cấp</button>
                                    </div>
                                </div>
                                </form>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
</div>
<style>
    thead tr th, tbody tr td {
        font-size: 14px !important;
        vertical-align: middle  !important;;
    }
</style>
<script type="text/javascript" src="{$url}public/js/tonghop.js"></script>