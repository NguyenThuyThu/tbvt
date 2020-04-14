<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cdonmua extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mdonmua');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		$donmua = $this->Mdonmua->donmua($session['ma_thanhvien']);

		$HD = $this->Mdonmua->getDonHang($session['ma_thanhvien']);
		foreach ($HD as $key => $value) {
			$HD[$key]['thongtinHD'] = json_encode($this->Mdonmua->donmua($value['ma_hoadonmua']));
		}

		if($this->input->post('action') == "removeHD"){
			$maHD = $this->input->post('maHD');
			$row = $this->Mdonmua->delete("tbl_ct_hoadon", "ma_hoadonmua", $maHD);
			$row = $this->Mdonmua->delete("tbl_hoadonmua", "ma_hoadonmua", $maHD);
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}
			exit();
		}

	 	$temp = array(
			'template' => 'Giaodien/Vdonmua',
			'data' => array(
				'donmua'	=> $donmua,	
				'hoadon'	=> $HD,		
			),
		);
		$this->load->view('layout/main_content', $temp);

	}
}


