<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cxemdonhang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mdonhang');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		$danhsachdonhang = $this->Mdonhang->getDonhang();
		// pr($danhsachdonhang);
		
		$temp = array(
			'template' => 'Hethong/Vxemdonhang',
			'data' => array(
				'danhsachdonhang' => $danhsachdonhang,
			)
		);
		$this->load->view('layout/content',$temp);
	}
}