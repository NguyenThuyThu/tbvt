<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cdonmua extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mdonmua');
	}

	public function index()
	{
		$session = $this->session->userdata('user');


	 	$temp = array(
			'template' => 'Giaodien/Vdonmua',
			'data' => array(

				
			),
		);
		$this->load->view('layout/main_content', $temp);

	}
}


