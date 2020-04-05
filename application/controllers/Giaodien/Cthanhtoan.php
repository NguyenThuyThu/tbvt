<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cthanhtoan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mthanhtoan');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
	 	$title 		= 'Viễn thông Xanh Việt Nam';
	 	$khachhang = $this->Mthanhtoan->get_where_in("tbl_thanhvien", "ma_thanhvien",array("ma_thanhvien" => $session['ma_thanhvien']));
	 	// pr($khachhang);
	 	$dulieu = $this->get_Details();

	 	$temp = array(
			'template' => 'Giaodien/Vthanhtoan',
			'data' => array(
				'title' 			=> $title,
				'details_prduct'	=> $dulieu['details_prduct'],
				'thongke'			=> $dulieu['thongke'],
				'khachhang'			=> $khachhang,
				'diachi' 			=> $this->Mthanhtoan->get("tbl_diachi"),
			),
		);
		$this->load->view('layout/main_content', $temp);

	}

	function get_Details(){
		$session = $this->session->userdata('user');
		$details_prduct = $this->Mthanhtoan->get_detail_product($session['ma_thanhvien']);
		$tongsoluong = count($details_prduct);
		$tongDG  = 0;

		foreach ($details_prduct as $key => $value) {
			$tongDG += $value['dongia_sanpham']*$value['soluong'];
		}
		$tongDG = number_format($tongDG, 0, ",", ",");
		$thongke = array(
			'tongSL'	=> $tongsoluong,
			'tongDG'	=> $tongDG,
		);
		$data = array(
			'details_prduct'	=> $details_prduct,
			'thongke'			=> $thongke,
		);
		return $data;
	}
}


