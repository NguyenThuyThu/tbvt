<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sản phẩm</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý sản phẩm</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-lg-12">
           <div class="card card-info">
            <div class="card-body">
                <form  method="POST"  enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên sản phẩm:</label>
                                        <input type="text" class="form-control" name="data[ten_sanpham]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                                        <select class="form-control" name="data[ma_loaisanpham]" required>
                                            {foreach $loaiSP as $key => $val}
                                            <option value="{$val.ma_loaisanpham}">{$val.ten_loaisanpham}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label>Đơn vị tính:</label>
                                                <select class="form-control" name="data[ma_donvitinh]" required>
                                                    {foreach $donvitinh as $key => $val}
                                                        <option value="{$val.ma_donvitinh}">{$val.ten_donvitinh}</option>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chọn nhà cung cấp</label>
                                        <select class="form-control" name="data[ma_nhacungcap]" required>
                                            {foreach $nhacc as $key => $val}
                                            <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Số lượng:</label>
                                        <input type="text" class="form-control" name="data[soluong_sanpham]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Đơn giá:</label>
                                        <input type="text" class="form-control" name="data[dongia_sanpham]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Xuất xứ:</label>
                                        <input type="text" class="form-control" name="data[xuatxu_sanpham]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian bảo hành:</label>
                                        <input type="text" class="form-control" name="data[thoigianbaohanh_sanpham]" >
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <img src="{$url}public/images/image_upload.png" id="anh" alt="Ảnh đại diện" name="anh" width="100%" height="260px"/>
                                 <input type="file" class="form-control" required="" value="1" name="anhsanpham" id="anhsanpham" onchange="readURL(this);" data-toggle="tooltip" data-ariginal-title="Chọn file ảnh" accept=".jpg,.png, .jpeg" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Thông số kỹ thuật</label>
                                <textarea class="form-control" rows="4" name="data[thongsokythuat_sanpham]" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                                <label>Chú ý</label>
                                <textarea class="form-control" rows="4" name="data[ghichu_sanpham]" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <hr>
                        <button type="submit" name="themloaisp" value="Thêm" class="btn btn-info btn-flat themloaisp">Thêm sản phẩm</button>
                        <button type="reset" class="btn btn-default "><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card card-info">
            <div class="card-body">
                <form method="post">
                    <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr class="active">
                               <th class="text-center" style="width: 2%;"><center>STT</center></th>
                               <th style="width: 10%"><center>Tên sản phẩm</center></th>
                               <th style="width: 7%"><center>Số lượng</center></th>
                               <th style="width: 7%"><center>Đơn giá</center></th>
                               <th style="width: 7%"><center>Xuất xứ</center></th>
                               <th style="width: 7%"><center>Thời gian bảo hành</center></th>
                               <th style="width: 15%"><center>Loại sản phẩm</center></th>
                               <th style="width: 7%"><center>Đơn vị tính</center></th>
                               <th class="hidden-xs" style="width: 10%;"><center>Ngày đăng</center></th>
                               <th class="hidden-xs" style="width: 10%;"><center>Người đăng</center></th>
                               <th class="text-center" style="width: 7%;"><center>Tác vụ</center></th>
                           </tr>
                       </thead>
                       <tbody>
                        {foreach $sanpham as $key => $ds}
                            {if $ds.trangthai_dang_sanpham==1}
                            <tr>
                                <td class="text-center"><b>{$key+1}</b></td>
                                <td class="font-w600"><button class="button-update" id="ma_sanpham" name="ma_sanpham" value="{$ds.ma_sanpham}" style="text-align: left;">{$ds.ten_sanpham}</button></td>
                                <td class="hidden-xs">{$ds.soluong_sanpham}</td>
                                <td class="hidden-xs">{$ds.dongia_sanpham}</td>
                                <td class="hidden-xs">{$ds.xuatxu_sanpham}</td>
                                <td class="hidden-xs">{$ds.thoigianbaohanh_sanpham}</td>
                                <td class="hidden-xs">{$ds.ten_loaisanpham}</td>
                                <td class="hidden-xs">{$ds.ten_donvitinh}</td>
                                <td class="hidden-xs text-center">{date("d/m/Y", strtotime($ds.ngaydang_sanpham))}</td>
                                <td class="hidden-xs text-center">{$ds.ten_taikhoan}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-danger button" type="submit"  name="xoasanpham" value="{$ds.ma_sanpham}" onclick="return confirm('Bạn muốn xóa sản phẩm {$ds.ten_sanpham} ?')" id="xoasanpham" data-toggle="tooltip" title="Xóa sản phẩm"><span class="fa fa-trash"></span></button>
                                    </div>
                                </td>
                            </tr>
                            {/if}
                        {/foreach}
                       </tbody>
                   </table>
               </form>
           </div>
       </div>
   </div>
</section>
</div>
<div class="modal fade show" id="modal-default" style="padding-right: 16px;" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Đơn vị tính</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
             <form method="post">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên đơn vị tính</label>
                        <input type="text" class="form-control" name="data[ten_donvitinh]" >
                        <hr>
                        <button type="submit" class="btn btn-primary themDVT" name="themDVT" value="1">Cập nhật</button>
                    </div>
                </div>
                <div class="col-12">
                    <table id="example3" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr class="active">
                                <th class="text-center" width="5%">STT</th>
                                <th class="text-left" width="20%">Tên đơn vị tính</th>
                                <th class="text-center" width="9%">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $donvitinh as $key => $val}
                            <tr>
                                <td class="text-center"><b>{$key+1}</b></td>
                                <td>{$val.ten_donvitinh}</td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-info btn-sm" name="suadonvitinh" value="1" title="Sửa"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                                    <button type="submit" name="xoaDVT" class="btn btn-danger btn-sm" value="{$val.ma_donvitinh}" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục sản phẩm này không?');"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
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
    thead tr th, tbody tr td {
        font-size: 14px !important;
        vertical-align: middle !important;;
    }
</style>
<script type="text/javascript">
    function readURL(input) {
        if (input.public/images && input.public/images[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#anh')
                .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.public/images[0]);
        }
    }
</script>