<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ctranglienhe extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtrangchu');
	}

	public function index()
	{
		$data = array(

			'title' => 'Liên hệ',
			'baseURL' => base_url()
		);
		
		$data['dmsp']= $this->Mtrangchu->get_dmsanpham();
		$temp['data'] = $data;
		$temp['template'] = 'Giaodien/Vtranglienhe';
		$this->load->view('layout/main_content', $temp);

	}
}


