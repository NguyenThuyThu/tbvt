<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cdonhang extends MY_Controller
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
			'template' => 'Hethong/Vdonhang',
			'data' => array(
				'danhsachdonhang' => $danhsachdonhang,
			)
		);
		$this->load->view('layout/content',$temp);
	}
}