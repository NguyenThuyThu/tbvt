<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller phiếu nhập
*
**/
class Cphieunhap extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mphieunhap');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		// pr($this->Mphieunhap->getCTphieuNhap());
		if($this->input->post('themphieunhap')){
			$this->themphieunhap();
		}

		if($this->input->post('action') == "xoaphieunhap"){
			$maPN = $this->input->post('maPN');
			$row = $this->Mphieunhap->delete("tbl_ct_phieunhap", "ma_phieunhap", $maPN);
			$row = $this->Mphieunhap->delete("tbl_phieunhap", "ma_phieunhap", $maPN);
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}
			exit();
		}
		if($this->input->post("capnhatpn"){
			pr(1);
		}
		$phieunhap = $this->Mphieunhap->getPhieuNhap();
		foreach ($phieunhap as $key => $value) {
			$phieunhap[$key]['ctphieunhap'] = $this->Mphieunhap->getCTphieuNhap($value['ma_phieunhap']);
		}
		// pr($phieunhap);
		$temp = array(
			'template' => 'Hethong/Vphieunhap',
			'data' => array(
				'nhacc' => $this->Mphieunhap->get("tbl_nhacungcap"),
				'phieunhap' => $phieunhap,
				'sanpham' => $this->Mphieunhap->get_tenSP(),
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function themphieunhap(){
		$session = $this->session->userdata("user");
		$data = $this->input->post('data');
		$ma_phieunhap= 'PN'.rand(1000,99999).time();
		$phieunhaphang = array(
			'ma_phieunhap' 		=> $ma_phieunhap,
			'thoigian_nhap' 	=> $data['thoigian_nhap'],
			'ghichu'	 		=> "",
			'nguoilap' 			=> $session['ma_taikhoan'],
			'ma_nhacungcap' 	=> $data['ma_nhacungcap'],
		);
		$id = $this->Mphieunhap->add_tbl_phieunhap($phieunhaphang);
		$dongia_ban = $this->input->post("dongiaban");
		for($i=0; $i< count($data['ma_sanpham']); $i++){
			$chitiet_phieunhaphang = array(
				'ma_sanpham' 	=> $data['ma_sanpham'][$i],
				'soluong_nhap' 	=> $data['soluong_nhap'][$i],
				'dongia_nhap' 	=> $data['dongia_nhap'][$i],
				'ma_phieunhap' 	=> $phieunhaphang['ma_phieunhap'],
			);
			$dongia['dongia_sanpham'] = $dongia_ban[$i];
		// pr($chitiet_phieunhaphang);
			if($dongia['dongia_sanpham'] != ""){
				$this->Mphieunhap->update("tbl_sanpham","ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $dongia);
			}
			$sp = $this->Mphieunhap->get_where_row("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham']);
			$sl['soluong'] = $data['soluong_nhap'][$i] + $sp['soluong'];
			$this->Mphieunhap->update("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $sl);
			$this->Mphieunhap->insert("tbl_ct_phieunhap", $chitiet_phieunhaphang);
		}
		setMessages("success", "Thêm thành công", "Thông báo");
		return redirect("phieunhap");
	}

	public function suaPN() {
		$ma 	  = $this->input->post('capnhatphieunhap');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'phieunhap'; 
        $this->update("tbl_loaisanpham", "ma_loaisanpham", $ma, $data, $success, $error, $redirect);
	}
}