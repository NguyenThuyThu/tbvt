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

		if($this->input->post('capnhat')){
            $this->_tinnhan=$this->updateStaff();
		}
		if($this->input->get('ma_canbo')){
            $idStaff=$this->input->get('ma_canbo');
            $this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
        }else{
        	$idStaff=$this->input->get('ma_thanhvien');
			$this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
        }
		
		$get_diachi = $this->Mcanbo->get_diachi($session['ma_thanhvien']);
		$temp = array(
			'template' => 'Hethong/Vthongtincanhan',
			'data' => array(
				'diachi' 		=> $get_diachi,
			)
		);
		$this->load->view('layout/content',$temp);
	}

} // End class


