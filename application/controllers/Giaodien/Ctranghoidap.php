<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ctranghoidap extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/Mhome');
	}

	public function index()
	{
		$data = array(

	 		'title' => 'Hỏi đáp - Hỗ trợ kỹ thuật',
	 		'baseURL' => base_url()
	 		);
	 	$temp['data'] = $data;
	 	$temp['template'] = 'Giaodien/Vtranghoidap';
		$this->load->view('layout/main_content', $temp);

	}
}


