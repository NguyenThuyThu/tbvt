<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cdonhang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mdonhang');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
        // $ma_hoadonmua=$this->input->get('chitiet');
		// $content 	= $this->Mdonhang->getdulieu($ma_hoadonmua);
		// pr($content);

		if($this->input->post('capnhatTTXL')){
			$this->capnhatTTXL();
		}
		if($this->input->post('capnhatTTGH')){
			$this->capnhatTTGH();
		}

		if($this->input->post('capnhatTTHT')){
			$this->capnhatTTHT();
		}

		$danhsachdonhang = $this->Mdonhang->getDonhang();
		foreach ($danhsachdonhang as $key => $value) {
			$danhsachdonhang[$key]['ctdonhang'] = json_encode($this->Mdonhang->getCTDH($value['ma_hoadonmua']));
		}
		// pr($danhsachdonhang);

		$temp = array(
			'template' => 'Hethong/Vdonhang',
			'data' => array(
				'danhsachdonhang' => $danhsachdonhang,
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function capnhatTTXL() {
		$ma 	  = $this->input->post('capnhatTTXL');
		$trangthai = array(
				'ma_trangthai_giaohang' 	=> 2
		);
		$success  = 'Đơn hàng xử lý thành công';
        $error    = 'Đơn hàng đã được xử lý';
        $redirect = base_url().'donhang'; 
        $this->update("tbl_hoadonmua", "ma_hoadonmua", $ma, $trangthai, $success, $error, $redirect);
    }

    public function capnhatTTGH() {
		$ma 	  = $this->input->post('capnhatTTGH');
		$trangthai = array(
				'ma_trangthai_giaohang' 	=> 3
		);
		$success  = 'Đơn hàng bắt đầu giao';
        $error    = 'Đơn hàng đang được giao';
        $redirect = base_url().'donhang'; 
        $this->update("tbl_hoadonmua", "ma_hoadonmua", $ma, $trangthai, $success, $error, $redirect);
    }
    public function capnhatTTHT() {
		$ma 	  = $this->input->post('capnhatTTHT');
		$trangthai = array(
				'ma_trangthai_giaohang' 	=> 4
		);
		$success  = 'Đơn hàng đã giao thành công';
        $error    = 'Đơn hàng đã được giao';
        $redirect = base_url().'donhang'; 
        $this->update("tbl_hoadonmua", "ma_hoadonmua", $ma, $trangthai, $success, $error, $redirect);
    }
}