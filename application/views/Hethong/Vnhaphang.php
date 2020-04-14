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
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item" tieude=""><a class="nav-link active" data-toggle="tab"
                                    href="#activity"><b>Danh sách phiếu nhập</b></a>
                            <li>
                            <li class="nav-item" tieude=""><a class="nav-link" data-toggle="tab"
                                    href="#timeline"><b>Thêm phiếu nhập</b></a></li>
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
                                                            <th class="text-center">
                                                                <center>STT</center>
                                                            </th>
                                                            <th>
                                                                <center>Mã phiếu nhập</center>
                                                            </th>
                                                            <th width="20%">
                                                                <center>Thời gian nhập</center>
                                                            </th>
                                                            <th>
                                                                <center>Nhà cung cấp</center>
                                                            </th>
                                                            <th class="text-center">
                                                                <center>Tác vụ</center>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        {foreach $phieunhap as $key => $val}
                                                        <tr>
                                                            <td class="text-center"><b>{$key+1}</b></td>
                                                            <td class="text-center">{$val.ma_phieunhap}</td>
                                                            <td class="text-center">{date("d/m/Y",
                                                                strtotime($val.thoigian_nhap))}</td>
                                                            <td class="text-center">{$val.ten_nhacungcap}</td>
                                                            <td class="text-center">
                                                                <!-- <button type="button" class="btn btn-info suaPN"
                                                                    title="Sửa phiếu nhập"><i class="fas fa-pencil-alt"
                                                                        aria-hidden="true"></i></button> -->
                                                                <!-- <button 
                                                                        type="button" 
                                                                        class="btn btn-info suasanpham"
                                                                        ma_phieunhap              = "{$val.ma_phieunhap}"
                                                                        thoigian_nhap              = "{$val.thoigian_nhap}"
                                                                        ma_nhacungcap              = "{$val.ma_nhacungcap}"
                                                                        data-toggle="modal" data-target="#modal-default1"
                                                                        ><i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                                    </button> -->
                                                                <button 
                                                                    type="button" 
                                                                    class="btn btn-info suaPN"
                                                                    ma_phieunhap               = "{$val.ma_phieunhap}"
                                                                    data-sanpham               = '{$val.ctphieunhap}'
                                                                    data-toggle="modal" data-target="#modal-default1"
                                                                    ><i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                                </button>
                                                                <button name="xoaPN" class="btn btn-danger xoaPN"
                                                                    data-ma="{$val.ma_phieunhap}"
                                                                    value="{$val.ma_phieunhap}"
                                                                    title="Xóa phiếu nhập"><i class="far fa-trash-alt"
                                                                        aria-hidden="true"></i></button>
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
                                                            <input type="date" class="form-control"
                                                                name="data[thoigian_nhap]" value="{date('Y-m-d')}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nhà cung cấp:</label>
                                                    <select class="form-control" name="data[ma_nhacungcap]" required>
                                                        {foreach $nhacc as $key => $val}
                                                        <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}
                                                        </option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="table-repsonsive" style="margin-top: 10px;">
                                                <span id="error"></span>
                                                <table class="table table-bordered" id="item_table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Tên sản phẩm</th>
                                                            <th class="text-center">Số lượng</th>
                                                            <th class="text-center">Đơn giá nhập</th>
                                                            <th class="text-center">Đơn giá bán</th>
                                                            <th class="text-center">Thành tiền</th>
                                                            <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                    type="button" name="add"
                                                                    class="btn btn-success btn-sm add"><i
                                                                        class="fa fa-plus-square"
                                                                        aria-hidden="true"></i></span></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        <tr class="hidden" id="row_product">
                                                            <td>
                                                                <select name="data[ma_sanpham][]"
                                                                    class="form-control item_unit " required>
                                                                    <option value="">Chọn sản phẩm</option>
                                                                    {foreach $sanpham as $val}
                                                                    {if $val.trangthai_dang_sanpham==1}
                                                                    <option value="{$val.ma_sanpham}">{$val.ten_sanpham}
                                                                    </option>
                                                                    {/if}
                                                                    {/foreach}
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="data[soluong_nhap][]"
                                                                    class="form-control soluong" required />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="data[dongia_nhap][]"
                                                                    class="form-control item_quantity dongia"
                                                                    required />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="dongiaban[]"
                                                                    class="form-control item_quantity dongiaban" />
                                                            </td>
                                                            <td>
                                                                <input type="text" disabled
                                                                    class="form-control item_total thanhtien" />
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" name="remove"
                                                                    class="btn btn-danger btn-sm remove"><i
                                                                        class="fa fa-minus-square"
                                                                        aria-hidden="true"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <hr>
                                            <button type="submit" name="themphieunhap" value="Thêm"
                                                class="btn btn-success btn-flat themphieunhap">Thêm phiếu nhập</button>
                                            <button type="reset" class="btn btn-default huyphieunhap"><i
                                                    class="fa fa-window-close" aria-hidden="true"></i>&nbsp;
                                                Hủy</button>
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

<div class="modal fade show" id="modal-default1" style="padding-right: 16px;" aria-modal="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa phiếu nhập</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Ngày nhập:</label>
                                        <input type="date" class="form-control" disabled name="data[thoigian_nhap]"
                                            value="{date('Y-m-d')}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nhà cung cấp:</label>
                                <select class="form-control" name="data[ma_nhacungcap]" disabled required>
                                    {foreach $nhacc as $key => $val}
                                    <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="table-repsonsive" style="margin-top: 10px;">
                            <span id="error"></span>
                            <table class="table table-bordered" id="item_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Ảnh sản phẩm</th>
                                        <th class="text-center">Tên sản phẩm</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Đơn giá nhập</th>
                                        <th class="text-center">Đơn giá bán</th>
                                        <th class="text-center">Thành tiền</th>
                                        <!-- <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button type="button" name="add_insert"
                                                class="btn btn-success btn-sm add_insert"><i class="fa fa-plus-square"
                                                    aria-hidden="true"></i></span></button></th> -->
                                    </tr>
                                </thead>
                                <tbody id="tbody_pn">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <hr>
                        <button type="submit" name="capnhatpn" value="Thêm"
                            class="btn btn-success btn-flat capnhatpn">Cập nhật phiếu nhập</button>
                        <button type="reset" class="btn btn-default huyphieunhap"><i class="fa fa-window-close"
                                aria-hidden="true"></i>&nbsp; Hủy</button>
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
<script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
<script type="text/javascript" src="{$url}public/js/suaphieunhap.js"></script>
<script type="text/javascript">
    // $('.dongia').simpleMoneyFormat();
    // $('.dongiaban').simpleMoneyFormat();
    $('.thanhtien').simpleMoneyFormat();
    $(document).ready(function () {
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
</script>