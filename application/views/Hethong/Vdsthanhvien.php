<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách thành viên</h1>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Quản lý hệ thống</a></li>
            <li class="breadcrumb-item active">Danh sách thành viên</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-12" style="background: #fff;">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách thành viên</h3>
          </div>

          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="text-center">STT</th>
                        <th class="text-center" style="width: 19%;">Họ và tên</th>
                        <th class="text-center" style="width: 10%;">Ngày sinh</th>
                        <th class="text-center" style="width: 5%;">Giới tính</th>
                        <th class="text-center" style="width: 10%;">Số điện thoại</th>
                        <th class="text-center" style="width: 19%;">E-mail</th>
                        <th class="text-center" style="width: 10%;">Địa chỉ</th>
                        <th class="text-center" style="width: 10%;">Tên ĐN</th>
                        <th class="text-center" style="width: 10%;">Tên quyền</th>
                        <th class="text-center" style="width: 7%;">Tác vụ</th>
                      </tr>
                    </thead>

                    <tbody>
                      {$i=1}
                      {foreach $danhsachthanhvien as $ds}
                      <tr role="row" class="odd">
                        <td class="sorting_1">{$i++}</td>
                        <td><a class="btn-color" target="_blank" href="{$url}thongtincanhan?ma_thanhvien={$ds.ma_thanhvien}">{$ds.hoten_thanhvien}</a></td>
                        <td class="text-center">{$ds.ngaysinh_thanhvien}</td>
                        <td class="text-center">{$ds.gioitinh_thanhvien}</td>
                        <td>{$ds.sodienthoai}</td>
                        <td>{$ds.email}</td>
                        <td></td>
                        <td class="text-center">{$ds.ten_taikhoan}</td>
                        <td class="text-center">{$ds.ten_quyen}</td>
                        <td class="text-center">
                          <a class="btn-color" href="{$url}thongtinchitiet?ma_thanhvien={$ds.ma_thanhvien}"><button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Xem chi tiết"><i class="fa fa-eye"></i></button></a>
                          <a class="btn-color" href="{$url}doimatkhau?matk={$ds.ma_taikhoan}"><button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Đổi mật khẩu" ><i class="fa fa-lock"></i></button></a>
                        </td>
                      </tr>
                      {/foreach}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>





