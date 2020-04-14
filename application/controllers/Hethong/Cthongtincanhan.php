<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Thông tin cá nhân cán bộ
*
**/
class Cthongtincanhan extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Hethong/Mcanbo');
	}

	public function index() {
		$session = $this->session->userdata('user');

		$ma_thanhvien=$this->input->get('ma_thanhvien');
		$content 	= $this->Mcanbo->getdulieu($ma_thanhvien);
		// pr($content);
		
		if($this->input->post('themdiachi')){
			$this->themdiachi();
		}
		if($this->input->post('capnhatdiachi')){
			$this->capnhatdiachi();
		}

		if($this->input->post('xoadiachi')){
			$this->xoadiachi();
		}

		
		$dmsp = $this->Mdmsanpham->get('tbl_danhmuc_sanpham');
		foreach ($dmsp as $key => $value) {
			$tendm[$value['ma_dmsanpham']] = $value['ten_dmsanpham'];
		}
		$temp = array(
			'template' => 'Hethong/Vthongtincanhan',
			'data' => array(
				'diachi' 		=> $this->Mcanbo->get_where("tbl_diachi", "ma_thanhvien", $session['ma_thanhvien']),
				'content'	    => $content,
			)
		);
		$this->load->view('layout/content',$temp);
	}

	/*Thêm Địa chỉ*/
	public function themdiachi(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'sanpham'; 
        $this->insert("tbl_diachi", $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function capnhatdiachi() {
		$ma 	  = $this->input->post('capnhatdiachi');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'sanpham'; 
        $this->update("tbl_diachi", "ma_donvitinh", $ma, $data, $success, $error, $redirect);
	}

	public function xoadiachi() {
		$ma 	  = $this->input->post('xoadiachi');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'sanpham'; 
    	$this->delete("tbl_diachi","ma_donvitinh",$ma, $success, $error, $redirect);
	}

} // End class


