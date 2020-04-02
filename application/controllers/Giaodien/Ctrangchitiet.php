<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ctrangchitiet extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mtrangchu');
	}

	public function index()
	{
		$session = $this->session->userdata('user');

		$product =  $this->Mtrangchu->get_sanpham();
		$ID =  explode("_", $this->input->get('product'))[1]; // Lấy mã loại tin
		$des = [];
		$masp = "";
		if($this->input->get('product')){
			$masp = explode("_", $this->input->get('product'))[1];
			$check = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, "ma_thanhvien" => $session['ma_thanhvien']));
			if(!empty($check)){
				return redirect("giohang");
			}
			$content 	= $this->Mtrangchu->getdulieu($ID);
			$des   		= $content;
		}
		$splq = $this->Mtrangchu->getSPLQ($masp);
		// load function ajax ở đây
		switch ($this->input->post('action')) {
			case 'addCart':
				$this->addCart($session);
				break;
			case 'load_cart':
				$this->load_cart($session);
				break;
			default:
				break;
		}

		$temp = array(
			'template' => 'Giaodien/Vtrangchitiet',
			'data' => array(
				'dssp'  	=> $product,
				'dmsp'  	=> $this->Mtrangchu->get_dmsanpham(),
				'dess'  	=> $des,
				'content'	=> $content,
				'splq'      => $splq,

			),
		);
		$this->load->view('layout/main_content', $temp);
	}


	public function load_cart($session){
		$masp   = $this->input->post('code_product');
		$data = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien']));
		// $session_data['tongcart'] = count($this->Mtrangchu->get_where("tbl_cart", "ma_thanhvien", $session['ma_thanhvien']));
		// $this->session->set_userdata($session_data);
		echo json_encode($data);
		exit();
	}

	public function addCart($session){
		$soluong = $this->input->post('soluong');
		$masp    = $this->input->post('code_product');
		$masp    = $this->input->post('code_product');
		$trangthai = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien']));
		if(!empty($trangthai)){
			echo "dacosp";
		}else{
			$this->Mtrangchu->delete_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien']));
			$data = array(
				'ma_sanpham'   	=> $masp,
				'ma_thanhvien' 	=> $session['ma_thanhvien'],
				'soluong'   	=> $soluong,
			);
			$row = $this->Mtrangchu->insert("tbl_cart", $data);
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}
		}
		exit();
	}

}


