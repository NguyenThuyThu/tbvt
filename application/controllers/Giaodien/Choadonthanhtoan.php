<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Choadonthanhtoan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->model('Giaodien/Mhoadonthanhtoan');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
	 	


	 	$temp = array(
			'template' => 'Giaodien/Vhoadonthanhtoan',
			'data' => array(
				
			),
		);
		$this->load->view('layout/main_content', $temp);

	}
}


