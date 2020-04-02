<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller cán bộ
*
**/
class Ccanbo extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Hethong/Mcanbo');
		$this->load->library('pagination');
	}
	public function index() {
		/* ---------------------- MAIN PROGRAM -----------------------*/
		
		$session = $this->session->userdata('user');
		$temp = array(
			'template' => 'Hethong/Vcanbo',
			'data' => array(
			)
		);
		$this->load->view('layout/content',$temp);

	}
	
}
