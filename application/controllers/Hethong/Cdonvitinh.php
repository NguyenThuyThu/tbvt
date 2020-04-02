<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cdonvitinh extends CI_Controller
{
	public $_title   = 'Quản lý đơn vị tính';
	protected $_menu =''; 
	public $_thongbao = array('hd' => 'hidden="true"', 'class' => '', 'info' => '');

	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mdonvitinh'); 
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		// pr($session);
		if($session['ma_quyen'] != 1 && $session['ma_quyen'] != 2){
			redirect('403_Forbidden');
		}
		$data['button_name']  = 'themdonvitinh';
		$data['button_value'] = 'Thêm';
		// Bấm Thêm Đơn vị tính
		if($this->input->post('themdonvitinh')) {
			$this->_thongbao = $this->Themdonvitinh();
		}
		// Bấm Sửa tên Đơn vị tính
		if($this->input->post('suadonvitinh')) {
			$data['button_name']  = 'capnhatdonvitinh';
			$data['button_value'] = 'Chỉnh sửa';
		}
		// Sửa Đơn vị tính
		if($this->input->post('capnhatdonvitinh')) {
			$this->_thongbao = $this->CapNhatdonvitinh();
		}
		// Xóa Đơn vị tính
		if($this->input->post('xoadonvitinh')) {
			$this->_thongbao = $this->Mdonvitinh->xoadonvitinh($this->input->post('xoadonvitinh'));
		}

		$data['danhsachdonvitinh'] = $this->Mdonvitinh->LayDanhSachdonvitinh();
		$data['donvitinh'] = $this->LayDuLieudonvitinh();
		$data['menu']     = $this->_menu;
		$data['title']    = $this->_title;
		$data['message']  = $this->_thongbao;
		$temp['data']     = $data;
		$temp['template'] ='Hethong/Vdonvitinh';
		$this->load->view('layout/content',$temp);
	}

	/*Thêm Đơn vị tính*/
	public function Themdonvitinh(){
		$dulieu_donvitinh = array(
			'ten_donvitinh' => $this->input->post('tendonvitinh')
		);
		return $this->Mdonvitinh->themdonvitinh($dulieu_donvitinh);
	}

	/*Lấy dữ liệu*/
	public function LayDuLieudonvitinh() {
		if($this->input->post('suadonvitinh')) {
			$ma_donvitinh = $this->input->post('suadonvitinh');
			return $this->Mdonvitinh->LayDanhSachdonvitinh($ma_donvitinh); 
		}
	}
	/*Cập nhật Đơn vị tính*/
	public function CapNhatdonvitinh() {
		$ma_donvitinh = $this->input->post('hidden_id');
		$donvitinh_data = array(
			'ten_donvitinh' => $this->input->post('tendonvitinh')
		);
		//pr($donvitinh_data);
		$data = $this->Mdonvitinh->CapNhatdonvitinh($ma_donvitinh, $donvitinh_data);
		//pr($data);
		return $data;
	}
}
