<!--Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Đơn vị tính sản phẩm
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>QUẢN LÝ SẢN PHẨM</li>
                    <li><a class="link-effect" href="javascript:void(0)">ĐƠN VỊ TÍNH SẢN PHẨM</a></li>
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
                                <div class="col col-lg-6">
                                    <form action="" method="post" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label col-md-3">Tên đơn vị tính<span class="text-danger required">*</span></label>
                                                <div class="col-md-8">
                                                    <input name="tendonvitinh" type="text" value="{($donvitinh) ? $donvitinh[0]['ten_donvitinh'] : NULL}" class="form-control" required>
                                                </div>
                                            </div>
                                        </div><br/>
                                        <div class="col-md-12 col-md-offset-6" >
                                            <input type="hidden" name="hidden_id" value="{if !empty($donvitinh)}{$donvitinh[0]['ma_donvitinh']}{/if}"><br/>
                                            <button type="submit" name="{$button_name}" value="{$button_value}" class="btn btn-primary btn-flat">{$button_value}</button>
                                            {if $button_name == 'capnhatdonvitinh'}
                                                <button type="submit" name="huy" value="huycapnhat" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
                                            {/if}
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                                <div class="col col-lg-6">
                                    <form action="" method="post" autocomplete="off">
                                        <table class="table table-bordered" id="myTable">
                                            <thead>
                                                <tr class="active">
                                                    <th class="text-center">STT</th>
                                                    <th class="text-center">Tên Đơn vị tính sản phẩm</th>
                                                    <th class="col-sm-3 text-center">Tác vụ</th>
                                                </tr>
                                            </thead>
                                            {if !empty($danhsachdonvitinh)}
                                            <tbody>
                                            {$i=1}
                                            {foreach $danhsachdonvitinh as $dt}
                                                <tr>
                                                    <td class="text-center">{$i++}</td>
                                                    <td>{$dt.ten_donvitinh}</td>
                                                    <td class="text-center">
                                                        <button type="submit" class="btn btn-default btn-sm" name="suadonvitinh" value="{$dt.ma_donvitinh}" title="Sửa"><i class="fa fa-pencil"></i></button>
                                                        <button type="submit" class="btn btn-default btn-sm" name="xoadonvitinh" value="{$dt.ma_donvitinh}" title="Xóa" onclick="return confirm('Xóa đơn vị tính sản phẩm {$dt.ten_donvitinh}?');"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                            </tbody>
                                            {/if}
                                        </table>
                                    </form>
                                </div>
                            </div>
                            

                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#myTable').DataTable();
                                });
                            </script>

                            <script type="text/javascript">

                                $(document).ready(function(){

                                    setTimeout(function(){ $('.alert').fadeOut(2000); },2000);
                                });

                            </script>
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