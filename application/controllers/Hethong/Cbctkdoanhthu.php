<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cbctkdoanhthu extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mbctk');
	}

	public function index()
	{
		$session = $this->session->userdata('user');

		// $danhsachdonhang = $this->Mdonhang->getDonhang();
		// foreach ($danhsachdonhang as $key => $value) {
		// 	$danhsachdonhang[$key]['ctdonhang'] = json_encode($this->Mbctk->getCTDH($value['ma_hoadonmua']));
		// }

		$sanpham  = $this->Mbctk->getSanPhamHD();
		// $sumSL  = $this->Mbctk->sumSL();
		// pr($sanpham);

		$temp = array(
			'template' => 'Hethong/Vbctkdoanhthu',
			'data' => array(
				// 'danhsachdonhang' => $danhsachdonhang,
				'sanpham' 	=> $sanpham,
			)
		);
		$this->load->view('layout/content',$temp);
	}

}