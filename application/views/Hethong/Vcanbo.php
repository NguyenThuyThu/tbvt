<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quản lý nhân viên</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý hệ thống</a></li>
                        <li class="breadcrumb-item active">Thêm nhân viên</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="col-lg-12">
            <div class="card card-info">
                <form method="post">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Thêm nhân viên</h3>
                        </div>
                        
                        <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Tên đăng nhập*</label>
                                            <div class="col-8"><input type="text" class="form-control" id="taikhoan"  name="taikhoan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Mật khẩu*</label>
                                            <div class="col-8"><input type="password" class="form-control" id="password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Họ tên*</label>
                                            <div class="col-8"><input type="text" class="form-control" id="hoten" name="hoten"required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Ngày sinh</label>
                                            <div class="col-8"><input type="date" data-date-format="yyyy/mm/dd" data-inputmask="'alias': 'date'" id="ngaysinh" name="ngaysinh" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" name="themtaikhoan" value="Thêm"
                                            class="btn btn-primary btn-flat" style="margin-left: 300px;">Thêm nhân viên</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Email</label>
                                                <div class="col-8"><input type="email" class="form-control" id="email" name="email" required
                                                        ></div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Địa chỉ</label>
                                                <div class="col-8"><input type="text" class="form-control" id="diachi" name="diachi" 
                                                        ></div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Địa chỉ</label>
                                                <div class="col-8">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Giới tính</label>
                                                <div class="col-8" style="display: flex;">
                                                <div class="col-4">
                                                    <input type="radio" name="gioitinh" value="Nam" checked> Nam
                                                </div>

                                                <div class="col-4">
                                                    <input type="radio" name="gioitinh" value="Nữ"> Nữ
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Số điện thoại</label>
                                                <div class="col-8"><input type="text" class="form-control" name="sodienthoai" required
                                                        ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<div class="modal fade show" id="modal-default" style="padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Địa chỉ</h4>
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
                                <button type="submit" class="btn btn-primary themdiachi" name="themdiachi" value="1">Cập
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
                                {foreach $diachi as $key => $val}
                                <tr>
                                    <td class="text-center"><b>{$key+1}</b></td>
                                    <td>{$val.ten_diachi}</td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-info btn-sm" name="suadonvitinh" value="1" title="Sửa"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                                        <button type="submit" name="xoadiachi" class="btn btn-danger btn-sm" value="{$val.ma_diachi}" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục sản phẩm này không?');"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
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