<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quản lý phiếu nhập</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý Nhập hàng</a></li>
                        <li class="breadcrumb-item active">Quản lý phiếu nhập</li>
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
                                    phiếu nhập</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Thêm - Sửa phiếu nhập</a></li>
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
                                                                <center>Tên phiếu nhập</center>
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
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Ngày nhập:</label>
                                                            <input type="date" class="form-control" name="data[thoigian_nhap]" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nhà cung cấp:</label>
                                                    <select class="form-control" name="data[ma_nhacungcap]" required>
                                                       {foreach $nhacc as $key => $val}
                                                            <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}</option>
                                                       {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <form method="post" id="insert_form">
                                                    <div class="table-repsonsive" style="margin-top: 10px;">
                                                        <span id="error"></span>
                                                        <table class="table table-bordered" id="item_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Tên sản phẩm</th>
                                                                    <th class="text-center">Số lượng</th>
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button type="button" name="add" class="btn btn-success btn-sm add"><i class="fa fa-plus-square" aria-hidden="true"></i></span></button></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="item_unit[]" class="form-control item_unit">
                                                                            <option value="">Chọn sản phẩm</option>
                                                                            {foreach $sanpham as $val}
                                                                            {if $val.trangthai_dang_sanpham==1}
                                                                                <option value="{$val.ma_sanpham}">{$val.ten_sanpham}</option>
                                                                            {/if}
                                                                            {/foreach}
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="item_name[]" class="form-control item_name" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="item_quantity[]" class="form-control item_quantity" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" disabled name="item_total[]" class="form-control item_total" />
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fa fa-minus-square" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        <div class="col-12 text-center">
                                            <hr>
                                            <button type="submit" name="themphieunhap" value="Thêm" class="btn btn-success btn-flat themphieunhap">Thêm phiếu nhập</button>
                                            <button type="reset" class="btn btn-default huyphieunhap"><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Hủy</button>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                 </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
</div>

