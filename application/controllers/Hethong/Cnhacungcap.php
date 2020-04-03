<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller nhà cung cấp
*
**/
class Cnhacungcap extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Hethong/Mnhacungcap');

		$this->load->library('upload');

	}

	public function index()
	{
		$session = $this->session->userdata('user');
		if($this->input->post('themNhaCC')){
			$this->themNhaCC();
		}

		if($this->input->post('xoa_nhacc')){
			$this->xoa_nhacc();
		}

		if($this->input->post('capnhat')){
			$this->capnhat();
		}
		$temp = array(
			'template' => 'Hethong/Vnhacungcap',
			'data' => array(
				'nhacungcap' => $this->Mnhacungcap->get("tbl_nhacungcap")
			)
		);
		$this->load->view('layout/content',$temp);
	}
	public function themNhaCC(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'nhacungcap'; 
        $this->insert(" tbl_nhacungcap", $data, $success, $error, $redirect);
	}

	public function xoa_nhacc() {
		$ma 	  = $this->input->post('xoa_nhacc');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'nhacungcap'; 
    	$this->delete("tbl_nhacungcap","ma_nhacungcap",$ma, $success, $error, $redirect);
	}

	public function capnhat(){
		$data 	  = $this->input->post('data');
		$ma 	  = $this->input->post('capnhat');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'nhacungcap'; 
        $this->update("tbl_nhacungcap", "ma_nhacungcap", $ma, $data, $success, $error, $redirect);
	}
}