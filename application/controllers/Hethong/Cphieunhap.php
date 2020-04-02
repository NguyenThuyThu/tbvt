<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller phiếu nhập
*
**/
class Cphieunhap extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mphieunhap');
	}

	public function index()
	{
		$session = $this->session->userdata('user');

		$temp = array(
			'template' => 'Hethong/Vphieunhap',
			'data' => array(
				'nhacc' => $this->Mphieunhap->get("tbl_nhacungcap"),
				'sanpham'		=> $this->Mphieunhap->get_tenSP(),
			)
		);
		$this->load->view('layout/content',$temp);
	}


	
}