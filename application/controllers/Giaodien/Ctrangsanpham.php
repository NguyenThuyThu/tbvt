<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ctrangsanpham extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtrangchu');
	}

	public function index()
	{
		$data = array(

	 		'title' => 'Tất cả sản phẩm',
	 		'baseURL' => base_url()
	 		);

		$data['dmsp']= $this->Mtrangchu->get_dmsanpham();
		$data['dssp']= $this->Mtrangchu->get_sanpham();
	 
	 	$temp['data'] = $data;
	 	$temp['template'] = 'Giaodien/Vtrangsanpham';
		$this->load->view('layout/main_content', $temp);

	}
}


