<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phân quyền</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý hệ thống</a></li>
                        <li class="breadcrumb-item active">Phân quyền</li>
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
                            <h3 class="card-title">Phân quyền</h3>
                        </div>
                        
                        <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" style="display: flex;">
                                            <label class="control-label col-3">Tên quyền*</label>
                                            <div class="col-8"><input type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="themquyen" value="1"
                                            class="btn btn-primary btn-flat" style="margin-left: 300px;">Thêm</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                    <div class="row">
                                    <div class="col-12">
                                <div class="col-lg-12">
                                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr class="active">
                                                <th class="text-center" width="5%">STT</th>
                                                <th class="text-center" width="60%">TÊN QUYỀN</th>
                                                <th class="col-sm-3 text-center" width="20%">TÁC VỤ</th>
                                            </tr>
                                        </thead>
                                        {if !empty($danhsachquyen)}
                                            <tbody>
                                            {$i=1}
                                            {foreach $danhsachquyen as $ds}
                                                <tr>
                                                    <td class="text-center">{$i++}</td>
                                                    <td>{$ds.ten_quyen}</td>
                                                    <td class="text-center">
                                                        <button type="submit" class="btn btn-info btn-sm" name="capnhatquyen" value="{$ds.ma_quyen}" title="Sửa"><i class="fas fa-pencil-alt"></i></button>
                                                        <button type="submit" class="btn btn-danger btn-sm" name="xoaquyen" value="{$ds.ma_quyen}" title="Xóa" onclick="return confirm('Xóa quyền {$ds.ten_quyen}?');"><i class="far fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                            </tbody>
                                            {/if}
                                    </table>
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