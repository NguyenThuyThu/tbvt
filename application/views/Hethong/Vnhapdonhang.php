<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm đơn hàng</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                        <li class="breadcrumb-item active">Thêm đơn hàng</li>
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
                        <h3 class="card-title">Thêm đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Khách hàng:</label>
                                                <input type="text" class="form-control" name="data[]"
                                                    value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Trạng thái đơn hàng:</label>
                                        <select class="form-control" name="data[ma_trangthai_giaohang]" required>
                                            {foreach $trangthaigh as $key => $val}
                                            <option value="{$val.ma_trangthai_giaohang}">{$val.ten_trangthai_giaohang}</option>
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
                                                <th class="text-center">Đơn giá</th>
                                                <th class="text-center">Thành tiền</th>
                                                <th style="width: 10%">Tác vụ&nbsp;&nbsp;<button type="button"
                                                        name="add" class="btn btn-success btn-sm add"><i
                                                            class="fa fa-plus-square"
                                                            aria-hidden="true"></i></span></button></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr class="hidden" id="row_product">
                                                <td>
                                                    <select name="data[ma_sanpham][]"
                                                        class="form-control item_unit select2" required>
                                                        <option value="">Chọn sản phẩm</option>
                                                        {foreach $sanpham as $val}
                                                        {if $val.trangthai_dang_sanpham==1}
                                                        <option value="{$val.ma_sanpham}">{$val.ten_sanpham}</option>
                                                        {/if}
                                                        {/foreach}
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="data[soluong_nhap][]"
                                                        class="form-control soluong" required />
                                                </td>
                                                <td>
                                                    <input type="number" name="data[dongia_sanpham][]"
                                                        class="form-control item_quantity dongia" required />
                                                </td>
                                                <td>
                                                    <input type="text" disabled
                                                        class="form-control item_total thanhtien" />
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" name="remove"
                                                        class="btn btn-danger btn-sm remove"><i
                                                            class="fa fa-minus-square" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <hr>
                                <button type="submit" name="themdonhang" value="Thêm"
                                    class="btn btn-success btn-flat themdonhang">Thêm đơn hàng</button>
                            </div>
                            <br>
                            <br>
                        </form>
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