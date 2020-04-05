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
		
		$temp = array(
			'template' => 'Hethong/Vdonhang',
			'data' => array(
			)
		);
		$this->load->view('layout/content',$temp);
	}
}