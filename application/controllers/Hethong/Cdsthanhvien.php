<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller thành viên
*
**/
class Cdsthanhvien extends MY_Controller 
{
	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mdsthanhvien');
		$this->load->library('pagination');
	}
	public function index() {
		/* ---------------------- MAIN PROGRAM -----------------------*/
		
		$session = $this->session->userdata('user');
		// pr($session);
		$danhsachthanhvien = $this->Mdsthanhvien->StaffListtable();
		// pr($danhsachthanhvien);
		
		// $data['danhsachthanhvien'] = $this->Mdsthanhvien->listTable();
		// // pr($data['danhsachthanhvien']);

		// $thanhvien = $this->StaffListtable();
		// $data['info']          = $thanhvien['info'];

		
		$temp = array(
			'template' => 'Hethong/Vdsthanhvien',
			'data' => array(
				'danhsachthanhvien' => $danhsachthanhvien,
				
			)
		);
		$this->load->view('layout/content',$temp);
	}
}