<!--Main Container -->
<main id="main-container">
	<!-- Page Header -->
	<div class="content bg-gray-lighter">
		<div class="row items-push">
			<div class="col-sm-7">
				<h1 class="page-heading">
					Thông tin chi tiết
				</h1>
			</div>
			<div class="col-sm-5 text-right hidden-xs">
				<ol class="breadcrumb push-10-t">
					<li>Quản lý thành viên</li>
					<li><a class="link-effect" href="javascript:void(0)">Thông tin chi tiết</a></li>
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
							<div class="col-md-12">
								<div class="col-sm-6">
									<div class="row">
										<p class="col-sm-4"><b>Họ và tên :</b></p>
										<p class="col-sm-8" style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['hoten_thanhvien']}{else}....................................{/if}</b></p>
									</div>
									<div class="row">
										<p class="col-sm-4"><b>Ngày sinh :</b></p>
										<p class="col-sm-8" style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['ngaysinh_thanhvien']}{else}....................................{/if}</b></p>
									</div>

									<div class="row">
										<p class="col-sm-4"><b>Giới tính :</b></p>
										<p class="col-sm-8 " style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['gioitinh_thanhvien']}{else}....................................{/if}</b></p>
									</div>

									<div class="row">
										<p class="col-sm-4"><b>Số điện thoại :</b></p>
										<p class="col-sm-8 " style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['sodienthoai']}{else}....................................{/if}</b></p>
									</div>

									<div class="row">
										<p class="col-sm-4"><b>Email :</b></p>
										<p class="col-sm-8" style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['email']}{else}....................................{/if}</b></p>
									</div>
									<div class="row">
										<p class="col-sm-4"><b>Địa chỉ :</b></p>
										<p class="col-sm-8" style="color: green;"><b>{if !empty($thongtinchitiet)}{$thongtinchitiet[0]['diachi_thanhvien']}{else}....................................{/if}</b></p>
									</div>

								</div> <!-- end col-sm-6 thứ nhất-->
							</div><!--END COL-SM-12-->
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