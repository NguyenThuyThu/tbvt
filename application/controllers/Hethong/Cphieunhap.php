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
		$temp = array(
			'template' => 'Hethong/Vphieunhap',
			'data' => array(
				'nhacc' => $this->Mphieunhap->get("tbl_nhacungcap"),
				'phieunhap' => $this->Mphieunhap->getCTphieuNhap(),
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
			'ma_phieunhap' => $ma_phieunhap,
			'thoigian_nhap' 		=> $data['thoigian_nhap'],
			'ghichu'	 		=> "",
			'nguoilap' 	=> $session['ma_taikhoan'],
			'ma_nhacungcap' 		=> $data['ma_nhacungcap'],
		);
		$id = $this->Mphieunhap->add_tbl_phieunhap($phieunhaphang);
		for($i=0; $i< count($data['ma_sanpham']); $i++){
			$chitiet_phieunhaphang = array(
				'ma_sanpham' 	=> $data['ma_sanpham'][$i],
				'soluong_nhap' 	=> $data['soluong_nhap'][$i],
				'dongia_nhap' 	=> $data['dongia_nhap'][$i],
				'ma_phieunhap' 	=> $phieunhaphang['ma_phieunhap'],
			);
			$sp = $this->Mphieunhap->get_where_row("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham']);
			$sl['soluong'] = $data['soluong_nhap'][$i] + $sp['soluong'];
			$this->Mphieunhap->update("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $sl);
			$this->Mphieunhap->insert("tbl_ct_phieunhap", $chitiet_phieunhaphang);
		}
		setMessages("success", "Thêm thành công", "Thông báo");
		return redirect("phieunhap");
	}


	
}