<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// GIAO DIỆN
$route['dangnhap'] ='Giaodien/Clogin';
$route['dangxuat'] = 'Giaodien/Clogin/DangXuat';
$route['trangsanpham'] = 'Giaodien/Ctrangsanpham';
$route['tranggioithieu'] = 'Giaodien/Ctranggioithieu';
$route['tranglienhe'] = 'Giaodien/Ctranglienhe';
$route['tranghoidap'] = 'Giaodien/Ctranghoidap';
$route['trangchitiet'] ='Giaodien/Ctrangchitiet';
$route['giohang'] = 'Giaodien/Cgiohang';
$route['thanhtoan'] = 'Giaodien/Cthanhtoan';
$route['donmua'] = 'Giaodien/Cdonmua';
$route['hoadon'] = 'Giaodien/Choadonthanhtoan';


// HỆ THỐNG
$route['trangchu'] = 'Ctrangchu';
$route['dsthanhvien'] = 'Hethong/Cdsthanhvien';
$route['thongtincanhan'] = 'Hethong/Cthongtincanhan';
$route['thongtinchitiet'] = 'Hethong/Cthongtinchitiet';
$route['phanquyen'] = 'Hethong/Cphanquyen';
$route['nhanvien'] = 'Hethong/Ccanbo';
$route['donhang'] = 'Hethong/Cdonhang';
$route['nhapdonhang'] = 'Hethong/Cnhapdonhang';

// $route['doimatkhau'] = 'Hethong/Cdoimatkhau ';

// SẢN PHẨM
$route['dmsanpham'] = 'Hethong/Cdmsanpham';
$route['sanpham'] = 'Hethong/Csanpham';
$route['donvitinh'] = 'Hethong/Cdonvitinh';


// NHẬP HÀNG
$route['phieunhap'] = 'Hethong/Cphieunhap';
$route['nhacungcap'] = 'Hethong/Cnhacungcap';


$route['default_controller'] = 'Cwebsite';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
