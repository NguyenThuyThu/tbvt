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
		$trangthai = "";
		$masp = "";
		// if($this->input->get('product')){
		// 	$masp = explode("_", $this->input->get('product'))[1];
		// 	$check = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, "ma_thanhvien" => $session['ma_thanhvien']));
		// 	if(!empty($check)){
		// 		return redirect("giohang");
		// 	}
		// }
		$content 	= $this->Mtrangchu->getdulieu($ID);
		$splq = $this->Mtrangchu->getSPLQ($masp);
		// load function ajax ở đây
		switch ($this->input->post('action')) {
			case 'addCart':
				$this->addCart($session);
				break;
			case 'load_cart':
				$this->load_cart($session);
				break;
			case 'buy_now':
				$this->buy_now($session);
				break;	
			default:
				break;
		}
		$soluong = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_thanhvien" => $session['ma_thanhvien'], "ma_sanpham" => $ID));
		if(!empty($soluong)){
			$soluong = $soluong[0]['soluong'];
			$trangthai = "Đã có vào giỏ hàng";
		}else{
			$soluong = 1;
		}
		$temp = array(
			'template' => 'Giaodien/Vtrangchitiet',
			'data' => array(
				'dssp'  	=> $product,
				'dmsp'  	=> $this->Mtrangchu->get_dmsanpham(),
				'content'	=> $content,
				'splq'      => $splq,
				'trangthai'	=> $trangthai,
				'thanhvien' => $this->Mtrangchu->get("tbl_thanhvien"),
				'soluong'	=> $soluong

			),
		);
		$this->load->view('layout/main_content', $temp);
	}

	public function buy_now($session){
		$masp   = $this->input->post('code_product');
		$trangthai = count($this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien'])));
		echo $trangthai;
		exit();
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
		$trangthai = $this->Mtrangchu->get_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien']));
		// if(!empty($trangthai)){
		// 	echo "dacosp";
		// }else{
			$de = $this->Mtrangchu->delete_many_where("tbl_cart", array("ma_sanpham" => $masp, 'ma_thanhvien' => $session['ma_thanhvien']));
			$data = array(
				'ma_sanpham'   	=> $masp,
				'ma_thanhvien' 	=> $session['ma_thanhvien'],
				'soluong'   	=> $soluong,
				'thoigian'		=> time(),
			);
			$row = $this->Mtrangchu->insert("tbl_cart", $data);
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}
		// }
		exit();
	}

	// public function dathang(){
	// 	$data 	  = $this->input->post('data');
	// 	$ma 	  = $this->input->post('dathang');
	// 	$success  = 'Cập nhật thành công';
 //        $error    = 'Cập nhật';
 //        $redirect = base_url().'trangchitiet'; 
 //        $this->update("tbl_thanhvien", "ma_thanhvien", $ma, $data, $success, $error, $redirect);
	// }

}


