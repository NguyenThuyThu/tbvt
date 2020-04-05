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
