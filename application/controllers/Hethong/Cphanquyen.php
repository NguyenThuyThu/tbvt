<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Models xử lý phân quyền
**/
class Cphanquyen extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mphanquyen'); 
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		if($this->input->post('themquyen')){
			$this->themquyen();
		}
		if($this->input->post('capnhatquyen')){
			$this->capnhatquyen();
		}
		if($this->input->post('xoaquyen')){
			$this->xoaquyen();
		}

		$temp = array(
			'template' => 'Hethong/Vphanquyen',
			'data' => array(
				'danhsachquyen' => $this->Mphanquyen->get("tbl_quyen"),
			)
		);
		$this->load->view('layout/content',$temp);
	}

	/*Thêm Quyền*/
	public function themquyen(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'phanquyen'; 
        $this->insert("tbl_quyen", $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function capnhatquyen() {
		$ma 	  = $this->input->post('capnhatquyen');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'phanquyen'; 
        $this->update("tbl_quyen", "ma_quyen", $ma, $data, $success, $error, $redirect);
	}

	public function xoaquyen() {
		$ma 	  = $this->input->post('xoaquyen');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'phanquyen'; 
    	$this->delete("tbl_quyen","ma_quyen",$ma, $success, $error, $redirect);
	}
}
/* End of file Cphanquyen.php */
/* Location: ./application/controllers/quantri/Cphanquyen.php */
 ?>