<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-body">
                    <form method="post">
                        <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr class="active">
                                   <th class="text-center" style="width: 2%;"><center>STT</center></th>
                                   <th style="width: 40%"><center>Tên sản phẩm</center></th>
                                   <th style="width: 7%"><center>Số lượng mua</center></th>
                                   <th style="width: 7%"><center>Đơn giá</center></th>
                                   <th style="width: 7%"><center>Doanh thu</center></th>
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
                                    <td class="hidden-xs"></td>
                                </tr>
                                {/if}
                            {/foreach}
                           </tbody>
                       </table>
                   </form>
               </div>
           </div>
       </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>

<style>
    thead tr th {
        font-size: 14px !important;
        vertical-align: middle;
    }
</style>
