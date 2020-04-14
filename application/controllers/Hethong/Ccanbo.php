<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller cán bộ
*
**/
class Ccanbo extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mcanbo');
		$this->load->library('pagination');
	}
	public function index() {
		/* ---------------------- MAIN PROGRAM -----------------------*/
		
		$session = $this->session->userdata('user');

		$data['tb'] = "";
		// Bấm Thêm Tài khoản
		if($this->input->post('themtaikhoan'))
		{
			$data['tb'] = $this->ThemTaiKhoan();
		}

		if($this->input->post('themdiachi')){
			$this->themdiachi();
		}
		if($this->input->post('capnhatdiachi')){
			$this->capnhatdiachi();
		}

		if($this->input->post('xoadiachi')){
			$this->xoadiachi();
		}

		$get_diachi = $this->Mcanbo->get_diachi($session['ma_thanhvien']);
		// pr($get_diachi);
		$temp = array(
			'template' => 'Hethong/Vcanbo',
			'data' => array(
				'diachi' 		=> $get_diachi,
			)
		);
		$this->load->view('layout/content',$temp);

	}

	/*Thêm Tài khoản*/
	public function ThemTaiKhoan(){
		$ma_thanhvien= 'TV'.rand(1000,99999);
		$ma_taikhoan = 'TK'.rand(1000,99999);
		$data_thanhvien = array(
			'ma_thanhvien' => $ma_thanhvien,
			'hoten_thanhvien' => $this->input->post('hoten'), 
			'ngaysinh' => $this->input->post('ngaysinh'), 
			'gioitinh' => $this->input->post('gioitinh'), 
			'sodienthoai' => $this->input->post('sodienthoai'), 
			'email'     => $this->input->post('email')
		);

		$data_quyen_tk = array(
			'ma_taikhoan' => $ma_taikhoan,
			'ten_taikhoan'  => $this->input->post('taikhoan'),
			'makhau'   => sha1($this->input->post('password')),
			'ngaydangky'   => date('Y/m/d H:i:s'),
			'ma_thanhvien' => $ma_thanhvien,
			'ma_quyen' => 2
		);
		$check = $this->Mcanbo->get_where_row("tbl_taikhoan","ten_taikhoan", $data_quyen_tk['ten_taikhoan']);
		if(!empty($check)){
			setMessages("error", " Tài khoản của bạn đã tồn tại", " Thông báo");
			return " Tài khoản của bạn đã tồn tại!";
		}else{
			$row = $this->Mcanbo->insert("tbl_thanhvien",$data_thanhvien);
			$row = $this->Mcanbo->insert("tbl_taikhoan",$data_quyen_tk);	
			if($row > 0){
				setMessages("success", " Thêm thành công", " Thông báo");
				$data = array(
					'ma_thanhvien'  	=> $ma_thanhvien,
					'ten_taikhoan'  	=> $data_quyen_tk['ten_taikhoan'],
					'hoten_thanhvien'  	=> $data_thanhvien['hoten_thanhvien'],
					'ma_quyen' 			=> 2
				);
				return redirect(base_url("nhanvien"));

			}else{
				setMessages("error", " Thêm thất bại", " Thông báo");
				return redirect(base_url());
			}
		}
		
		
	}


	/*Thêm Địa chỉ*/
	public function themdiachi(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'nhanvien'; 
        $this->insert("tbl_diachi", $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function capnhatdiachi() {
		$ma 	  = $this->input->post('capnhatdiachi');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'nhanvien'; 
        $this->update("tbl_diachi", "ma_diachi", $ma, $data, $success, $error, $redirect);
	}

	public function xoadiachi() {
		$ma 	  = $this->input->post('xoadiachi');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'nhanvien'; 
    	$this->delete("tbl_diachi","ma_diachi",$ma, $success, $error, $redirect);
	}
	
}
