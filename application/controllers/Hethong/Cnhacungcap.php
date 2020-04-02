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
		
		$temp = array(
			'template' => 'Hethong/Vnhacungcap',
			'data' => array(
				'nhacungcap' => $this->Mnhacungcap->get("tbl_nhacungcap")
			)
		);
		$this->load->view('layout/content',$temp);
	}
}