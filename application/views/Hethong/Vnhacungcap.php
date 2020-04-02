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
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Thêm - Sửa nhà
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

                                                            <th class="text-center">
                                                                <center>Tác vụ</center>
                                                            </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Tên nhà cung cấp*</label>
                                                    <div class="col-7"><input type="text" class="form-control"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Số điện thoại</label>
                                                    <div class="col-7"><input type="text" class="form-control"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Website</label>
                                                    <div class="col-7"><input type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Địa chỉ</label>
                                                    <div class="col-7"><input type="text" class="form-control"></div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: flex;">
                                                    <label class="control-label col-4">Email</label>
                                                    <div class="col-7"><input type="text" class="form-control"></div>
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
                                                    name="ghichu" placeholder=""></textarea></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" name="themloaisp" value="Thêm"
                                            class="btn btn-primary btn-flat" style="margin-left: 300px;">Thêm nhà cung
                                            cấp</button>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
</div>