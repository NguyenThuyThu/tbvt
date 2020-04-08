<!--Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Loại sản phẩm
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>QUẢN LÝ SẢN PHẨM</li>
                    <li><a class="link-effect" href="javascript:void(0)">LOẠI SẢN PHẨM</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Normal Form -->
            <div class="block">
                <div class="block-content">
                    <div class="col-md-12">
                        <div class="col-md-12 notifi">
                            {alert_messages($message['hd'], $message['class'], $message['info'])}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-7">
                             <form action="" method="post" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label col-md-3">Loại sản phẩm<span class="text-danger required">*</span></label>
                                        <div class="col-md-8">
                                            <input name="tenloaisp" type="text" value="{($loaisanpham) ? $loaisanpham[0]['ten_loaisanpham'] : NULL}" class="form-control" required>
                                        </div>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <label class="control-label col-md-3">DM sản phẩm</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="iddmsanpham">
                                            <!-- <option value="{$dmsanphamhientai[0]['ma_dmsanpham']}">{$dmsanphamhientai[0]['ten_dmsanpham']}</option> -->

                                            <option value="">Chọn danh mục sản phẩm</option>
                                            {foreach $danhmucsanpham as $value}
                                            {if !empty($loaisanpham) && $loaisanpham[0]['ma_dmsanpham']==$value.ma_dmsanpham}
                                            <option value="{$value.ma_dmsanpham}" selected="selected">{$value.ten_dmsanpham}</option>
                                            {else}
                                            <option value="{$value.ma_dmsanpham}">{$value.ten_dmsanpham}</option> 
                                            {/if}
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12 col-md-offset-6" >
                                    <input type="hidden" name="hidden_id" value="{if !empty($loaisanpham)}{$loaisanpham[0]['ma_loaisanpham']}{/if}"><br/>
                                    <button type="submit" name="{$button_name}" value="{$button_value}" class="btn btn-primary btn-flat">{$button_value}</button>
                                    {if $button_name == 'capnhatloaisp'}
                                    <button type="submit" name="huy" value="huycapnhat" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
                                    {/if}
                                </div>
                            </form>
                            <hr>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <form action="" method="post" autocomplete="off">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr class="active">
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Tên loại sản phẩm</th>
                                        <th class="text-center">Tên DM sản phẩm</th>
                                        <th class="col-sm-3 text-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                {if !empty($danhsachloaisp)}
                                <tbody>
                                    {$i=1}
                                    {foreach $danhsachloaisp as $dt}
                                    <tr>
                                        <td class="text-center">{$i++}</td>
                                        <td>{$dt.ten_loaisanpham}</td>
                                        <td>{$dt.ten_dmsanpham}</td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-default btn-sm" name="sualoaisp" value="{$dt.ma_loaisanpham}" title="Sửa"><i class="fa fa-pencil"></i></button>
                                            <button type="submit" class="btn btn-default btn-sm" name="xoaloaisp" value="{$dt.ma_loaisanpham}" title="Xóa" onclick="return confirm('Xóa Loại Sản phẩm {$dt.ten_loaisanpham}?');"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                                {/if}
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Normal Form -->
</div>
<!-- END Forms Row -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container