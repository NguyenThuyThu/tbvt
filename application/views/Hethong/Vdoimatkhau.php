<!--Main Container -->
<script type="text/javascript" src="{$url}assets/js/hethong/doimatkhau.js"></script>
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Đổi mật khẩu
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Quản lý cán bộ</li>
                    <li><a class="link-effect" href="javascript:void(0)">Đổi mật khẩu</a></li>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                {alert_messages($tinnhan['hd'], $tinnhan['class'], $tinnhan['info'])}
                            </div>

                            <form action="" method="POST" class="form-horizontal" autocomplete="off">
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <label class="control-label col-sm-3">Tài khoản</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="taikhoan" class="form-control" value="{($taikhoan) ? $taikhoan[0]['ten_taikhoan'] : NULL}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row" id="matkhauhientai">
                                    <div class="col-sm-8">
                                        <label class="control-label col-sm-3">Mật khẩu hiện tại</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="matkhauhientai"  class="form-control" value="{($luugiatri) ? $luugiatri['matkhau_taikhoan'] : $taikhoan[0]['Banro_mk']}" {if !empty($taikhoan)}readonly{/if} required/>
                                            <p class="text-danger mkhientai-error"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <label class="control-label col-sm-3">Mật khẩu mới</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="matkhaumoi" class="form-control" value="{($luugiatri) ? $luugiatri['smkmoi'] : NULL}" required>
                                            <p class="text-danger mkmoi-error"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <label class="control-label col-sm-3">Nhập lại mật khẩu</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="xacnhanmatkhaumoi" class="form-control" value="{($luugiatri) ? $luugiatri['xacnhanmkmoi'] : NULL}" required>
                                            <p class="text-danger mkxacnhan-error"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <div class="col-sm-8 col-sm-offset-3 text-right">
                                            <button type="submit" name="doimatkhau" value="doimatkhau" class="btn btn-primary btn-flat">Lưu thay đổi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<!-- END Main Container-->
<script type="text/javascript">
    
    $("#matkhauhientai").hide();
</script>