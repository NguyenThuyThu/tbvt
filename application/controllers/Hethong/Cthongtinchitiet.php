<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Thông tin cá nhân thành viên
*
**/
class Cthongtinchitiet extends MY_Controller {
	protected    $_title= "Thông tin cá nhân";
	protected  $_tinnhan= array('hd' => 'hidden="true"', 'class' => '', 'noidung' => '');
	protected $_thanhvien;

	public function __construct() {
		parent::__construct();
		$this->load->model('Hethong/Mdsthanhvien');
	}

	public function index() {
		$session = $this->session->userdata('user');
		// pr($session);
		if($session['ma_quyen'] != 1){
			redirect('403_Forbidden');
		}
		if($this->input->post('luucanbo')){
			$this->_tinnhan=$this->updateStaff();
		}
		$idStaff=$this->input->get('ma_thanhvien');
		$this->_thanhvien=$this->Mdsthanhvien->retrieveStaff($idStaff,NULL);
		$data['thongtinchitiet']    = $this->_thanhvien;
		// pr($data['thongtinchitiet'] );exit();
		$data['title']    = $this->_title;
		$temp['data']     = $data ;
		$temp['template'] = 'Hethong/Vthongtinchitiet';
		$this->load->view('layout/content',$temp);
	}

} // End class


