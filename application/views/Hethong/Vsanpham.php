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
         {if empty($trangthai)}
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
                                        <input type="text" class="form-control" name="data[ten_sanpham]"  placeholder="Tên sản phẩm" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                                        <select class="form-control select2" name="data[ma_loaisanpham]" required>
                                            <option disabled selected>--Chọn loại sản phẩm---</option>
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
                                                    <option disabled selected>--Chọn đơn vị tính---</option>
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
                                        <select class="form-control select2" name="data[ma_nhacungcap]" required>
                                            <option disabled selected>--Chọn nhà cung cấp---</option>
                                            {foreach $nhacc as $key => $val}
                                            <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Số lượng:</label>
                                        <input type="text" class="form-control" name="data[soluong]" placeholder="Số lượng" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Đơn giá:</label>
                                        <input type="text" class="form-control money" name="data[dongia_sanpham]" placeholder="Đơn giá" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Xuất xứ:</label>
                                        <input type="text" class="form-control" name="data[xuatxu_sanpham]" placeholder="Xuất xứ" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian bảo hành:</label>
                                        <input type="text" class="form-control" name="data[thoigianbaohanh_sanpham]" placeholder="Thời gian bảo hành theo tháng" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group imgproduct" >
                                <label>Ảnh sản phẩm</label>
                                <img src="{$url}public/images/image_upload.png" id="anh" width="100%"/>
                                <input type="file" required class="form-control" value="1" name="anhsanpham" id="anhsanpham" onchange="readURL(this);" data-toggle="tooltip" data-ariginal-title="Chọn file ảnh" accept=".jpg,.png, .jpeg" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Thông số kỹ thuật</label>
                                <textarea class="form-control" rows="5" name="data[thongsokythuat_sanpham]" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                                <label>Chú ý</label>
                                <textarea class="form-control" rows="4" name="data[ghichu]" placeholder="Chú ý"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <hr>
                        <button type="submit" name="themloaisp" value="Thêm" class="btn btn-info btn-flat themloaisp">Thêm sản phẩm</button>
                        <button type="reset" class="btn btn-default huysp"><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Hủy</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        {else}
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
                                    <td class="font-w600"><b>{$ds.ten_sanpham}</b></td>
                                    <td class="hidden-xs">{$ds.soluong}</td>
                                    <td class="hidden-xs">{$ds.dongia_sanpham}</td>
                                    <td class="hidden-xs">{$ds.xuatxu_sanpham}</td>
                                    <td class="hidden-xs">{$ds.thoigianbaohanh_sanpham}</td>
                                    <td class="hidden-xs">{$ds.ten_loaisanpham}</td>
                                    <td class="hidden-xs">{$ds.ten_donvitinh}</td>
                                    <td class="hidden-xs text-center">{$ds.ngaydang}</td>
                                    <td class="hidden-xs text-center">{$ds.ten_taikhoan}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button 
                                            type="button" 
                                            class="btn btn-info suasanpham"
                                            soluong                     = "{$ds.soluong}"
                                            dongia_sanpham              = "{$ds.dongia_sanpham}"
                                            ten_sanpham                 = "{$ds.ten_sanpham}"
                                            ma_sanpham                  = "{$ds.ma_sanpham}"
                                            xuatxu_sanpham              = "{$ds.xuatxu_sanpham}"
                                            thoigianbaohanh_sanpham     = "{$ds.thoigianbaohanh_sanpham}"
                                            ma_donvitinh                = "{$ds.ma_donvitinh}"
                                            ma_loaisanpham              = "{$ds.ma_loaisanpham}"
                                            ma_nhacungcap               = "{$ds.ma_nhacungcap}"
                                            ghichu                      = "{$ds.ghichu}"
                                            linkanh_sanpham             = "{$url}public/images/anhsanpham/{$ds.linkanh_sanpham}"
                                            thongsokythuat_sanpham      = "{$ds.thongsokythuat_sanpham}"
                                            data-toggle="modal" data-target="#modal-default1"
                                            ><i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                        </button>
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
       {/if}
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
                        <label>Tên đơn vị tính</label>
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
</div>

<div class="modal fade show" id="modal-default1" style="padding-right: 16px;" aria-modal="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
             <form  method="POST"  enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên sản phẩm:</label>
                                        <input type="text" class="form-control" name="data[ten_sanpham]"  placeholder="Tên sản phẩm" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                                        <select class="form-control select2" name="data[ma_loaisanpham]" required>
                                            <option disabled selected>--Chọn loại sản phẩm---</option>
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
                                                    <option disabled selected>--Chọn đơn vị tính---</option>
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
                                        <select class="form-control select2" name="data[ma_nhacungcap]" required>
                                            <option disabled selected>--Chọn nhà cung cấp---</option>
                                            {foreach $nhacc as $key => $val}
                                            <option value="{$val.ma_nhacungcap}">{$val.ten_nhacungcap}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Số lượng:</label>
                                        <input type="text" class="form-control" name="data[soluong]" placeholder="Số lượng" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Đơn giá:</label>
                                        <input type="text" class="form-control money" name="data[dongia_sanpham]" placeholder="Đơn giá" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Xuất xứ:</label>
                                        <input type="text" class="form-control" name="data[xuatxu_sanpham]" placeholder="Xuất xứ" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian bảo hành:</label>
                                        <input type="text" class="form-control" name="data[thoigianbaohanh_sanpham]" placeholder="Thời gian bảo hành theo tháng" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group imgproduct" >
                                <label>Ảnh sản phẩm</label>
                                <img src="{$url}public/images/image_upload.png" id="anh" width="100%"/>
                                <input type="file" class="form-control" value="1" name="anhsanpham" id="anhsanpham" onchange="readURL(this);" data-toggle="tooltip" data-ariginal-title="Chọn file ảnh" accept=".jpg,.png, .jpeg" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Thông số kỹ thuật</label>
                                <textarea class="form-control" rows="5" name="data[thongsokythuat_sanpham]" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                                <label>Chú ý</label>
                                <textarea class="form-control" rows="4" name="data[ghichu]" placeholder="Chú ý"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <hr>
                        <button type="submit" name="capnhatsanpham" value="Thêm" class="btn btn-info btn-flat capnhatsanpham">Cập nhật sản phẩm</button>
                        <button type="reset" class="btn btn-default huysp"><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Hủy</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    thead tr th, tbody tr td {
        font-size: 14px !important;
        vertical-align: middle !important;;
    }
        #anh{
            padding: 10px;
            border: 1px solid #ccc;
            background-image: linear-gradient(45deg, #cdebca, #1aa2ff00);
            /*border-radius: 22px;*/
        }
        #anhsanpham{
            position: absolute;
            top: 40px;
            left: 10px;
            width: 100%;
            height: 100%;
            border-radius: 20px;
            padding: 14px 0;
            cursor: pointer;
            opacity: 0;
        }
</style>
<script type="text/javascript" src="{$url}public/js/product.js?time={time()}"></script>