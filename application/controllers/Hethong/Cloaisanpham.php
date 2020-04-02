<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cloaisanpham extends CI_Controller
{
	public $_title   = 'Quản lý loại sản phẩm';
	protected $_menu =''; 
	public $_thongbao = array('hd' => 'hidden="true"', 'class' => '', 'info' => '');

	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mdmsanpham'); // lấy DM sản phẩm
		$this->load->model('Hethong/Mloaisanpham'); 
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		// pr($session);
		if($session['ma_quyen'] != 1 && $session['ma_quyen'] != 2){
			redirect('403_Forbidden');
		}
		$data['button_name']  = 'themloaisp';
		$data['button_value'] = 'Thêm';

		// bấm Thêm danh mục loại sản phẩm
		if($this->input->post('themloaisp')) {
			$this->_thongbao = $this->ThemLoaiSP();
		}
		// bấm Sửa loại sản phẩm
		if($this->input->post('sualoaisp')) {
			$data['button_name']  = 'capnhatloaisp';
			$data['button_value'] = 'Chỉnh sửa';
		}

		// Sửa loại sản phẩm
		if($this->input->post('capnhatloaisp')) {
			$this->_thongbao = $this->CapNhatLoaiSP();
		}
		// Xóa loại sản phẩm
		if($this->input->post('xoaloaisp')) {
			$this->_thongbao = $this->Mloaisanpham->XoaLoaiSP($this->input->post('xoaloaisp'));
		}


		$data['danhsachloaisp'] = $this->Mloaisanpham->LayDanhSachloaisp();
		$data['danhmucsanpham'] = $this->GetSelectMenu(); // Lấy danh mục sản phẩm không có danh mục sản phẩm đang chỉnh sửa
		$data['dmsanphamhientai'] = $this->LayDuLieuDMSanPham(); // Lấy dữ liệu danh mục sản phẩm đang chỉnh sửa
		$data['loaisanpham'] = $this->LayDuLieuLoaiSP();
		// pr($data['loaisanpham']);
		$data['menu']     = $this->_menu;
		$data['title']    = $this->_title;
		$data['message']  = $this->_thongbao;
		$temp['data']     = $data;
		$temp['template'] ='Hethong/Vloaisanpham';

		$this->load->view('layout/content',$temp);
		
	}


	/*Thêm loại sản phẩm*/
	public function ThemLoaiSP(){
		$dulieu_loaisp = array(
			'ten_loaisanpham' => $this->input->post('tenloaisp'),
			'ma_dmsanpham' => $this->input->post('iddmsanpham')
		);
		return $this->Mloaisanpham->ThemLoaiSP($dulieu_loaisp);
	}

	/*Lấy dữ liệu*/
	public function LayDuLieuLoaiSP() {
		if($this->input->post('sualoaisp')) {
			$ma_loaisp = $this->input->post('sualoaisp');
			return $this->Mloaisanpham->LayDanhSachLoaiSP($ma_loaisp); 
		}
	}
	/*Cập nhật loại sản phẩm*/
	public function CapNhatLoaiSP() {
		$ma_loaisp = $this->input->post('hidden_id');
		$loaisp_data = array(
			'ten_loaisanpham' => $this->input->post('tenloaisp'),
			'ma_dmsanpham' => $this->input->post('iddmsanpham')
		);
		return $this->Mloaisanpham->CapNhatLoaiSP($ma_loaisp, $loaisp_data);
	}
	/*Lấy dữ liệu danh mục sản phẩm*/
	public function LayDuLieuDMSanPham() {
		$ma_dmsanpham = $this->input->post('ma_dmsanpham'.$this->input->post('sualoaisanpham')); // Mã danh mục sản phẩm được lấy ra từ value của input ẩn với tên : iddmsanpham{mã loại sản phẩm} 
		return $this->Mdmsanpham->LayDanhSachDMSanPham($ma_dmsanpham);
	}

	/*Lấy danh mục sản phẩm ngoại trừ danh mục sản phẩm của loại sản phẩm hiện tại đang chỉnh sửa*/
	public function GetSelectMenu(){
		$ma_dmsanpham = $this->input->post('iddmsanpham'.$this->input->post('sualoaisp')); // Mã danh mục sản phẩm được lấy ra từ value của input ẩn với tên : iddmsanpham{mã loại sản phẩm} 
		return $this->Mloaisanpham->GetSelectMenu($ma_dmsanpham);
	}
}
