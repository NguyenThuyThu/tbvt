<script type="text/javascript" src="{$url}assets/js/tintuc/batloi_anh.js"></script>
 <!--Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h2 class="page-heading">
                    Thông tin cá nhân
                </h2>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Quản lý hệ thống</li>
                    <li><a class="link-effect" href="javascript:void(0)">Thông tin cá nhân</a></li>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
						{if !empty($tinnhan)}
                            <div class="col-sm-12" id="thongbao">
                                {alert_messages($tinnhan['hd'], $tinnhan['class'], $tinnhan['info'])}
                            </div>
						{/if}
                            <form action="" method="post" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
                                <div class="col-md-6">
                                     <!-- Họ tên -->
                                    <div class="form-group">
                                        <label class="col-sm-4">Họ tên <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="hoten" class="form-control" value="{if !empty($canbo)}{$canbo[0]['hoten_thanhvien']}{/if}" onchange="Chuanhoa(this);" required>
                                        </div>
                                    </div>

                                    <!-- Ngày sinh -->
                                    <div class="form-group">
                                        <label class="col-sm-4">Ngày sinh <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                          <input type="date" name="ngaysinh" class="form-control datepicker" value="{if !empty($canbo)}{$canbo[0]['ngaysinh_thanhvien']}{/if}" required>
                                        </div>
                                    </div>


                                    <!-- SĐT -->
                                    <div class="form-group">
                                        <label class="col-sm-4 ">Số điện thoại <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                          <input type="text" name="sdt" id="sdt" class="form-control" onkeypress="onlyNumbers(this)" value="{if !empty($canbo)}{$canbo[0]['sodienthoai_thanhvien']}{/if}" required="required" placeholder="Vui lòng nhập giá trị số">
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="col-sm-6">
                                     <!-- Email -->
                                    <div class="form-group">
                                        <label class="col-sm-4 label-mail ">Email</label>
                                        <div class="col-sm-8">
                                          <input type="email" name="email" class="form-control" value="{if !empty($canbo)}{$canbo[0]['email_thanhvien']}{/if}">
                                        </div>
                                    </div>
                                    <!-- Địa chỉ -->
                                    <div class="form-group">
                                        <label class="col-sm-4 ">Địa chỉ</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="diachi" class="form-control"  value="{if !empty($canbo)}{$canbo[0]['diachi_thanhvien']}{/if}" >
                                        </div>
                                    </div>
                                     <!-- giới tính -->
                                    <div class="form-group">
                                        <label class="col-sm-4 col-sm-offset-1">Giới tính</label>
                                        <div class="col-sm-7">
                                            <div class="col-sm-6">
                                                <input type="radio" name="gioitinh" value="Nam" checked> Nam
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="radio" name="gioitinh" value="Nữ" {if !empty($canbo)} {if $canbo[0]['gioitinh_thanhvien']=='Nữ'}checked{/if}{/if}> Nữ
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.col-sm-6 bên phải -->

                                <div class="row">
                                    <div class="col-md-offset-8 col-sm-4 text-right">
                                        <button type="submit" class="btn btn-primary btn-flat mg-r" name="luucanbo" value="luucanbo">Cập nhật</button>
                                    </div>
                                </div> <!-- /.row -->
                                <br/>
                            </form>
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
<!-- END Main Container-->
<!-- <script type="text/javascript">
    if(getParameterByName('ma_canbo') || getParameterByName('themcanbo')){
        $('.nav-tabs li:eq(1) a').tab('show');
    }
</script> -->
	<script type="text/javascript">
    $(document).ready(function(){

    	$('.datepicker').datepick();
    	$('.datepicker').inputmask();
        setTimeout(function(){ $('#thongbao').hide(1000); },2000);

    });
</script>



 