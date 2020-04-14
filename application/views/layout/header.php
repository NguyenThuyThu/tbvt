<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiết bị viễn thông Việt Nam</title>
       <!-- Font Awesome -->
    <link rel="stylesheet" href="{$url}plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{$url}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
    <link rel="stylesheet" href="{$url}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
    <link rel="stylesheet" href="{$url}plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
    <link rel="stylesheet" href="{$url}dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/css/animate.css">
      <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{$url}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
    <link rel="stylesheet" href="{$url}plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
    <link rel="stylesheet" href="{$url}plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <!-- jQuery -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <script src="{$url}plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$url}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <link rel="stylesheet" href="{$url}plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script type="text/javascript" src="{$url}public/js/tonghop.js"></script>
    <link rel="stylesheet" href="{$url}plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{$url}plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{$url}public/css/admin.css">
    <script type="text/javascript" src="{$url}public/js/simple.money.format.js"></script>
     <link rel="stylesheet" type="text/css" href="{$url}public/Toastr/toastr.css">
    <script type="text/javascript" src="{$url}public/Toastr/tienganh.js"></script>
    <script type="text/javascript" src="{$url}public/Toastr/toastr.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="dangxuat">
               Đăng xuất 
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="trangchu" class="d-block">{$session['hoten_thanhvien']}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-home" aria-hidden="true"></i>&nbsp;
                        <p>
                            Quản lý hệ thống
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{$url}dsthanhvien" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Danh sách thành viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{$url}phanquyen" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Phân quyền</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{$url}nhanvien" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Nhân viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <!-- <i class="fa fa-product-hunt" aria-hidden="true"></i> -->
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;
                        <p>
                            Quản lý sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{$url}dmsanpham" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Danh mục sản phẩm</p>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="{$url}sanpham" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{$url}sanpham?hienthi=danhsachsanpham" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                       <i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;
                        <p>
                            Quản lý nhập hàng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="nhaphang" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Phiếu nhập</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="nhacungcap" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Nhà cung cấp</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;
                        <p>
                            Quản lý đơn hàng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="donhang" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Danh sách Đơn hàng</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="themdonhang" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p> Thêm Đơn hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-university" aria-hidden="true"></i>&nbsp;
                        <p>
                           Quản lý phiếu bảo hành
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="phieubaohanh" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Phiếu bảo hành</p>
                            </a>
                        </li>
                    </ul>
                </li>

                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;
                        <p>
                          Báo cáo thống kê
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="bcdoanhthu" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Doanh thu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="bctonkho" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Sản phẩm tồn kho</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="bcnhapve" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Sản phẩm nhập về</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="bcbanchay" class="nav-link">
                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                <p>Sản phẩm bán chạy</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<style>
    .has-treeview{
       font-size: 14px !important;
    }
</style>

