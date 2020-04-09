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
		// pr($session);
		if($this->input->post('luucanbo')){
            $this->_tinnhan=$this->updateStaff();
		}
		if($this->input->get('ma_canbo')){
            $idStaff=$this->input->get('ma_canbo');
            $this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
        }else{
        	$idStaff=$this->input->get('ma_thanhvien');
			$this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
        }

		$data['canbo']    = $this->_canbo;
		// pr($data['canbo']);
		$data['tinnhan']    = $this->_tinnhan;
		$data['title']    = $this->_title;
		$temp['data']     = $data ;
		$temp['template'] = 'Hethong/vthongtincanhan';
		$this->load->view('layout/content',$temp);
	}
	public function updateStaff(){
		if($this->input->get('ma_canbo')){
			$idStaff = $this->input->get('ma_canbo');
			$this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
			$data_Staff =array(
				'hoten_thanhvien' => $this->input->post('hoten'), 
				'ngaysinh' => $this->input->post('ngaysinh'),
				'gioitinh' => $this->input->post('gioitinh'),
				'diachi_thanhvien' => $this->input->post('diachi'),
				'email' => $this->input->post('email'),
				'sodienthoai' => $this->input->post('sdt')
				);
			return $this->_tinnhan = $this->Mcanbo->updateSaff($idStaff,$data_Staff);
		}else{
			$idStaff = $this->input->get('ma_thanhvien');
			$this->_canbo=$this->Mcanbo->retrieveStaff($idStaff,NULL);
			$data_Staff =array(
				'hoten_thanhvien' => $this->input->post('hoten'), 
				'ngaysinh' => $this->input->post('ngaysinh'),
				'gioitinh' => $this->input->post('gioitinh'),
				'diachi_thanhvien' => $this->input->post('diachi'),
				'email' => $this->input->post('email'),
				'sodienthoai' => $this->input->post('sdt')
				);
			return $this->_tinnhan = $this->Mcanbo->updateSaff($idStaff,$data_Staff);
		}
	}

} // End class


