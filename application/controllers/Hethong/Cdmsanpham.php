<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cdmsanpham extends MY_Controller
{
	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mdmsanpham'); 
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		if($this->input->post('themdmSP')){
			$this->themdmSP();
		}
		if($this->input->post('themloaisp')){
			$this->ThemLoaiSanPham();
		}
		if($this->input->post('capnhatsanpham')){
			$this->capnhatsanpham();
		}
		if($this->input->post('xoa_dmsp')){
			$this->xoa_dmsp();
		}
		if($this->input->post('xoa_loaisp')){
			$this->xoa_loaisp();
		}
		$dmsp = $this->Mdmsanpham->get('tbl_danhmuc_sanpham');
		foreach ($dmsp as $key => $value) {
			$tendm[$value['ma_dmsanpham']] = $value['ten_dmsanpham'];
		}
		$temp = array(
			'template' => 'Hethong/Vdmsanpham',
			'data' => array(
				'dmSP' 		=> $this->Mdmsanpham->get("tbl_danhmuc_sanpham"),
				'loaiSP' 	=> $this->Mdmsanpham->get("tbl_loaisanpham"),
				'tendm'	    => $tendm,
			)
		);
		$this->load->view('layout/content',$temp);
	}

	/*Thêm DM Sản phẩm*/
	public function themdmSP(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'dmsanpham'; 
        $this->insert(" tbl_danhmuc_sanpham", $data, $success, $error, $redirect);
	}

	/*Thêm DM Sản phẩm*/
	public function ThemLoaiSanPham(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công loại sản phẩm';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'dmsanpham'; 
        $this->insert("tbl_loaisanpham", $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function capnhatsanpham() {
		$ma 	  = $this->input->post('capnhatsanpham');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'dmsanpham'; 
        $this->update("tbl_loaisanpham", "ma_loaisanpham", $ma, $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function xoa_loaisp() {
		$ma 	  = $this->input->post('xoa_loaisp');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'dmsanpham'; 
    	$this->delete("tbl_loaisanpham","ma_loaisanpham",$ma, $success, $error, $redirect);
	}
	public function xoa_dmsp() {
		$ma 	  = $this->input->post('xoa_dmsp');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'dmsanpham'; 
    	$this->delete("tbl_danhmuc_sanpham","ma_dmsanpham",$ma, $success, $error, $redirect);
	}
	

}
