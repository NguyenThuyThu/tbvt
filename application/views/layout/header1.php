<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiết bị viễn thông Việt Nam</title>
    <link rel="stylesheet" href="{base_url()}/public/bootstrap/css/bootstrap.min.css">
    <base href="{base_url()}">
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/css/style.css?t={time()}">
    <script src="{base_url()}public/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/css/animate.css">
    <script src="{base_url()}public/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="{base_url()}/public/css/dataTables.bootstrap.min.css">
    <script src="{base_url()}public/jquery/jquery.dataTables.min.js"></script>
    <script src="{base_url()}public/jquery/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{base_url()}public/Toastr/toastr.css">
    <script type="text/javascript" src="{base_url()}public/Toastr/tienganh.js"></script>
    <script type="text/javascript" src="{base_url()}public/Toastr/toastr.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <!-- Custome -->
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/css/main.css"/>
    <script type="text/javascript" src="{base_url()}/public/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/jquery/feature_carousel.css" />
    <link rel="stylesheet" type="text/css" href="{base_url()}/public/jquery/jquery.fancybox.css" />
    <script type="text/javascript" src="{base_url()}/public/jquery/jquery.mousewheel.pack.js"></script>
    <script type="text/javascript" src="{base_url()}/public/jquery/jquery.fancybox.js"></script>
    <script type="text/javascript" src="{base_url()}/public/jquery/feature_carousel.js"></script>
    <script type="text/javascript" src="{base_url()}/public/js/fancybox.js"></script>
   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
   <!-- Header -->
        <header class="header">
            <div class="grid">
                <div class="header__top">
                    <!-- Logo -->
                    <div class="header__logo">
                        <img src="public/images/VTX.png" alt="" class="header__logo-img">
                    </div>

                    <!-- Search -->
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm">

                            <!-- Search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Cáp mạng cat5e</a>
                                    </li>

                                    <li class="header__search-history-item">
                                        <a href="">Cáp mạng cat5e</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="header__search-selection">
                            <span class="header__search-selection-label">Tất cả</span>
                            <i class="header__search-selection-icon fas fa-angle-down"></i>

                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item-active">
                                    <span>Trong shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                                <li class="header__search-option-item">
                                    <span>Ngoài shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div> -->
                        <button class="header__search-btn">
                            <i class="fa fa-search" aria-hidden="true" style="color: aliceblue;"></i>
                        </button>
                    </div>

                    <!-- User -->
                    <div class="header__user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <div class="header__user-users">
                            <span class="header__user-heading">Tài khoản</span>
                            <span class="header__user-heading"></span>
                            
                            {if !empty($session['ma_quyen'] == '3')}
                            <ul class="header__navbar-list">
                                <li class="header__navbar-user">
                                    <span class="header__navbar-user-name">{$session['hoten_thanhvien']}</span>

                                    <ul class="header__navbar-user-menu">
                                        <li class="header__navbar-user-item">
                                            <a href="">Tài khoản của tôi</a>
                                        </li>

                                        <li class="header__navbar-user-item">
                                            <a href="{$url}donmua">Đơn mua</a>
                                        </li>
                                        
                                        <li class="header__navbar-user-item">
                                            <a href="{$url}dangxuat">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            {else}
                            <ul class="header__navbar-list">
                                <li>
                                    <a class="header__navbar-item header__navbar-item--strong header__navbar-item--separate" href="{$url}dangnhap">Đăng ký</a>
                                    
                                </li>
                                <li>
                                    <a class="header__navbar-item header__navbar-item--strong" href="{$url}dangnhap">Đăng nhập</a>
                                </li>
                            </ul>
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="header__bottom-menu-wrap">
                        <i class="header__bottom-menu-wrap-icon fas fa-bars"></i>
                        <span class="header__bottom-menu-wrap-heading">DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="header__bottom-menu-home">
                        <ul class="header__bottom-menu-home-list">
                            <li class="header__bottom-menu-home-item">
                                <a href="{$url}" class="header__bottom-menu-home-link">Trang chủ</a>
                            </li>
                            <li class="header__bottom-menu-home-item">
                                <a href="{$url}trangsanpham" class="header__bottom-menu-home-link">Sản phẩm</a>
                            </li>
                            <li class="header__bottom-menu-home-item">
                                <a href="{$url}tranggioithieu" class="header__bottom-menu-home-link">Giới thiệu</a>
                            </li>
                            <li class="header__bottom-menu-home-item">
                                <a href="{$url}tranglienhe" class="header__bottom-menu-home-link">Liên hệ</a>
                            </li>
                            <li class="header__bottom-menu-home-item">
                                <a href="{$url}tranghoidap" class="header__bottom-menu-home-link">Hỏi đáp - Hỗ trợ kỹ thuật</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__bottom-cart">
                        {if !empty($session)}
                       <div class="header__bottom-cart-wrap" id="cart_button" onclick="show_cart();">
                            <a href="{$baseURL}giohang">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <input type="button" id="total_items" value="{$sumCart}" class="total_items">
                                <span class="header__bottom-cart-heading">Giỏ hàng</span>
                            </a>
                        </div>
                        {else}
                        <div class="header__bottom-cart-wrap" id="cart_button" onclick="show_cart();">
                            <a href="{$url}dangnhap">
                                <i class="header__bottom-cart-icon fas fa-cart-plus"></i>
                                <input type="button" id="total_items" value="0">
                                <span class="header__bottom-cart-heading">Giỏ hàng</span>
                            </a>
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->
