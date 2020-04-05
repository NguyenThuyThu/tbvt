<div class="container-fluid" style="background: #f3f3f3;">
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <section class="content">
                <div class="row">
                    <div class="col-lg-12" style="background: #fff;">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="nav-item" tieude=""><a class="nav-link active" data-toggle="tab"
                                            href="#activity"><b>Tất cả</b></a>
                                    <li>
                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline"><b>Chờ thanh toán</b></a>
                                    </li>

                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline1"><b>Chờ lấy hàng</b></a>
                                    </li>

                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline2"><b>Đang giao</b></a>
                                    </li>

                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline3"><b>Đã giao</b></a>
                                    </li>

                                    <li class="nav-item" tieude=""><a class="nav-link"
                                            data-toggle="tab" href="#timeline4"><b>Đã hủy</b></a>
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
                                                    <div class="col-sm-12">
                                                        <table id="example1"
                                                            class="table table-bordered table-striped dataTable"
                                                            role="grid" aria-describedby="example1_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="text-center">
                                                                        <center>STT</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Mã phiếu nhập</center>
                                                                    </th>
                                                                    <th width="20%">
                                                                        <center>Tên sản phẩm</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Nhà cung cấp</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Số lượng</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Đơn giá</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Thành tiền</center>
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
                                                                    <input type="date" class="form-control"
                                                                        name="data[thoigian_nhap]"
                                                                        value="{date('Y-m-d')}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp:</label>
                                                            <select class="form-control" name="data[ma_nhacungcap]"
                                                                required>

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
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                            type="button" name="add"
                                                                            class="btn btn-success btn-sm add"><i
                                                                                class="fa fa-plus-square"
                                                                                aria-hidden="true"></i></span></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="data[ma_sanpham][]"
                                                                            class="form-control item_unit select2"
                                                                            required>
                                                                            <option value="">Chọn sản phẩm</option>

                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[soluong_nhap][]"
                                                                            class="form-control soluong" required />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[dongia_nhap][]"
                                                                            class="form-control item_quantity dongia"
                                                                            required />
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
                                                        class="btn btn-success btn-flat themphieunhap">Thêm phiếu
                                                        nhập</button>
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

                                    <div class="tab-pane" id="timeline1">
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Ngày nhập:</label>
                                                                    <input type="date" class="form-control"
                                                                        name="data[thoigian_nhap]"
                                                                        value="{date('Y-m-d')}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp:</label>
                                                            <select class="form-control" name="data[ma_nhacungcap]"
                                                                required>

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
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                            type="button" name="add"
                                                                            class="btn btn-success btn-sm add"><i
                                                                                class="fa fa-plus-square"
                                                                                aria-hidden="true"></i></span></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="data[ma_sanpham][]"
                                                                            class="form-control item_unit select2"
                                                                            required>
                                                                            <option value="">Chọn sản phẩm</option>

                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[soluong_nhap][]"
                                                                            class="form-control soluong" required />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[dongia_nhap][]"
                                                                            class="form-control item_quantity dongia"
                                                                            required />
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
                                                        class="btn btn-success btn-flat themphieunhap">Thêm phiếu
                                                        nhập</button>
                                                    <button type="reset" class="btn btn-default huyphieunhap"><i
                                                            class="fa fa-window-close" aria-hidden="true"></i>&nbsp;
                                                        Hủy</button>
                                                </div>
                                                <br>
                                                <br>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="timeline2">
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Ngày nhập:</label>
                                                                    <input type="date" class="form-control"
                                                                        name="data[thoigian_nhap]"
                                                                        value="{date('Y-m-d')}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp:</label>
                                                            <select class="form-control" name="data[ma_nhacungcap]"
                                                                required>

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
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                            type="button" name="add"
                                                                            class="btn btn-success btn-sm add"><i
                                                                                class="fa fa-plus-square"
                                                                                aria-hidden="true"></i></span></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="data[ma_sanpham][]"
                                                                            class="form-control item_unit select2"
                                                                            required>
                                                                            <option value="">Chọn sản phẩm</option>

                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[soluong_nhap][]"
                                                                            class="form-control soluong" required />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[dongia_nhap][]"
                                                                            class="form-control item_quantity dongia"
                                                                            required />
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
                                                        class="btn btn-success btn-flat themphieunhap">Thêm phiếu
                                                        nhập</button>
                                                    <button type="reset" class="btn btn-default huyphieunhap"><i
                                                            class="fa fa-window-close" aria-hidden="true"></i>&nbsp;
                                                        Hủy</button>
                                                </div>
                                                <br>
                                                <br>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="timeline3">
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Ngày nhập:</label>
                                                                    <input type="date" class="form-control"
                                                                        name="data[thoigian_nhap]"
                                                                        value="{date('Y-m-d')}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp:</label>
                                                            <select class="form-control" name="data[ma_nhacungcap]"
                                                                required>

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
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                            type="button" name="add"
                                                                            class="btn btn-success btn-sm add"><i
                                                                                class="fa fa-plus-square"
                                                                                aria-hidden="true"></i></span></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="data[ma_sanpham][]"
                                                                            class="form-control item_unit select2"
                                                                            required>
                                                                            <option value="">Chọn sản phẩm</option>

                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[soluong_nhap][]"
                                                                            class="form-control soluong" required />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[dongia_nhap][]"
                                                                            class="form-control item_quantity dongia"
                                                                            required />
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
                                                        class="btn btn-success btn-flat themphieunhap">Thêm phiếu
                                                        nhập</button>
                                                    <button type="reset" class="btn btn-default huyphieunhap"><i
                                                            class="fa fa-window-close" aria-hidden="true"></i>&nbsp;
                                                        Hủy</button>
                                                </div>
                                                <br>
                                                <br>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="timeline4">
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Ngày nhập:</label>
                                                                    <input type="date" class="form-control"
                                                                        name="data[thoigian_nhap]"
                                                                        value="{date('Y-m-d')}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp:</label>
                                                            <select class="form-control" name="data[ma_nhacungcap]"
                                                                required>

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
                                                                    <th class="text-center">Đơn giá</th>
                                                                    <th class="text-center">Thành tiền</th>
                                                                    <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button
                                                                            type="button" name="add"
                                                                            class="btn btn-success btn-sm add"><i
                                                                                class="fa fa-plus-square"
                                                                                aria-hidden="true"></i></span></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr class="hidden" id="row_product">
                                                                    <td>
                                                                        <select name="data[ma_sanpham][]"
                                                                            class="form-control item_unit select2"
                                                                            required>
                                                                            <option value="">Chọn sản phẩm</option>

                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[soluong_nhap][]"
                                                                            class="form-control soluong" required />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="data[dongia_nhap][]"
                                                                            class="form-control item_quantity dongia"
                                                                            required />
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
                                                        class="btn btn-success btn-flat themphieunhap">Thêm phiếu
                                                        nhập</button>
                                                    <button type="reset" class="btn btn-default huyphieunhap"><i
                                                            class="fa fa-window-close" aria-hidden="true"></i>&nbsp;
                                                        Hủy</button>
                                                </div>
                                                <br>
                                                <br>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <script src="{base_url()}public/js/jquery.js"></script>
        <script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
        <script type="text/javascript">
            // $('.thanhtien').simpleMoneyFormat();
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
    </div>
    <style>
        .tensp,
        #tbody tr td {
            font-size: 14px;
            font-family: cursive;
        }

        .app__content {
            padding: 31px;
            box-shadow: 0px 0px 10px 0px #6e6e6e;
            margin-top: 19px;
        }

        thead tr th,
        tbody tr td {
            vertical-align: middle;
            font-size: 12px !important;
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #1f4e79;
            border-color: #1f4e79;
        }

        .gia {
            color: #ce0448;
            font-size: 10px;
            font-weight: 600;
        }

        .remove {
            cursor: pointer;
        }
    </style>

</div>