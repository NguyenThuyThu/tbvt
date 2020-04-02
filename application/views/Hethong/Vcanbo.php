<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quản lý nhân viên</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý hệ thống</a></li>
                        <li class="breadcrumb-item active">Thêm nhân viên</li>
                    </ol>
                </div>
            </div>
        </div>
	</section>
	
	<section class="content">
        <div class="col-lg-12">
            <div class="card card-info">
                <form method="post">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Thêm nhân viên</h3>
                        </div>
						
						<div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Tên đăng nhập*</label>
                                            <div class="col-8"><input type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Mật khẩu*</label>
                                            <div class="col-8"><input type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Họ tên*</label>
                                            <div class="col-8"><input type="text" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Ngày sinh</label>
                                            <div class="col-8"><input type="date" data-date-format="yyyy/mm/dd" data-inputmask="'alias': 'date'"  class="form-control" required >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" name="themloaisp" value="Thêm"
                                            class="btn btn-primary btn-flat" style="margin-left: 300px;">Thêm nhân viên</button>
                                    </div>
                                </div>
							</div>
							
							<div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Email</label>
                                                <div class="col-8"><input type="email" class="form-control" required
                                                        ></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Địa chỉ</label>
                                                <div class="col-8"><input type="text" class="form-control" required
                                                        ></div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Giới tính</label>
                                                <div class="col-8" style="display: flex;">
												<div class="col-4">
													<input type="radio" name="gioitinh" value="Nam" checked> Nam
												</div>

												<div class="col-4">
													<input type="radio" name="gioitinh" value="Nữ"> Nữ
												</div>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group" style="display: flex;">
                                                <label class="control-label col-3">Số điện thoại</label>
                                                <div class="col-8"><input type="text" class="form-control" required
                                                        ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>