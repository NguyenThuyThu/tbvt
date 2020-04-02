<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cgiohang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mgiohang');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
	 	$title 		= 'Viễn thông Xanh Việt Nam';
	 	$dulieu = $this->get_Details();
	 	if($this->input->post('action') == "remove_cart"){
	 		$masp = $this->input->post('masp');
	 		if(!empty($session)){
	 			$row = $this->Mgiohang->delete_many_where("tbl_cart",array("ma_thanhvien" => $session['ma_thanhvien'], "ma_sanpham" => $masp)); 
	 			if($row > 0){
	 				echo 'thanhcong';
	 			}
	 		}else{
	 			echo "thatbai";
	 		}
	 	}
	 	if($this->input->post('action') == "changeSLSP"){
	 		$soluong = $this->input->post('soluong');
	 		$masp  = $this->input->post('masp');
	 		$row = 0;
	 		if(!empty($session)){
	 			$row = $this->Mgiohang->update_giohang($masp, $session['ma_thanhvien'], $soluong);
	 		}
	 		$data = array(
	 			'details_prduct'	=>"",
	 			'thongke'			=> ""
	 		);
	 		if($row > 0){
	 			$data = $this->get_Details();
		 		echo json_encode($data);
		 		exit();
	 		}
	 	}


	 	$temp = array(
			'template' => 'Giaodien/Vgiohang',
			'data' => array(
				'title' 			=> $title,
				'details_prduct'	=> $dulieu['details_prduct'],
				'thongke'			=> $dulieu['thongke'],
				
			),
		);
		$this->load->view('layout/main_content', $temp);

	}

	function get_Details(){
		$session = $this->session->userdata('user');
		$details_prduct = $this->Mgiohang->get_detail_product($session['ma_thanhvien']);
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


